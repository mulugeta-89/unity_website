<?php

use App\Models\News;
use App\Models\Event;
use App\Models\Advertisments;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\VoiceUnityController;
use App\Http\Controllers\AdvertismentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view("pages.index",[
        "events" => Event::latest()->take(4)->get(),
        "news" => News::latest()->take(4)->get()
    ]);
});
Route::get("/history", function(){
    return view("pages.history");
});
Route::get("/vision", function(){
    return view("pages.vision");
});
Route::get("/programs", function(){
    return view("pages.programs");
});
Route::get("/student_services", function(){
    return view("pages.student_services");
});
Route::get("/campuses", function(){
    return view("pages.campuses");
});
Route::get("/cafeteria", function(){
    return view("pages.cafeteria");
});
Route::get("/clinic", function(){
    return view("pages.clinic");
});
Route::get("/printing_press", function(){
    return view("pages.printing_press");
});
Route::get("/contact_us", function(){
    return view("pages.contact_us");
});
Route::get("/undergraduate", function(){
    return view("pages.undergraduate");
});
Route::get("/postgraduate", function(){
    return view("pages.postgraduate");
});
Route::get("/distance_education", function(){
    return view("pages.distance_education");
});
Route::get("/online_education", function(){
    return view("pages.online_education");
});
Route::get("/campus/alamoudi", function(){
    return view("pages.alamoudi");
});
Route::get("/campus/dessie", function(){
    return view("pages.dessie");
});
Route::get("/campus/keranyo", function(){
    return view("pages.keranyo");
});
Route::get("/campus/adama", function(){
    return view("pages.adama");
});
Route::get("/campus/burayu", function(){
    return view("pages.burayu");
});
Route::get("department/cs", function(){
    return view("pages.cs");
});
Route::get("/deparment/accounting", function(){
    return view("pages.accounting");
});
Route::get("/department/public_health", function(){
    return view("pages.public_health");
});
Route::get("/department/mba", function(){
    return view("pages.mba");
});
// for the events
Route::get("/events", [EventController::class, "index"]);
Route::get("/events/manage", [EventController::class, "manage"])->middleware("auth");
Route::get("/event/create", [EventController::class, "create"]);
Route::post("/events/store", [EventController::class, "store"]);
Route::get("/event/{event}", [EventController::class, "show"]);
Route::get("event/{event}/edit", [EventController::class, "edit"]);
Route::delete("event/{event}", [EventController::class, "destroy"]);
Route::put("event/{event}", [EventController::class, "update"]);

//for  news
Route::get("/news", [NewsController::class, "index"]);
Route::get("/news/manage", [NewsController::class, "manage"])->middleware('auth');
Route::get("/news/create", [NewsController::class, "create"]);
Route::post("/news/store", [NewsController::class, "store"]);
Route::get("/news/{new}", [NewsController::class, "show"]);
Route::get("/news/{new}/edit", [NewsController::class, "edit"]);
Route::put("/news/{new}", [NewsController::class, "update"]);
Route::delete("/news/{new}", [NewsController::class, "destroy"]);
// for advertisments
Route::get("/advertisments", [AdvertismentController::class, "index"]);
Route::get("/advertisments/manage", [AdvertismentController::class, "manage"]);
Route::get("/advertisments/create", [AdvertismentController::class, "create"]);
Route::post("/advertisments/store", [AdvertismentController::class, "store"]);
Route::get("/advertisments/{advert}/edit", [AdvertismentController::class, "edit"]);
Route::put("/advertisments/{advert}", [AdvertismentController::class, "update"]);
Route::get("/advertisments/{advert}", [AdvertismentController::class, "show"]);
Route::delete("/advertisments/{advert}", [AdvertismentController::class, "destroy"]);
//for voice of unity
Route::get("/voice_of_unity", [VoiceUnityController::class, "index"]);
Route::get("/voiceofunity/manage", [VoiceUnityController::class, "manage"]);
Route::get("/voiceofunity/create", [VoiceUnityController::class, "create"]);
Route::post("/voiceofunity/store", [VoiceUnityController::class, "store"]);
Route::get("/voiceofunity/{voice}/edit", [VoiceUnityController::class, "edit"]);
Route::put("/voiceofunity/{voice}", [VoiceUnityController::class, "update"]);
Route::delete("/voiceofunity/{voice}", [VoiceUnityController::class, "destroy"]);


//for admin
// to show the login page
Route::get("/admin", [UserController::class, "login"])->name("login");

// to login the user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
Route::get("/admin/news/search", [NewsController::class, 'search'])->name("news.search");
Route::get("/admin/events/search", [EventController::class, 'search'])->name("events.search");
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

