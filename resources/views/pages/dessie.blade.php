@extends("layout")
<!-- Extends the layout.blade.php file -->

@section("content")
<!-- Content section -->
<div class="container">
    <!-- Container for content -->
    <div class="row">
        <!-- Row for content -->
        <div class="col-md-10 mx-auto">
            <!-- Column with content -->
            <h1 class="full-width text-center" style="margin-top: 150px;font-size: 46px; text-transform: uppercase; text-align: justify;">
                <!-- Main heading -->
                RUKYA CAMPUS (DESSIE)
                <!-- Campus name -->
            </h1>
            <img src="{{asset("/images/Dessie 2.jpg")}}" alt="Image" class="img-fluid mt-4 rounded">
            <!-- Image of the campus -->
            <div class="curriculum-list mt-3">
                <!-- List of curriculum -->
                <div class="row">
                    <!-- Row for curriculum list -->
                    <div class="col-md-6 col-sm-12">
                        <!-- Column for undergraduate programs -->
                        <ul class="header_links_ul">
                            <!-- List of undergraduate programs -->
                            <h4>Undergraduate Programs</h4>
                            <!-- Heading for undergraduate programs -->
                            <li><b><i class="fa-regular fa-hand-point-right"></i> Accounting and Finance</b></li>
                            <!-- Program: Accounting and Finance -->
                            <li><b><i class="fa-regular fa-hand-point-right"></i> Computer Science</b></li>
                            <!-- Program: Computer Science -->
                            <li><b><i class="fa-regular fa-hand-point-right"></i> Business Administration</b></li>
                            <!-- Program: Business Administration -->
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- End of row for curriculum list -->
                <div class="curriculum-list_for_tel">
                    <!-- Contact information section -->
                    <h2>Contact Us</h2>
                    <!-- Heading for contact information -->
                    <ul>
                        <!-- Contact details list -->
                        <li><b>Address: Dessie-Ethiopia</b></li>
                        <!-- Campus address -->
                        <li>
                            <ul>
                                <!-- List for phone numbers -->
                                <b>Tel:</b>
                                <!-- Heading for phone numbers -->
                                <li><b>+251 (0)33 111 5050</b></li>
                                <!-- Phone number 1 -->
                                <li><b>+251 (0)33 111 8604</b></li>
                                <!-- Phone number 2 -->
                            </ul>
                        </li>
                        <li><b>Fax: +251 (0)33 111 1887</b></li>
                        <!-- Fax number -->
                        <li><b>P.O.Box: 2121</b></li>
                        <!-- P.O. Box number -->
                    </ul>
                </div>
                <!-- End of contact information section -->
            </div>
            <!-- End of curriculum list section -->
        </div>
        <!-- End of column with content -->
    </div>
    <!-- End of row for content -->
</div>
<!-- End of container for content -->
@endsection
<!-- End of content section -->
