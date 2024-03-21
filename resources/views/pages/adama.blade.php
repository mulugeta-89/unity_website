@extends("layout")
<!-- Extends the layout.blade.php file -->

@section("content")
<!-- Content section -->
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <!-- Display the campus name -->
            <h1 class="full-width text-center" style="margin-top: 150px;font-size: 46px; text-transform: uppercase; text-align: justify;">
                ADAMA CAMPUS (OROMIYA)
            </h1>
            <!-- Display the campus image -->
            <img src="{{asset("/images/Adama.jpg")}}" alt="Image" class="img-fluid mt-4 rounded">
            <!-- Display the list of undergraduate and postgraduate programs -->
            <div class="curriculum-list mt-3">
                <div class="row">
                    <div class="col-md-6 col-sm-12 text-sm-center text-center">
                        <!-- Undergraduate Programs -->
                        <ul class="header_links_ul">
                            <h4>Undergraduate Programs</h4>
                            <li><b><i class="fa-regular fa-hand-point-right"></i> Accounting and Finance</b></li>
                            <li><b><i class="fa-regular fa-hand-point-right"></i> Business Administration</b></li>
                            <li><b><i class="fa-regular fa-hand-point-right"></i> Computer Science</b></li>
                            <li><b><i class="fa-regular fa-hand-point-right"></i> Management</b></li>
                            <li><b><i class="fa-regular fa-hand-point-right"></i> Marketing Management</b></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-12 text-sm-center text-center">
                        <!-- Postgraduate Programs -->
                        <ul class="header_links_ul">
                            <h4>Postgraduate Programs</h4>
                            <li><b><i class="fa-regular fa-hand-point-right"></i> Master of Business Administration in Marketing</b></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- Contact information for the campus -->
                <div class="curriculum-list_for_tel">
                    <h2>Contact Us</h2>
                    <ul>
                        <li><b>Address: Adama-Ethiopia</b></li>
                        <li>
                            <ul>
                                <b>Tel:</b>
                                <li><b>+251 (0)22 111 3666</b></li>
                                <li><b>+251 (0)22 111 4650</b></li>
                            </ul>
                        </li>
                        <li><b>Fax: +251 (0)11 629 8156</b></li>
                        <li><b>P.O.Box: 1486</b></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of content section -->
@endsection
<!-- End of content section -->
