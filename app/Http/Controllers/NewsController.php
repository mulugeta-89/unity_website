<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function index(){
        return view("news.index",[
            "news" => News::latest()->paginate(6)
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
        News::create($formFields);
        return redirect("/news");
        
    }
}
