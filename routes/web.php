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

// This code sets up various routes for different pages in a Laravel application.

Route::get('/', function () {
    return view("pages.index"); // Renders the index page
});

Route::get('/calendar', function () {
    return view("pages.calendar"); // Renders the calendar page
});

Route::get("/history", function(){
    return view("pages.history"); // Renders the history page
});

Route::get("/vision", function(){
    return view("pages.vision"); // Renders the vision page
});

Route::get("/programs", function(){
    return view("pages.programs"); // Renders the programs page
});

Route::get("/student_services", function(){
    return view("pages.student_services"); // Renders the student services page
});

Route::get("/campuses", function(){
    return view("pages.campuses"); // Renders the campuses page
});

Route::get("/cafeteria", function(){
    return view("pages.cafeteria"); // Renders the cafeteria page
});

Route::get("/clinic", function(){
    return view("pages.clinic"); // Renders the clinic page
});

Route::get("/printing_press", function(){
    return view("pages.printing_press"); // Renders the printing press page
});

Route::get("/contact_us", function(){
    return view("pages.contact_us"); // Renders the contact us page
});

Route::get("/undergraduate", function(){
    return view("pages.undergraduate"); // Renders the undergraduate page
});

Route::get("/postgraduate", function(){
    return view("pages.postgraduate"); // Renders the postgraduate page
});

Route::get("/distance_education", function(){
    return view("pages.distance_education"); // Renders the distance education page
});

Route::get("/online_education", function(){
    return view("pages.online_education"); // Renders the online education page
});

Route::get("/campus/alamoudi", function(){
    return view("pages.alamoudi"); // Renders the alamoudi campus page
});

Route::get("/campus/dessie", function(){
    return view("pages.dessie"); // Renders the dessie campus page
});

Route::get("/campus/keranyo", function(){
    return view("pages.keranyo"); // Renders the keranyo campus page
});

Route::get("/campus/adama", function(){
    return view("pages.adama"); // Renders the adama campus page
});

Route::get("/campus/burayu", function(){
    return view("pages.burayu"); // Renders the burayu campus page
});

Route::get("/chairman", function(){
    return view("pages.chairman"); // Renders the chairman page
});

Route::get("/president_message", function(){
    return view("pages.president_message"); // Renders the president message page
});

Route::get("/library_resource", function(){
    return view("pages.library_resource"); // Renders the library resource page
});

Route::get("/circulation", function(){
    return view("pages.circulation"); // Renders the circulation page
});

Route::get("/online_catalogue", function(){
    return view("pages.online_catalogue"); // Renders the online catalogue page
});

Route::get("/reserves", function(){
    return view("pages.reserves"); // Renders the reserves page
});


// for the events
// This code defines routes related to event management in a Laravel application.
Route::get("/events", [EventController::class, "index"]);
// This route maps to the index method of the EventController class and displays a list of events.

Route::get("/events/manage", [EventController::class, "manage"])->middleware("auth");
// This route maps to the manage method of the EventController class and allows authenticated users to manage events.
// The 'auth' middleware ensures that only authenticated users can access this route.

Route::get("/event/create", [EventController::class, "create"])->middleware("auth");
// This route maps to the create method of the EventController class and allows authenticated users to create a new event.
// The 'auth' middleware ensures that only authenticated users can access this route.

Route::post("/events/store", [EventController::class, "store"])->middleware("auth");
// This route maps to the store method of the EventController class and handles the submission of a new event.
// The 'auth' middleware ensures that only authenticated users can access this route.

Route::get("/event/{event}", [EventController::class, "show"]);
// This route maps to the show method of the EventController class and displays the details of a specific event.
// The {event} parameter is a wildcard that represents the ID or slug of the event to be displayed.

Route::get("event/{event}/edit", [EventController::class, "edit"])->middleware("auth");
// This route maps to the edit method of the EventController class and allows authenticated users to edit a specific event.
// The {event} parameter is a wildcard that represents the ID or slug of the event to be edited.
// The 'auth' middleware ensures that only authenticated users can access this route.

Route::delete("event/{event}", [EventController::class, "destroy"])->middleware("auth");
// This route maps to the destroy method of the EventController class and allows authenticated users to delete a specific event.
// The {event} parameter is a wildcard that represents the ID or slug of the event to be deleted.
// The 'auth' middleware ensures that only authenticated users can access this route.

Route::put("event/{event}", [EventController::class, "update"])->middleware("auth");
// This route maps to the update method of the EventController class and handles the submission of updates to a specific event.
// The {event} parameter is a wildcard that represents the ID or slug of the event to be updated.
// The 'auth' middleware ensures that only authenticated users can access this route.


// for news
// This code defines routes related to news management in a Laravel application.
Route::get("/news", [NewsController::class, "index"]);
// This route maps to the index method of the NewsController class and displays a list of news articles.

Route::get("/news/manage", [NewsController::class, "manage"])->middleware('auth');
// This route maps to the manage method of the NewsController class and allows authenticated users to manage news articles.
// The 'auth' middleware ensures that only authenticated users can access this route.

Route::get("/news/create", [NewsController::class, "create"])->middleware("auth");
// This route maps to the create method of the NewsController class and allows authenticated users to create a new news article.
// The 'auth' middleware ensures that only authenticated users can access this route.

Route::post("/news/store", [NewsController::class, "store"])->middleware("auth");
// This route maps to the store method of the NewsController class and handles the submission of a new news article.
// The 'auth' middleware ensures that only authenticated users can access this route.

Route::get("/news/{new}", [NewsController::class, "show"]);
// This route maps to the show method of the NewsController class and displays the details of a specific news article.
// The {new} parameter is a wildcard that represents the ID or slug of the news article to be displayed.

Route::get("/news/{new}/edit", [NewsController::class, "edit"])->middleware("auth");
// This route maps to the edit method of the NewsController class and allows authenticated users to edit a specific news article.
// The {new} parameter is a wildcard that represents the ID or slug of the news article to be edited.
// The 'auth' middleware ensures that only authenticated users can access this route.

Route::put("/news/{new}", [NewsController::class, "update"])->middleware("auth");
// This route maps to the update method of the NewsController class and handles the submission of updates to a specific news article.
// The {new} parameter is a wildcard that represents the ID or slug of the news article to be updated.
// The 'auth' middleware ensures that only authenticated users can access this route.

Route::delete("/news/{new}", [NewsController::class, "destroy"])->middleware("auth");
// This route maps to the destroy method of the NewsController class and allows authenticated users to delete a specific news article.
// The {new} parameter is a wildcard that represents the ID or slug of the news article to be deleted.
// The 'auth' middleware ensures that only authenticated users can access this route.


// for advertisments
// This code defines routes related to advertisement management in a Laravel application.

Route::get("/advertisments", [AdvertismentController::class, "index"]);
// This route maps to the index method of the AdvertismentController class and displays a list of advertisements.

Route::get("/advertisments/manage", [AdvertismentController::class, "manage"])->middleware("auth");
// This route maps to the manage method of the AdvertismentController class and allows authenticated users to manage advertisements.
// The 'auth' middleware ensures that only authenticated users can access this route.

Route::get("/advertisments/create", [AdvertismentController::class, "create"])->middleware("auth");
// This route maps to the create method of the AdvertismentController class and allows authenticated users to create a new advertisement.
// The 'auth' middleware ensures that only authenticated users can access this route.

Route::post("/advertisments/store", [AdvertismentController::class, "store"])->middleware("auth");
// This route maps to the store method of the AdvertismentController class and handles the submission of a new advertisement.
// The 'auth' middleware ensures that only authenticated users can access this route.

Route::get("/advertisments/{advert}/edit", [AdvertismentController::class, "edit"])->middleware("auth");
// This route maps to the edit method of the AdvertismentController class and allows authenticated users to edit a specific advertisement.
// The {advert} parameter is a wildcard that represents the ID or slug of the advertisement to be edited.
// The 'auth' middleware ensures that only authenticated users can access this route.

Route::put("/advertisments/{advert}", [AdvertismentController::class, "update"])->middleware("auth");
// This route maps to the update method of the AdvertismentController class and handles the submission of updates to a specific advertisement.
// The {advert} parameter is a wildcard that represents the ID or slug of the advertisement to be updated.
// The 'auth' middleware ensures that only authenticated users can access this route.

Route::get("/advertisments/{advert}", [AdvertismentController::class, "show"]);
// This route maps to the show method of the AdvertismentController class and displays the details of a specific advertisement.
// The {advert} parameter is a wildcard that represents the ID or slug of the advertisement to be displayed.

Route::delete("/advertisments/{advert}", [AdvertismentController::class, "destroy"])->middleware("auth");
// This route maps to the destroy method of the AdvertismentController class and allows authenticated users to delete a specific advertisement.
// The {advert} parameter is a wildcard that represents the ID or slug of the advertisement to be deleted.
// The 'auth' middleware ensures that only authenticated users can access this route.


// for voice of unity
// This code defines routes related to the management of "Voice of Unity" content in a Laravel application.

Route::get("/voiceofunity", [VoiceUnityController::class, "index"]);
// This route maps to the index method of the VoiceUnityController class and displays a list of "Voice of Unity" content.

Route::get("/voiceofunity/manage", [VoiceUnityController::class, "manage"])->middleware("auth");
// This route maps to the manage method of the VoiceUnityController class and allows authenticated users to manage "Voice of Unity" content.
// The 'auth' middleware ensures that only authenticated users can access this route.

Route::get("/voiceofunity/create", [VoiceUnityController::class, "create"])->middleware("auth");
// This route maps to the create method of the VoiceUnityController class and allows authenticated users to create new "Voice of Unity" content.
// The 'auth' middleware ensures that only authenticated users can access this route.

Route::post("/voiceofunity/store", [VoiceUnityController::class, "store"])->middleware("auth");
// This route maps to the store method of the VoiceUnityController class and handles the submission of new "Voice of Unity" content.
// The 'auth' middleware ensures that only authenticated users can access this route.

Route::get("/voiceofunity/{voice}/edit", [VoiceUnityController::class, "edit"])->middleware("auth");
// This route maps to the edit method of the VoiceUnityController class and allows authenticated users to edit specific "Voice of Unity" content.
// The {voice} parameter is a wildcard that represents the ID or slug of the "Voice of Unity" content to be edited.
// The 'auth' middleware ensures that only authenticated users can access this route.

Route::put("/voiceofunity/{voice}", [VoiceUnityController::class, "update"])->middleware("auth");
// This route maps to the update method of the VoiceUnityController class and handles the submission of updates to specific "Voice of Unity" content.
// The {voice} parameter is a wildcard that represents the ID or slug of the "Voice of Unity" content to be updated.
// The 'auth' middleware ensures that only authenticated users can access this route.

Route::delete("/voiceofunity/{voice}", [VoiceUnityController::class, "destroy"])->middleware("auth");
// This route maps to the destroy method of the VoiceUnityController class and allows authenticated users to delete specific "Voice of Unity" content.
// The {voice} parameter is a wildcard that represents the ID or slug of the "Voice of Unity" content to be deleted.
// The 'auth' middleware ensures that only authenticated users can access this route.


// for admin
// to show the login page
Route::get("/admin", [UserController::class, "login"])->name("login");

// to login the user
// This code defines routes related to user authentication, search functionality for news and events, and user logout in a Laravel application.

Route::post('/users/authenticate', [UserController::class, 'authenticate']);
// This route maps to the authenticate method of the UserController class and handles user authentication requests.
// The POST method is typically used for submitting form data, such as login credentials.

Route::get("/admin/news/search", [NewsController::class, 'search'])->name("news.search")->middleware("auth");
// This route maps to the search method of the NewsController class and handles searching for news articles.
// The 'name' parameter assigns a name to this route, which can be used for generating URLs or redirects.
// The 'auth' middleware ensures that only authenticated users can access this route.

Route::get("/admin/events/search", [EventController::class, 'search'])->name("events.search")->middleware("auth");
// This route maps to the search method of the EventController class and handles searching for events.
// The 'name' parameter assigns a name to this route, which can be used for generating URLs or redirects.
// The 'auth' middleware ensures that only authenticated users can access this route.

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
// This route maps to the logout method of the UserController class and handles user logout requests.
// The POST method is typically used for submitting form data, such as logout requests.
// The 'auth' middleware ensures that only authenticated users can access this route.