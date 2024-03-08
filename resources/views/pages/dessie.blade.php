@extends("layout")
@section("content")
<div class="container">
    <div class="row">
      <div class="col-md-10 mx-auto">
        <h1 class="full-width text-center" style="margin-top: 150px;font-size: 46px; text-transform: uppercase; text-align: justify;">
            RUKYA CAMPUS (DESSIE)

        </h1>
        <img src="{{asset("/images/Dessie 2.jpg")}}" alt="Image" class="img-fluid mt-4 rounded">
        <div class="curriculum-list mt-3">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <ul class="header_links_ul">
                        <h4>Undergraduate Programs</h4>
                        <li><b><i class="fa-regular fa-hand-point-right"></i> Accounting and Finance</b></li>
                        <li><b><i class="fa-regular fa-hand-point-right"></i> Computer Science</b></li>
                        <li><b><i class="fa-regular fa-hand-point-right"></i> Business Administration</b></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="curriculum-list_for_tel">
                <h2>Contact Us</h2>
                <ul>
                    <li><b>Address: Dessie-Ethiopia</b></li>
                    <li> 
                        <ul>
                            <b>Tel:</b>
                            <li><b>+251 (0)33 111 5050</b></li>
                            <li><b>+251 (0)33 111 8604</b></li>
                        </ul>
                    </li>
                    <li><b>Fax: +251 (0)33 111 1887</b></li>
                    <li><b>P.O.Box: 2121</b></li>
                </ul>
            </div>
        </div>

        </div>
  </div>
</div>
@endsection