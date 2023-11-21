@extends("layout")
@section("content")
<div class="container">
    <div class="row">
      <div class="col-md-10 mx-auto">
        <h1 class="full-width text-center" style="margin-top: 150px;font-size: 46px; text-transform: uppercase; text-align: justify; color:#98b4d4;">
            ADAMA CAMPUS (OROMIYA)
        </h1>
        <img src="{{asset("/images/Adama.jpg")}}" alt="Image" class="img-fluid mt-4 rounded">
        <div class="curriculum-list mt-3">
            <div class="row">
                <div class="col-md-6 col-sm-12 text-sm-center text-center">
                    <ul class="header_links_ul">
                        <h4>Undergraduate Programs</h4>
                        <li><b>Accounting and Finance</b></li>
                        <li><b>Business Administration</b></li>
                        <li><b>Computer Science</b></li>
                        <li><b>Management</b></li>
                        <li><b>Marketing Management</b></li>

                    </ul>
                </div>
                <div class="col-md-6 col-sm-12 text-sm-center text-center">
                    <ul class="header_links_ul">
                        <h4>Postgraduate Programs</h4>
                        <li><b>Master of Business Administration Specialization in Marketing</b></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

  </div>
  </div>
</div>
@endsection