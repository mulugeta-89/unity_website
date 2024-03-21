@extends("layout")
<!-- Extends the layout.blade.php file -->

@section("content")
<!-- Content section -->

<div>
    <!-- Start of container -->
    <div class="row">
        <!-- Start of row -->
        <div class="col-md-10 mx-auto">
            <!-- Start of column -->
            <h1 class="full-width text-center mb-3" style="margin-top: 150px;font-size: 46px; text-transform: uppercase; text-align: justify">
                Unity University Campuses
            </h1>
            <!-- Heading for Unity University Campuses -->

            <div class="clearfix">
                <!-- Start of clearfix -->

                <!-- List of campuses -->
                <ul id="masonry" class="ttr-gallery-listing magnific-image row" style="list-style: none">

                    <!-- Campus card for Al Amoudi Campus -->
                    <li class="action-card col-lg-5 col-md-5 col-sm-12 mb-3 mr-4">
                        <div class="event-bx m-b30">
                            <!-- Campus image -->
                            <div class="action-box">
                                <img src="{{asset("/images/Gerji 2.jpg")}}" alt="">
                            </div>
                            <!-- Campus info -->
                            <div class="info-bx d-flex">
                                <div class="event-info">
                                    <!-- Campus name -->
                                    <h4 class="event-title">Al Amoudi Campus (Gerji)</h4>
                                    <!-- Learn more button -->
                                    <a href="/campus/alamoudi" class="btn radius-xl">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- End of Al Amoudi Campus -->

                    <!-- Campus card for Rukya Campus -->
                    <li class="action-card col-lg-5 col-md-5 col-sm-12 mb-3">
                        <div class="event-bx m-b30">
                            <!-- Campus image -->
                            <div class="action-box">
                                <img src="{{asset("/images/Dessie 2.jpg")}}" alt="">
                            </div>
                            <!-- Campus info -->
                            <div class="info-bx d-flex">
                                <div class="event-info">
                                    <!-- Campus name -->
                                    <h4 class="event-title">Rukya Campus (Dessie)</h4>
                                    <!-- Learn more button -->
                                    <a href="/campus/dessie" class="btn radius-xl">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- End of Rukya Campus -->

                    <!-- Campus card for Adama Campus -->
                    <li class="action-card col-lg-5 col-md-5 col-sm-12 mb-3">
                        <div class="event-bx m-b30">
                            <!-- Campus image -->
                            <div class="action-box">
                                <img src="{{asset("/images/Adama.jpg")}}" alt="">
                            </div>
                            <!-- Campus info -->
                            <div class="info-bx d-flex">
                                <div class="event-info">
                                    <!-- Campus name -->
                                    <h4 class="event-title">Adama Campus (Oromiya)</h4>
                                    <!-- Learn more button -->
                                    <a href="/campus/adama" class="btn radius-xl">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- End of Adama Campus -->

                    <!-- Campus card for Burayu Campus -->
                    <li class="action-card col-lg-5 col-md-5 col-sm-12 mb-3">
                        <div class="event-bx m-b30">
                            <!-- Campus image -->
                            <div class="action-box">
                                <img src="{{asset("/images/Burayu.jpg")}}" alt="">
                            </div>
                            <!-- Campus info -->
                            <div class="info-bx d-flex">
                                <div class="event-info">
                                    <!-- Campus name -->
                                    <h4 class="event-title">Burayu Campus, Geferssa (Oromiya)</h4>
                                    <!-- Learn more button -->
                                    <a href="/campus/burayu" class="btn radius-xl">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- End of Burayu Campus -->

                    <!-- Campus card for Keranyo Campus -->
                    <li class="action-card col-lg-5 col-md-5 col-sm-12 mb-3">
                        <div class="event-bx m-b30">
                            <!-- Campus image -->
                            <div class="action-box">
                                <img src="{{asset("/images/Keranyo.jpg")}}" alt="">
                            </div>
                            <!-- Campus info -->
                            <div class="info-bx d-flex">
                                <div class="event-info">
                                    <!-- Campus name -->
                                    <h4 class="event-title">Keranyo Campus (Addis Ababa)</h4>
                                    <!-- Learn more button -->
                                    <a href="/campus/keranyo" class="btn radius-xl">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- End of Keranyo Campus -->

                </ul>
                <!-- End of campus list -->
                
            </div>
            <!-- End of clearfix -->
        </div>
        <!-- End of column -->
    </div>
    <!-- End of row -->
</div>
<!-- End of container -->
@endsection
<!-- End of content section -->
