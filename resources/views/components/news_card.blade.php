<!-- Style block for custom CSS -->
<style>
    /* Style for event box */
    .event-bx {
        color: white; /* Text color */
        width: 540px; /* Width of the event box */
    }

    /* Media query for smaller screens */
    @media only screen and (max-width: 767px) {
        /* Styling for news div */
        #news-div {
            margin: 0; /* Resetting margin */
            width: 300px; /* Setting width for smaller screens */
        }
    }
</style>

@props(["new"]) <!-- Blade directive for passing data to the component -->

<!-- News item -->
<li class="action-card col-lg-5 col-md-5 col-sm-12 mb-3 happening" style="list-style: none; margin-right: 75px">
    
    <div class="event-bx" id="news-div"> <!-- Event box with custom styling -->
        <!-- Action box containing image -->
        <div class="action-box">
            <!-- Image for the news -->
            <img style="height: 260px" src="{{$new->images && $new->images->isNotEmpty() ? asset("storage/".$new->images->first()->photo_path) : asset("unity_photos/arif.jpg")}}" alt="">
        </div>
        <!-- Info box for details -->
        <div class="info-bx d-flex rounded" style="background: #343a40; height: 230px;">
            <div class="event-info">
                <!-- Title of the news with link -->
                <h5 class="event-title"><a style="color: white" href="/news/{{$new->id}}">{{ strlen($new["title"]) > 30 ? mb_substr($new["title"], 0, 30, 'UTF-8') . '...' : $new["title"] }}</a></h5>
                <!-- Metadata for the news -->
                <ul class="media-post">
                    <li style="color: white">{{$new->publish_date}}</a></li>
                </ul>
                <!-- Content of the news -->
                <p style="text-align: justify; color: white">{{ strlen($new["content"]) > 400 ? mb_substr($new["content"], 0, 200, 'UTF-8') . '...' : $new["content"] }}
                </p>
            </div>
        </div>
    </div>
</li>
