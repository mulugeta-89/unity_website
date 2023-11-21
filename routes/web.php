<?php

use Illuminate\Support\Facades\Route;
use App\Models\Event;

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
// for the events
Route::get("/events", function(){
    return view("event.index", [
        "heading" => "Events Bro",
        "events" => Event::all()
    ]);
});

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

