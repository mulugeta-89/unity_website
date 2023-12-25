<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    //
    public function index(){
        $news = News::with('images')->latest()->paginate(4);
        return view("news.index", compact("news"));
    }
    public function create(){
        return view("news.create");
    }
    public function store(Request $request){
        $formFields = $request->validate([
            "title" => "required",
            "content" => "required",
            "publish_date" => "required",
        ]);
        $new = News::create($formFields);
        // if($request->hasFile("image")){
        //     $formFields["image"] = $request->file("image")->store("NewsImages", "public");
        // }
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('NewsImages', "public"); // Store the image in storage/app/news_images
                NewsImage::create([
                    'news_id' => $new->id,
                    'photo_path' => $imagePath,
                ]);
            }
        }
        return redirect("/news");
        
    }
    public function show(News $new){
        $newWithImages = $new->load('images');
        return view("news.show",[
            "new" => $newWithImages
        ]);
    }
    public function edit(News $new){
        return view("news.edit", [
            "new" => $new
        ]);
    }
    public function update(Request $request, News $new){
        $formFields = $request->validate([
            "title" => "required",
            "content" => "required",
            "publish_date" => "required",
            
        ]);
        if($request->hasFile("image")){
            $formFields["image"] = $request->file("image")->store("NewsImages", "public");
        }
        $new->update($formFields);
        return redirect("/news/manage");
    }
    public function destroy(News $new){
        if($new->image && Storage::disk('public')->exists($new->image)) {
            Storage::disk('public')->delete($new->image);
        }
        $new->delete();
        return redirect("/news/manage");
    }
    public function manage(){
        return view("news.manage",[
            "news" => News::latest()->paginate(10)
        ]);
    }
    public function search(Request $request){
        $query = $request->input('query');
        $news = News::where('title', 'like', "%$query%")
                    ->orWhere('content', 'like', "%$query%")
                    ->get();

        return view('news.search', compact('news'));
    }
}
