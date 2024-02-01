@include('layouts.header')
<style>
.wecarepart p {
    text-align: left;
}
</style>
<div class="bannerslider oneuspage">
    <div class="captionheader shadownone lefttextcap nohome" style="height:57vh;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>Services</h1>
                </div>
            </div>
        </div>
    </div>
    <img height="100%" width="100%" src="{{ asset('web/images/services-banner.png') }}">
</div>

<section class="dataworldpart">
    <div class="container">
        <div class="row mb-75">
            <div class="col-lg-12 text-center">
                <h4 class="mainheadingtext">Cloud Technology</h4>
            </div>
        </div>
        <div class="row mb-4">
            @foreach ($services as $service)
            <div class="col-lg-4 mb-4">
                <div class="joinusbox" style="height:100%;">
                    <span><img src="{{ asset($service->image) }}" class="iconjoin"></span>
                    <h3>{{ $service->title }}</h3>
                    <p>{{ $service->description }}</p>
                </div>
            </div>
            @endforeach



        </div>
</section>

<section class="left-rightpart">
    <div class="container">
        <div class="row cloudimgrev">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="textcloud">
                    <h3>We deliver end-to-end transformation, from strategy to execution and optimisation.</h3>
                    <p>At the heart of DIS, data integrity and management services encompasses the entire journey of
                        transformation. This overall conversion spans from strategy development to execution to
                        optimization,
                        for a comprehensive and absolutely secured end-to-end solution with AI, BI & Machine Learning
                        specializations.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="imgcall"> <img src="{{ asset('web/images/services-img01.png') }}"></div>
            </div>
        </div>
    </div>
</section>
<section class="wecarepart">
    <div class="container">
        <div class="row mb-75 globeheading">
            <div class="col-lg-6">
                <h4 class=""><span>Microsoft</span>A Proud Global Microsoft Partner</h4>
            </div>
            <div class="col-lg-6">
                <p>Data Integrity Services (DIS) is an honored partner of Microsoft Technology, providing unparalleled
                    expertise in data management. We ensure you make straight-forward & informed decisions by verifying
                    that
                    you are acquiring the correct solutions at an optimal price. DIS is</p>



                <ul class="globelisting">


                    <li>Data & AI Azure</li>
                    <li>Infrastructure (Azure) </li>
                    <li>Security</li>
                    <li>Digital & App Innovation Azure</li>
                </ul>
                <a href="{{url('contact-us')}}" class="btn btn-primary">Talk to an Expert</a>
            </div>
        </div>
        <div id="partnerlogo" class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 ">
                <img src="{{ asset('web/images/cloud-micro-01.png') }}">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 ">
                <img src="{{ asset('web/images/cloud-micro-02.png') }}">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 ">
                <img style="height: 100%" src="{{ asset('web/images/cloud-micro-03.png') }}">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 ">
                <img src="{{ asset('web/images/cloud-micro-04.png') }}">
            </div>
        </div>
    </div>
</section>




@include('layouts.footer')