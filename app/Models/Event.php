<?php
    namespace App\Models;
    class Event {
        public static function all(){
            return [
                [
                    "id" => 1,
                    "title"=> "University Open Day",
                    "description"=> "Join us for our annual Open Day where prospective students can explore our campus, meet faculty members, and learn about our programs. There will be guided tours, presentations, and opportunities to interact with current students.",
                    "start_date"=> "2023-12-01T09:00:00",
                    "end_date" => "2023-12-01T17:00:00",
                    "location_name" => "Main Campus Auditorium",
                    
                ]
            ];
        }
    }