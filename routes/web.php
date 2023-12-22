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
    return view("pages.index");
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
Route::get("/chairman", function(){
    return view("pages.chairman");
});
Route::get("/president_message", function(){
    return view("pages.president_message");
});
Route::get("/library_resource", function(){
    return view("pages.library_resource");
});
// for the events
Route::get("/events", [EventController::class, "index"]);
Route::get("/events/manage", [EventController::class, "manage"])->middleware("auth");
Route::get("/event/create", [EventController::class, "create"])->middleware("auth");
Route::post("/events/store", [EventController::class, "store"])->middleware("auth");
Route::get("/event/{event}", [EventController::class, "show"]);
Route::get("event/{event}/edit", [EventController::class, "edit"])->middleware("auth");
Route::delete("event/{event}", [EventController::class, "destroy"])->middleware("auth");
Route::put("event/{event}", [EventController::class, "update"])->middleware("auth");

//for  news
Route::get("/news", [NewsController::class, "index"]);
Route::get("/news/manage", [NewsController::class, "manage"])->middleware('auth');
Route::get("/news/create", [NewsController::class, "create"])->middleware("auth");
Route::post("/news/store", [NewsController::class, "store"])->middleware("auth");
Route::get("/news/{new}", [NewsController::class, "show"]);
Route::get("/news/{new}/edit", [NewsController::class, "edit"])->middleware("auth");
Route::put("/news/{new}", [NewsController::class, "update"])->middleware("auth");
Route::delete("/news/{new}", [NewsController::class, "destroy"])->middleware("auth");
// for advertisments
Route::get("/advertisments", [AdvertismentController::class, "index"]);
Route::get("/advertisments/manage", [AdvertismentController::class, "manage"])->middleware("auth");
Route::get("/advertisments/create", [AdvertismentController::class, "create"])->middleware("auth");
Route::post("/advertisments/store", [AdvertismentController::class, "store"])->middleware("auth");
Route::get("/advertisments/{advert}/edit", [AdvertismentController::class, "edit"])->middleware("auth");
Route::put("/advertisments/{advert}", [AdvertismentController::class, "update"])->middleware("auth");
Route::get("/advertisments/{advert}", [AdvertismentController::class, "show"]);
Route::delete("/advertisments/{advert}", [AdvertismentController::class, "destroy"])->middleware("auth");
//for voice of unity
Route::get("/voice_of_unity", [VoiceUnityController::class, "index"]);
Route::get("/voiceofunity/manage", [VoiceUnityController::class, "manage"])->middleware("auth");
Route::get("/voiceofunity/create", [VoiceUnityController::class, "create"])->middleware("auth");
Route::post("/voiceofunity/store", [VoiceUnityController::class, "store"])->middleware("auth");
Route::get("/voiceofunity/{voice}/edit", [VoiceUnityController::class, "edit"])->middleware("auth");
Route::put("/voiceofunity/{voice}", [VoiceUnityController::class, "update"])->middleware("auth");
Route::delete("/voiceofunity/{voice}", [VoiceUnityController::class, "destroy"])->middleware("auth");


//for admin
// to show the login page
Route::get("/admin", [UserController::class, "login"])->name("login")->middleware("guest");

// to login the user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
Route::get("/admin/news/search", [NewsController::class, 'search'])->name("news.search")->middleware("auth");
Route::get("/admin/events/search", [EventController::class, 'search'])->name("events.search")->middleware("auth");
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth')->middleware("auth");