@extends("layout")
@section("content")
<div class="container">
    <div class="row">
      <div class="col-md-10 mx-auto">
        <h1 class="full-width text-center" style="margin-top: 150px;font-size: 46px; text-transform: uppercase; text-align: justify;">
            KERANYO CAMPUS (ADDIS ABABA)

        </h1>
        <img src="{{asset("/images/Keranyo.jpg")}}" alt="Image" class="img-fluid mt-4 rounded">
        <div class="curriculum-list mt-3">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <ul class="header_links_ul">
                        <h4>Undergraduate Programs</h4>
                        <li><b><i class="fa-regular fa-hand-point-right"></i> Accounting and Finance</b></li>
                        <li><b><i class="fa-regular fa-hand-point-right"></i> Management</b></li>
                        <li><b><i class="fa-regular fa-hand-point-right"></i> Marketing Management</b></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="curriculum-list_for_tel">
                <h2>Contact Us</h2>
                <ul>
                    <li><b>Address: Addis Ababa-Ethiopia</b></li>
                    <li> 
                        <ul>
                            <b>Tel:</b>
                            <li><b>+251 (0)11 868 4322</b></li>
                            <li><b>+251 (0)11 868 4767</b></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

  </div>
  </div>
</div>
@endsection