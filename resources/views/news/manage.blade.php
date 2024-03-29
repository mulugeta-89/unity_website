<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Landing Page</title>
  <link rel="icon" href="{{asset("/images/tab-logo.png")}}" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{asset("/images/tab-logo.png")}}" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
    <style>
        body {
            background-color: #343a40;
        }
        .btn {
            background: #f7b205;
            padding: 7px 25px;
        }
        .btn:hover {
            color: white;
            background-color: #4c1864
        }
    </style>
    
</head>
<body>
    
    <header style="display: flex; justify-content: space-evenly; align-items: center">
        <h1 class="text-center display-4 font-weight-bold my-4 text-uppercase" style="color: wheat; text-align: center">
            Manage News
        </h1>
        <a href="/news/create" class="btn"><i class="fas fa-pen"></i> Create News</a>
        <form class="d-inline" method="POST" action="/logout">
            @csrf
            <button type="submit" class="btn btn-primary" style="border: none">
                <i class="fas fa-door-closed"></i> Logout
            </button>
        </form>
    </header>
    <form action="{{ route('news.search') }}" method="GET" style="margin-bottom: 10px; display:flex; justify-content: center">
        <input type="text" name="query" placeholder="Search News" style="outline: none; padding: 7px 12px;border-radius: 5px;width: 300px; border: none">
        <button type="submit" style="background: #f7b205; border-radius: 5px;border: none; margin-left: 3px; padding: 7px 25px">Search</button>
    </form>

    <table class="table table-bordered rounded">
        <tbody>
            @unless($news->isEmpty())
            @foreach($news as $new)
            <tr class="border">
                <td class="px-4 py-3 border-top border-bottom">
                    <a href="/news/{{$new->id}}" style="color: white">{{ strlen($new["title"]) > 70 ? mb_substr($new["title"], 0, 70, 'UTF-8') . '...' : $new["title"] }}</a>
                </td>
                
                <td class="px-4 py-3 border-top border-bottom">
                    <a href="/news/{{$new->id}}/edit" class="btn"><i class="fas fa-pen"></i> Edit</a>
                </td>
                <td class="px-4 py-3 border-top border-bottom">
                    <form method="POST" action="/news/{{$new->id}}">
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
                    <p class="text-center" style="color: white">No news Found</p>
                </td>
            </tr>
            @endunless
        </tbody>
    </table>
    <div class="row">
        <div class="col-lg-12 text-center">
            {{ $news->links()}} <!-- Renders Bootstrap pagination links -->
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

