@extends("layout")
@section("content")
    <!-- Custom styles -->
    <style>
        body {
            background-color: #e1e2e3;
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
    <!-- Page title -->
    <div>
        <h1 class="full-width text-center">
            Voice Of Unity
        </h1>
    </div>
    <!-- Table displaying voices -->
    <div class="table-div">   
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Display each voice in a table row -->
                @unless($voices->isEmpty())
                    @foreach($voices as $voice)
                        <tr>
                            <td>{{$voice->title}}</td>
                            <!-- Open button to view the PDF file -->
                            <td><a href="{{asset("storage/".$voice->pdf_file)}}" target="_blank" class="btn"><i class="fas fa-pen"></i> Open</a></td>
                        </tr>
                    @endforeach
                <!-- Display message if no voices found -->
                @else
                    <tr>
                        <td>No Voice found</td>
                    </tr>
                @endunless                    
            </tbody>
        </table>
    </div>
    <!-- Pagination links -->
    <div class="row">
        <div class="col-lg-12 text-center">
            {{ $voices->links()}} <!-- Renders Bootstrap pagination links -->
        </div>
    </div>
@endsection
