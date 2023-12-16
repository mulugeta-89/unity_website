@extends("layout")
@section("content")
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
    <div class="page-banner">
        <div class="container">
            <div class="page-banner-entry">
                <h1 class="text-white" style="margin-top: 90px">Voice of Unity</h1>
            </div>
        </div>
    </div>
    <table class="table table-bordered rounded">
        <tbody>
            @unless($voices->isEmpty())
            @foreach($voices as $voice)
            <tr class="border">
                <td class="px-4 py-3 border-top border-bottom">
                    <h3 style="color: white;font-size: 19px">{{$voice->title}}</h3>
                </td>
                <td class="px-4 py-3 border-top border-bottom">
                    <a href="{{asset("storage/".$voice->pdf_file)}}" target="_blank" class="btn"><i class="fas fa-pen"></i> Open</a>
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
@endsection

