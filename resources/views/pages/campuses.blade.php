@extends("layout")
@section("content")
<div>
    <div class="row">
      <div class="col-md-10 mx-auto">
        <h1 class="full-width text-center" style="margin-top: 150px;font-size: 46px; text-transform: uppercase; text-align: justify; color:#c0c4c9;">
            Unity University Campuses
        </h1>
        <div class="clearfix">
            <ul id="masonry" class="ttr-gallery-listing magnific-image row">
                <li class="action-card col-lg-6 col-md-6 col-sm-12">
                    <div class="event-bx m-b30">
                        <div class="action-box">
                            <img src="{{asset("/images/Gerji 2.jpg")}}" alt="">
                        </div>
                        <div class="info-bx d-flex">
                            <div class="event-info">
                                <h4 class="event-title" style="color: wheat">Al Amoudi Campus(Gerji)</h4>
                                <a href="/campus/alamoudi" class="btn radius-xl">Learn More</a>
                            </div>
                        </div>
                    </div>
                </li>
                
                <li class="action-card col-lg-6 col-md-6 col-sm-12">
                    <div class="event-bx m-b30">
                        <div class="action-box">
                            <img src="{{asset("/images/Dessie 2.jpg")}}" alt="">
                        </div>
                        <div class="info-bx d-flex">
                            <div class="event-info">
                                <h4 class="event-title" style="color: wheat">RUKYA CAMPUS (DESSIE)</h4>
                                <a href="/campus/dessie" class="btn radius-xl">Learn More</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="action-card col-lg-6 col-md-6 col-sm-12">
                    <div class="event-bx m-b30">
                        <div class="action-box">
                            <img src="{{asset("/images/Keranyo.jpg")}}" alt="">
                        </div>
                        <div class="info-bx d-flex">
                            <div class="event-info">
                                <h4 class="event-title" style="color: wheat">KERANYO CAMPUS (ADDIS ABABA)</h4>
                                <a href="/campus/keranyo" class="btn radius-xl">Learn More</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="action-card col-lg-6 col-md-6 col-sm-12">
                    <div class="event-bx m-b30">
                        <div class="action-box">
                            <img src="{{asset("/images/Adama.jpg")}}" alt="">
                        </div>
                        <div class="info-bx d-flex">
                            <div class="event-info">
                                <h4 class="event-title" style="color: wheat">ADAMA CAMPUS (OROMIYA)</h4>
                                <a href="/campus/adama" class="btn radius-xl">Learn More</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="action-card col-lg-6 col-md-6 col-sm-12 happening">
                    <div class="event-bx m-b30">
                        <div class="action-box">
                            <img src="{{asset("/images/Burayu.jpg")}}" alt="">
                        </div>
                        <div class="info-bx d-flex">
                            <div class="event-info">
                                <h4 class="event-title" style="color: wheat">BURAYU CAMPUS, GEFERSSA (OROMIYA)</h4>
                                <a href="/campus/burayu" class="btn radius-xl">Learn More</a>
                            </div>
                        </div>
                    </div>
                </li>
        
        </div>
       
      </div>
    </div>
  </div>
@endsection