@include('layouts.header')
<div class="bannerslider wecarevid">
    <div class="captionheader shadownone lefttextcap nohome">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>We <span>Care</span></h1>
                </div>
            </div>
        </div>
    </div>
    <video width="100%" height="100%" autoplay muted loop>
        <source src="{{ asset('web/images/wecare-vid.mp4')}}" type="video/mp4">
    </video>
</div>
<section class="wecarepart">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <p class="">At Data Integrity Services (DIS), we are dedicated to safeguarding your digital assets and
                    ensuring the highest standards of security as well as integrity. Our team of experts is driven by a
                    passion for digital security & tireless pursuit of excellence. We care about our clients’ peace of
                    mind, and our services relentlessly reflect that commitment. Pertaining ethical practices,
                    cutting-edge solutions, and tailored services is what sets us apart from other companies.</p>
            </div>
        </div>
    </div>
</section>
<section class="weculture">
    <div class="container">
        <div class="row mb-75">
            <div class="col-lg-12 text-center">
                <h4 class="wemake">Our Work Culture</h4>
                <p>We understand that every business is unique, so our solutions are tailored to the specific needs of a
                    domain. Teamwork, innovation, respect, as well as client-centric force are the core of our success
                    and solutions.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-12 ">
                <div class="wecarefor">
                    <img class="img1" src="{{ asset('web/images/wecare-img03.jpg')}}" alt="Dis">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 p-0">
                <div class="wecarefor">
                    <img class="img2" src="{{ asset('web/images/wecare-img02.jpg')}}" alt="Dis">
                </div>
            </div>
        </div>
        <div class="row" id="whatdo">
            <div class="col-lg-4">
                <h4 class="wemake">What we do</h4>
            </div>
            <div class="col-lg-8">
                <p>At DIS, we go beyond securing data - we secure TRUST. Fortifying your digital presence with integrity
                    and excellence is our business, with your peace of mind on our top-most priority. Our team helps you
                    make informed decisions, understand your unique challenges, and tailor the services accordingly.</p>
            </div>
        </div>
    </div>
</section>
<section class="wecaremakeimg">
    <div class="wecareimgfull">
        <img src="{{ asset('web/images/wecare-img01.png')}}" alt="Dis">
    </div>
    <div class="container">
        <div class="row mb-150" id="values">
            <div class="col-lg-7">

                <p class="mb-5">Discover the vibrant and empowering environment that makes Data Integrity Services (DIS)
                    a unique platform. We interact with clients, innovate solutions, and maintain a reputation for
                    integrity and reliability. Our team is a top-tier of innovation and solutions, in the specialization
                    of AI, BI, ML, Power Automation, Cloud Computing, and much more in safeguarding & managing your
                    valuable data. So, connect with us now and say goodbye to all the inefficiencies you are facing in
                    maintaining your business data. </p>
                <!-- <a href="#" class="btn btn-outline-dark btn-lg marginright50"><span></span> Code of Ethics</a>
        <a href="#" class="btn btn-outline-dark btn-lg"><span></span> Our Policy</a> -->
            </div>
            <div class="col-lg-5 text-center">
                <h3 class="mb-5">Values and Ethics</h3>
            </div>

        </div>
    </div>
</section>
@include('layouts.footer')