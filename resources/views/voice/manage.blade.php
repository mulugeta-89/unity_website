<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Landing Page</title>
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
            Manage Voice of Unity
        </h1>
        <a href="/voiceofunity/create" class="btn"><i class="fas fa-pen"></i> Create Voice</a>
        <form class="d-inline" method="POST" action="/logout">
            @csrf
            <button type="submit" class="btn btn-primary" style="border: none">
                <i class="fas fa-door-closed"></i> Logout
            </button>
        </form>
    </header>
    <table class="table table-bordered rounded">
        <tbody>
            @unless($voices->isEmpty())
            @foreach($voices as $voice)
            <tr class="border">
                <td class="px-4 py-3 border-top border-bottom">
                    <a href="{{asset("storage/".$voice->pdf_file)}}" target="_blank" style="color: white">{{$voice->title}}</a>
                </td>
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
                <td class="px-4 py-3 border-top border-bottom">
                    <a href="/voices/{{$voice->id}}/edit" class="btn"><i class="fas fa-pen"></i> Edit</a>
                </td>
                <td class="px-4 py-3 border-top border-bottom">
                    <form method="POST" action="/voices/{{$voice->id}}">
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
                    <p class="text-center">No voices Found</p>
                </td>
            </tr>
            @endunless
        </tbody>
    </table>
    <div class="row">
        <div class="col-lg-12 text-center">
            {{ $voices->links()}} <!-- Renders Bootstrap pagination links -->
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

