<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    //
    public function index()
    {
        // This function retrieves the latest news from the database
        // with their associated images and paginates the results, displaying 8 news items per page
        $news = News::with('images')->latest()->paginate(8);
        return view("news.index", compact("news"));
    }

    public function create()
    {
        // This function renders the 'create' view for creating a new news article
        return view("news.create");
    }

    public function store(Request $request)
    {
        // This function validates the form fields for creating a new news article
        $formFields = $request->validate([
            "title" => "required",
            "content" => "required",
            "publish_date" => "required",
        ]);

        // Create a new news record with the validated form data
        $new = News::create($formFields);

        // If images are uploaded, store them and create NewsImage records for each image
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('NewsImages', "public"); // Store the image in storage/app/NewsImages
                NewsImage::create([
                    'news_id' => $new->id,
                    'photo_path' => $imagePath,
                ]);
            }
        }

        // Redirect to the news management page after creating the news article
        return redirect("/news/manage");
    }

    public function show(News $new)
    {
        // This function loads the specified news article along with its associated images
        $newWithImages = $new->load('images');
        return view("news.show", [
            "new" => $newWithImages
        ]);
    }

    public function edit(News $new)
    {
        // This function renders the 'edit' view for editing an existing news article
        return view("news.edit", [
            "new" => $new
        ]);
    }

    public function update(Request $request, News $new)
    {
        // This function validates the form fields for updating an existing news article
        $formFields = $request->validate([
            "title" => "required",
            "content" => "required",
            "publish_date" => "required",
        ]);

        // Update the news record with the validated form data
        $new->update($formFields);

        // Redirect to the news management page after updating the news article
        return redirect("/news/manage");
    }

    public function destroy(News $new)
    {
        // This function deletes an existing news article and its associated images
        if ($new->image && Storage::disk('public')->exists($new->image)) {
            Storage::disk('public')->delete($new->image); // Delete the news article's associated image from storage
        }
        $new->delete(); // Delete the news record

        // Redirect to the news management page after deleting the news article
        return redirect("/news/manage");
    }

    public function manage()
    {
        // This function retrieves the latest news from the database and paginates the results, displaying 10 news items per page
        return view("news.manage", [
            "news" => News::latest()->paginate(10)
        ]);
    }

    public function search(Request $request)
    {
        // This function searches for news articles based on the provided query string
        $query = $request->input('query');
        $news = News::where('title', 'like', "%$query%")
                    ->orWhere('content', 'like', "%$query%")
                    ->get();

        // Render the 'search' view with the search results
        return view('news.search', compact('news'));
    }
}
