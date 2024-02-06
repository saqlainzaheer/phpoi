@include('layouts.header')
<style>
.context .ethicdiv {
    width: 100%;
    position: relative;
    top: 50vh;

}

.context h3 {
    text-align: center;
    color: #fff;
    font-size: 50px;
}


.area {
    /* background: #4e54c8; */


    background: linear-gradient(89deg, #6681cc 33.58%, rgba(81, 145, 183, 0) 226.92%);
    /* background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8); */
    width: 100%;
    height: 70vh;


}

.circles {
    position: relative;


    width: 100%;
    height: 100%;
    overflow: hidden;
}

.circles li {
    position: absolute;
    display: block;
    list-style: none;
    width: 20px;
    height: 20px;
    background: rgba(255, 255, 255, 0.2);
    animation: animate 25s linear infinite;
    bottom: -150px;

}

.circles li:nth-child(1) {
    left: 25%;
    width: 80px;
    height: 80px;
    animation-delay: 0s;
}


.circles li:nth-child(2) {
    left: 10%;
    width: 20px;
    height: 20px;
    animation-delay: 2s;
    animation-duration: 12s;
}

.circles li:nth-child(3) {
    left: 70%;
    width: 20px;
    height: 20px;
    animation-delay: 4s;
}

.circles li:nth-child(4) {
    left: 40%;
    width: 60px;
    height: 60px;
    animation-delay: 0s;
    animation-duration: 18s;
}

.circles li:nth-child(5) {
    left: 65%;
    width: 20px;
    height: 20px;
    animation-delay: 0s;
}

.circles li:nth-child(6) {
    left: 75%;
    width: 110px;
    height: 110px;
    animation-delay: 3s;
}

.circles li:nth-child(7) {
    left: 35%;
    width: 150px;
    height: 150px;
    animation-delay: 7s;
}

.circles li:nth-child(8) {
    left: 50%;
    width: 25px;
    height: 25px;
    animation-delay: 15s;
    animation-duration: 45s;
}

.circles li:nth-child(9) {
    left: 20%;
    width: 15px;
    height: 15px;
    animation-delay: 2s;
    animation-duration: 35s;
}

.circles li:nth-child(10) {
    left: 85%;
    width: 150px;
    height: 150px;
    animation-delay: 0s;
    animation-duration: 11s;
}

.buildfaster {
    padding: 0;

}

@keyframes animate {

    0% {
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
    }

    100% {
        transform: translateY(-1000px) rotate(720deg);
        opacity: 0;
        border-radius: 50%;
    }

}

.ethichead {
    width: 30%;
}

.ethicp {
    width: 50%;

}

.ethichead h4 {

    color: white;
    text-align: center;
    font-family: Play;
    font-size: 42px;
    font-style: normal;
    font-weight: 700;

    line-height: 44px;
    letter-spacing: -0.72px;
}

.ethicp p {

    color: white;
    font-family: Play;
    font-size: 26px;
    font-style: normal;
    font-weight: 400;
    padding-right: 70px;
    line-height: 149.4%;

}

.ethicdiv {
    display: flex;
    width: 100%;
    justify-content: center;
    /* margin-bottom: 50px; */
}

.mbtn:hover {
    background: #67b2f0;
}

.services__card {
    border: 1px solid #191b1d;

}

.services__card-imgbox {
    width: 100%;
    height: 300px;
    overflow: hidden;
    /* Ensure that the image does not overflow the box */
    position: relative;
}

.services__card-imgbox img {
    width: 100%;
    /* Make the image fill the entire width of its container */
    height: 100%;
    /* Ensure the image fills the entire height of its container */
    object-fit: cover;
    /* Maintain the aspect ratio while filling the box */
    display: block;
    /* Remove any default inline display */
    position: absolute;
    /* Position the image absolutely */
    top: 0;
    /* Align the image to the top */
    left: 0;
}

.services__card-info {
    padding: 40px;
}

.services__card-title {
    margin-bottom: 15px;

    font-style: normal;
}

.services__card.swiper-slide {
    height: 100%;
}

.services__card-description {

    color: #2e2e2e;
    padding-bottom: 18px;
}

@media only screen and (max-width: 1150px) {
    .ethichead {
        width: auto;
    }

    .ethicp {
        width: auto;

    }

    .ethicp div {
        width: 250px;
        margin: auto;

    }

    .ethicdiv {
        flex-direction: column;
    }

    .ethicdiv p {
        padding: 0;
        font-size: 24px;
        text-align: center;
    }

    .context .ethicdiv {
        width: 100%;
        position: relative;
        top: 63vh;

    }
}
</style>
<div class="bannerslider" style="margin-bottom:100px;">
    <div class="captionheader">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>Delivering business-oriented solutions fueled by <span> Microsoft AI Cloud</span></h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="aidevelopment">
                <div class="row">
                    <div id="headerlower" class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <h3>AI for Business Intelligence </h3>
                        <p>Microsoft Fabric Integration / Azure Platform Collaboration / Copilot Assistance </p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 r-number">
                        <a href="#" class="prevbtn" style="display:none;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.20535 7.23047L3.87202 10.5638L3.57739 10.8584L3.87202 11.153L7.20535 14.4864L7.7946 13.8971L5.17257 11.2751H17.0833V10.4418H5.17257L7.7946 7.81972L7.20535 7.23047Z"
                                    fill="white" />
                            </svg>
                        </a>
                        <a href="#" style="display:none;" class="nextbtn ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M13.4554 7.23047L16.7887 10.5638L17.0833 10.8584L16.7887 11.153L13.4554 14.4864L12.8661 13.8971L15.4881 11.2751H3.57739V10.4418H15.4881L12.8661 7.81972L13.4554 7.23047Z"
                                    fill="white" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <video width="100%" height="100%" autoplay muted loop>
        <source src="{{ asset('web/images/homevideo.mp4') }}" type="video/mp4">
    </video>
</div>

<section class="buildfaster">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="videofaster">
                    <video width="100%" height="611px" autoplay muted loop>
                        <source src="{{ asset('web/images/homefaster.mp4') }}" type="video/mp4">
                    </video>
                    <div class="homevideofaster">
                        <h3>building faster, smarter,together.</h3>
                        <div class="overvid">
                            <img src="{{ asset('web/images/small-right image.png') }}" class="overlayimg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="context">
        <div class="ethicdiv">
            <div class="ethichead">
                <h4 class="">WE<span style="color:#8bcbff;"> BELIEVE</span></h4>
            </div>
            <div class="ethicp">
                <p>Data Integrity Services stands as a premier technology and consulting partner, offering
                    comprehensive end-to-end solutions within the Microsoft ecosystem. As a dedicated team of
                    subject matter experts, including Microsoft certified professionals. We are committed to
                    delivering outstanding results for your business.

                </p>
                <div>

                    <a href="{{url('our-services')}}" class="btn btn-primary mbtn"
                        style="background:#8bcbff; font-size: 21px; margin-top:10px;">Make Forward</a>
                </div>
            </div>
        </div>


        <div class="area">
            <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
</section>




<section class="">
    <div class="container">

        <div id="wemake" class="row  text-center">
            <h4 class="wemake"> We Make</h4>
            <!-- <p>Bringing innovation across all industries</p> -->
            <p> Idea & Design suggested.</p>

        </div>

        <div class="maincontainer">
            @foreach ($casestudies as $casestudies)
            <figure>

                <div class="imgseccont">
                    <a href="{{ url('case-study', ['id' => $casestudies->id]) }}">

                        <img src="{{ asset($casestudies->hero_image) }}" alt="Dis">
                    </a>
                </div>
                <figcaption>
                    <a href="{{ url('case-study', ['id' => $casestudies->id]) }}" class="cases">
                        <p> {{$casestudies->title}}</p>
                        Read more
                    </a>
                </figcaption>

            </figure>
            @endforeach
        </div>

    </div>

</section>
<section class="oursolution">
    <div class="container">
        <div class="row solutionvideo">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <h4>Our Solutions</h4>
                <p>Our philosophy is simple — hire a team of diverse, passionate people and foster a culture that
                    empowers you to do you best work.</p>
                <a href="{{url('contact-us')}}" class="btn btn-primary">Book a discovery call</a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="rc">
                    <video src="{{ asset('web/images/vidsolution.mp4') }}" id="localVideoStream" class="video-circle"
                        width="700px" height="700px" autoplay muted loop></video>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="disfact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4>The DIS Facts</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 mx-auto ">
                <div id="factsrenderhere" class="row justify-content-center">
                    @foreach ($facts as $fact)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-12 boxfact">
                        <h5 class="factnumber">{{ $fact->fact }}</h5>
                        <p>{{ $fact->factDis }}</p>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section class="membersec">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 wecenter mx-auto">
        <h4 class="">Our Exclusive Members</h4>
        <p>Our team of certified experts are ready to assist in planning, optimizing, managing, and innovating our client's data estate.</p>
      </div>
    </div>
  </div>
  <div class="owl-carousel owl-theme">
    <div class="item">
      <div class="membercorsual">
        <img src="{{ asset('web/images/rectangle-img-1.png') }}">
      </div>
      <div class="boxmember">
        <h5>Olivia Rhye</h5>
        <span>Founder & CEO</span>
      </div>
    </div>
    <div class="item">
      <div class="membercorsual">
        <img src="{{ asset('web/images/rectangle-img-2.png') }}">
      </div>
      <div class="boxmember">
        <h5>Olivia Rhye</h5>
        <span>Founder & CEO</span>
      </div>
    </div>
    <div class="item">
      <div class="membercorsual">
        <img src="{{ asset('web/images/rectangle-img-3.png') }}">
      </div>
      <div class="boxmember">
        <h5>Olivia Rhye</h5>
        <span>Founder & CEO</span>
      </div>
    </div>
    <div class="item">
      <div class="membercorsual">
        <img src="{{ asset('web/images/rectangle-img-4.png') }}">
      </div>
      <div class="boxmember">
        <h5>Olivia Rhye</h5>
        <span>Founder & CEO</span>
      </div>
    </div>
    <div class="item">
      <div class="membercorsual">
        <img src="{{ asset('web/images/rectangle-img-5.png') }}">
      </div>
      <div class="boxmember">
        <h5>Olivia Rhye</h5>
        <span>Founder & CEO</span>
      </div>
    </div>
  </div>
</section> -->
<style>
.latestinsights h4 {
    color: black;
}
</style>
<section class="latestinsights" style="background:white;">
    <div class="container">
        <div class="row mb-75">
            <div class="col-lg-6 ">
                <h4 style="color:black;text-align:left; font-size:30px;">Latest insights</h4>
            </div>
            <div class="col-lg-6 mx-auto">
                <a href="{{url('data-world')}}" class="viewall" style="color:black; font-size:20px;">View all</a>
            </div>
        </div>
    </div>
    <div class="swiper services--swiper">

        <div class="services__cards  swiper-wrapper">




            @foreach ($insights as $insight)

            <div class="services__card swiper-slide">
                <div class="services__card-imgbox">
                    <img src="{{ asset($insight->image) }}" alt="services">
                </div>
                <div class="services__card-info" id="services-card-1">
                    <h4 class="services__card-title"> {{ $insight->title }}</h4>
                    <p class="services__card-description">{{ $insight->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</section>
<section class="homereview">
    <div class="homereviewbox">
        <div class="container">
            <div class="owl-carousel owl-review owl-theme">
                <div class="item">
                    <div class="reviewdesign">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="reviewuser">
                                    <img src="{{ asset('web/images/review-img-1.png') }}">
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-6 col-12">
                                <p class="reviewpara">It's all about getting your message in front of the right audience
                                    and creating those valuable relationships. Learn More about how DOML can help you do
                                    just that - all with a simple, easy-to-use platform.</p>
                                <p class="mb-1"><strong>Amaka Micheal</strong></p>
                                <p class="small mb-0">
                                    Media Executive, Buying & Control
                                    <span><img src="{{ asset('web/images/reviewuserlogo.png') }}"> </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="reviewdesign">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="reviewuser">
                                    <img src="{{ asset('web/images/review-img-2.png') }}">
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-6 col-12">
                                <p class="reviewpara">It's all about getting your message in front of the right audience
                                    and creating those valuable relationships. Learn More about how DOML can help you do
                                    just that - all with a simple, easy-to-use platform.</p>
                                <p class="mb-1"><strong>Amaka Micheal</strong></p>
                                <p class="small mb-0">
                                    Media Executive, Buying & Control
                                    <span><img src="{{ asset('web/images/reviewuserlogo.png') }}"> </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="reviewdesign">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="reviewuser">
                                    <img src="{{ asset('web/images/review-img-3.png') }}">
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-6 col-12">
                                <p class="reviewpara">It's all about getting your message in front of the right audience
                                    and creating those valuable relationships. Learn More about how DOML can help you do
                                    just that - all with a simple, easy-to-use platform.</p>
                                <p class="mb-1"><strong>Amaka Micheal</strong></p>
                                <p class="small mb-0">
                                    Media Executive, Buying & Control
                                    <span><img src="{{ asset('web/images/reviewuserlogo.png') }}"> </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>

</style>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
var swiper2 = new Swiper(".services--swiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    autoHeight: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        1600: {
            slidesPerView: 3,
        },
        992: {
            slidesPerView: 3,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 15,
        },
        500: {
            slidesPerView: 1.2,
            spaceBetween: 15,
        },
        401: {
            slidesPerView: 1.3,
        },
        340: {
            spaceBetween: 10,
            slidesPerView: 1.1,
        },
        280: {
            slidesPerView: 1,
        },
    },
});
</script>
@include('layouts.footer')