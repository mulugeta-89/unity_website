<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Landing Page</title>
  <!-- Favicon -->
  <link rel="icon" href="{{asset("/images/tab-logo.png")}}" type="image/x-icon" />
  <link rel="shortcut icon" type="image/x-icon" href="{{asset("/images/tab-logo.png")}}" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <!-- Custom CSS -->
  <style>
    body{
        background-color: #343a40; /* Set background color */
    }
    .btn {
        background: #f7b205; /* Set button background color */
        padding: 7px 25px; /* Set button padding */
    }
    .btn:hover {
        color: white;
        background-color: #4c1864; /* Set button hover background color */
    }
  </style>
</head>
<body>
    
    <!-- Header Section -->
    <header style="display: flex; justify-content: space-evenly; align-items: center">
        <h1 class="text-center display-4 font-weight-bold my-4 text-uppercase" style="color: wheat; text-align: center">
            Manage events
        </h1>
        <!-- Create Event Button -->
        <a href="/event/create" class="btn"><i class="fas fa-pen"></i> Create events</a>
        <!-- All Events Button -->
        <a href="/events/manage" class="btn"> All events</a>
        <!-- Logout Form -->
        <form class="d-inline" method="POST" action="/logout">
            @csrf
            <button type="submit" class="btn btn-primary" style="border: none">
                <i class="fas fa-door-closed"></i> Logout
            </button>
        </form>
    </header>
    
    <!-- Search Form -->
    <form action="{{ route('events.search') }}" method="GET" style="margin-bottom: 10px; display:flex; justify-content: center">
        <input type="text" name="query" placeholder="Search events" style="outline: none; padding: 7px 12px;border-radius: 5px;width: 300px; border: none">
        <button type="submit" style="background: #f7b205; border-radius: 5px;border: none; margin-left: 3px; padding: 7px 25px">Search</button>
    </form>

    <!-- Events Table -->
    <table class="table table-bordered rounded">
        <tbody>
            @unless($events->isEmpty())
            @foreach($events as $event)
            <tr class="border">
                <!-- Event Title Column -->
                <td class="px-4 py-3 border-top border-bottom">
                    <a href="/event/{{$event->id}}" style="color: white">{{ strlen($event["title"]) > 70 ? mb_substr($event["title"], 0, 70, 'UTF-8') . '...' : $event["title"] }}</a>
                </td>
                <!-- Edit Event Button Column -->
                <td class="px-4 py-3 border-top border-bottom">
                    <a href="/event/{{$event->id}}/edit" class="btn"><i class="fas fa-pen"></i> Edit</a>
                </td>
                <!-- Delete Event Button Column -->
                <td class="px-4 py-3 border-top border-bottom">
                    <form method="POST" action="/events/{{$event->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn"><i class="fas fa-trash"></i> Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @else
            <tr class="border">
                <td colspan="3" class="px-4 py-3 border-top border-bottom">
                    <p class="text-center" style="color: white; font-size: 20px">No events Found</p>
                </td>
            </tr>
            @endunless
        </tbody>
    </table>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
