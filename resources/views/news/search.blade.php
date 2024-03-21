<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Set character encoding -->
  <meta charset="UTF-8">
  <!-- Title of the page -->
  <title>Admin Landing Page</title>
  <!-- Favicon -->
  <link rel="icon" href="{{asset("/images/tab-logo.png")}}" type="image/x-icon" />
  <link rel="shortcut icon" type="image/x-icon" href="{{asset("/images/tab-logo.png")}}" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <!-- Custom Styles -->
  <style>
    /* Body background color */
    body{
      background-color: #343a40;
    }
    /* Button styles */
    .btn {
      background: #f7b205;
      padding: 7px 25px;
    }
    /* Button hover effect */
    .btn:hover {
      color: white;
      background-color: #4c1864;
    }
  </style>
</head>
<body>
<header style="display: flex; justify-content: space-evenly; align-items: center">
    <!-- Title of the admin panel -->
    <h1 class="text-center display-4 font-weight-bold my-4 text-uppercase" style="color: wheat; text-align: center">
        Manage News
    </h1>
    <!-- Button to create new news -->
    <a href="/news/create" class="btn"><i class="fas fa-pen"></i> Create News</a>
    <!-- Button to view all news -->
    <a href="/news/manage" class="btn"> All News</a>
    <!-- Logout button -->
    <form class="d-inline" method="POST" action="/logout">
        @csrf
        <button type="submit" class="btn btn-primary" style="border: none">
            <i class="fas fa-door-closed"></i> Logout
        </button>
    </form>
</header>
<!-- Form for searching news -->
<form action="{{ route('news.search') }}" method="GET" style="margin-bottom: 10px; display:flex; justify-content: center">
    <input type="text" name="query" placeholder="Search News" style="outline: none; padding: 7px 12px;border-radius: 5px;width: 300px; border: none">
    <button type="submit" style="background: #f7b205; border-radius: 5px;border: none; margin-left: 3px; padding: 7px 25px">Search</button>
</form>
<!-- Table to display news -->
<table class="table table-bordered rounded">
    <tbody>
        <!-- Check if there are news to display -->
        @unless($news->isEmpty())
        @foreach($news as $new)
        <tr class="border">
            <!-- Display news title with link -->
            <td class="px-4 py-3 border-top border-bottom">
                <a href="/news/{{$new->id}}" style="color: white">{{ strlen($new["title"]) > 70 ? mb_substr($new["title"], 0, 70, 'UTF-8') . '...' : $new["title"] }}</a>
            </td>
            <!-- Edit button -->
            <td class="px-4 py-3 border-top border-bottom">
                <a href="/news/{{$new->id}}/edit" class="btn"><i class="fas fa-pen"></i> Edit</a>
            </td>
            <!-- Delete button -->
            <td class="px-4 py-3 border-top border-bottom">
                <form method="POST" action="/news/{{$new->id}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn"><i class="fas fa-trash"></i> Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        <!-- If no news found -->
        @else
        <tr class="border">
            <td colspan="3" class="px-4 py-3 border-top border-bottom">
                <p class="text-center" style="color: white; font-size: 20px">No news Found</p>
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
