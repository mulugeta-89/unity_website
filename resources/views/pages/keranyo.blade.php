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
                KERANYO CAMPUS (ADDIS ABABA)
                <!-- Heading for the Keranyo Campus -->
            </h1>
            <img src="{{asset("/images/Keranyo.jpg")}}" alt="Image" class="img-fluid mt-4 rounded">
            <!-- Image related to the Keranyo Campus -->
            <div class="curriculum-list mt-3">
                <!-- Curriculum list -->
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
                            <li><b><i class="fa-regular fa-hand-point-right"></i> Management</b></li>
                            <!-- Program: Management -->
                            <li><b><i class="fa-regular fa-hand-point-right"></i> Marketing Management</b></li>
                            <!-- Program: Marketing Management -->
                        </ul>
                        <!-- End of list of undergraduate programs -->
                    </div>
                    <!-- End of column for undergraduate programs -->
                    <div class="clearfix"></div>
                    <!-- Clearfix for layout -->
                </div>
                <!-- End of row for curriculum list -->
                <div class="curriculum-list_for_tel">
                    <!-- Contact details section -->
                    <h2>Contact Us</h2>
                    <!-- Heading for contact details -->
                    <ul>
                        <!-- List of contact details -->
                        <li><b>Address: Addis Ababa-Ethiopia</b></li>
                        <!-- Address of the campus -->
                        <li>
                            <ul>
                                <!-- List of telephone numbers -->
                                <b>Tel:</b>
                                <!-- Heading for telephone numbers -->
                                <li><b>+251 (0)11 868 4322</b></li>
                                <!-- Telephone number 1 -->
                                <li><b>+251 (0)11 868 4767</b></li>
                                <!-- Telephone number 2 -->
                            </ul>
                            <!-- End of list of telephone numbers -->
                        </li>
                    </ul>
                    <!-- End of list of contact details -->
                </div>
                <!-- End of contact details section -->
            </div>
            <!-- End of curriculum list -->
        </div>
        <!-- End of column with content -->
    </div>
    <!-- End of row for content -->
</div>
<!-- End of container for content -->
@endsection
<!-- End of content section -->
