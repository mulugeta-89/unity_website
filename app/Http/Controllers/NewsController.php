<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    //
    public function index(){
        return view("news.index",[
            "news" => News::latest()->paginate(4)
        ]);
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
        if($request->hasFile("image")){
            $formFields["image"] = $request->file("image")->store("NewsImages", "public");
        }
        News::create($formFields);
        return redirect("news/manage");
        
    }
    public function show(News $new){
        return view("news.show",[
            "new" => $new
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
        return redirect("/news");
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
