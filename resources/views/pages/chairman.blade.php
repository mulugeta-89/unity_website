@extends("layout")
@section("content")
<style>
/* Optional: Add some custom styles for spacing */
.custom-spacing {
    margin-top: 20px;
    margin-bottom: 20px;
}
</style>
<div class="page-content">
    <div class="page-banner">
        <div class="container">
            <div class="page-banner-entry">
                <h1 style="margin-top: 90px">Chairman Message</h1>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-md-8">
            <p style="text-align: justify;">
                Let me take this august occasion and start by saying Congratulations to the 38th Batch Graduates of Unity University, who went through all the troubles to complete your studies and attain the desired goal. My congratulatory message also goes to your Instructors, the entire University community, your parents and loved ones who selflessly contributed towards your success. It is an established fact that education is the key to progress and a vital tool in the concerted effort aimed at enhancing the development endeavors of a country. This is particularly so in a developing country like Ethiopia. Ethiopia, with a hardworking large population (the second populous country in Africa South of the Sahara), abundant natural resources and favorable climate, is a potentially rich country. With this in view, Ethiopia strongly relies on its hardworking people to realise its potential by way of utilising these resources to the maximum. It is worth noting at this juncture that it is mainly when there are adequate skilled, knowledgeable and responsible citizens that the country ensures sustainable development, which in turn improves the livelihood of its citizens. You, our graduates, should be proud to join this army of citizens equipped with the necessary weapon to fight poverty and destitution; and subsequently enhance the achievement of the lofty ideals of Ethiopia. One thing you, however, should note is that the acquisition of knowledge and skills is not an end in itself. You should strive to put the knowledge and skills you acquired through your studies to the benefit of your people and country. Exploit your creative potentials to create jobs for yourselves as well as for others. Sheik Mohammed Hussein Ali Al-Amoudi Chairman, Unity University
            </p>
        </div>
        <div class="col-md-4">
        <!-- Your image goes here -->
        <img src="{{asset("/unity_photos/alam2.png")}}" class="img-fluid" alt="Image">
        </div>
    </div>
    </div>
</div>
@endsection