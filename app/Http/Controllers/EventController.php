<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    //
    public function index()
    {
        // This function retrieves the latest events from the database
        // with their associated images and paginates the results, displaying 8 events per page
        $events = Event::with('images')->latest()->paginate(8);
        return view("event.index", compact("events"));
    }

    public function show(Event $event)
    {
        // This function loads the specified event along with its associated images
        $eventWithImages = $event->load('images');
        return view("event.show", [
            "event" => $eventWithImages
        ]);
    }

    public function create()
    {
        // This function renders the 'create' view for creating a new event
        return view("event.create");
    }

    public function store(Request $request)
    {
        // This function validates the form fields for creating a new event
        $formFields = $request->validate([
            "title" => "required",
            "description" => "required",
            "start_date" => "required",
            "end_date" => "required",
            "location_name" => "required",
        ]);

        // Create a new event record with the validated form data
        $event = Event::create($formFields);

        // If images are uploaded, store them and create EventImage records for each image
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('EventImages', "public");
                EventImage::create([
                    'event_id' => $event->id,
                    'photo_path' => $imagePath,
                ]);
            }
        }

        // Redirect to the events management page after creating the event
        return redirect("/events/manage");
    }

    public function update(Request $request, Event $event)
    {
        // This function validates the form fields for updating an existing event
        $formFields = $request->validate([
            "title" => "required",
            "description" => "required",
            "start_date" => "required",
            "end_date" => "required",
            "location_name" => "required",
        ]);

        // Update the event record with the validated form data
        $event->update($formFields);

        // Redirect to the events management page after updating the event
        return redirect("/events/manage");
    }

    public function edit(Event $event)
    {
        // This function renders the 'edit' view for editing an existing event
        return view("event.edit", [
            "event" => $event
        ]);
    }

    public function destroy(Event $event)
    {
        // This function deletes an existing event and its associated images
        if ($event->image && Storage::disk('public')->exists($event->image)) {
            Storage::disk('public')->delete($event->image); // Delete the event's associated image from storage
        }
        $event->delete(); // Delete the event record

        // Redirect to the events management page after deleting the event
        return redirect("/events/manage");
    }

    public function manage()
    {
        // This function retrieves the latest events from the database and paginates the results, displaying 10 events per page
        return view("event.manage", [
            "events" => Event::latest()->paginate(10)
        ]);
    }

    public function search(Request $request)
    {
        // This function searches for events based on the provided query string
        $query = $request->input('query');
        $events = Event::where('title', 'like', "%$query%")
                    ->orWhere('description', 'like', "%$query%")
                    ->get();

        // Render the 'search' view with the search results
        return view('event.search', compact('events'));
    }

}
