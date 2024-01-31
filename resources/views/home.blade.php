@include('layouts.header')

<div class="bannerslider">
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
        <div class="row mt-150">
            <div class="col-lg-10 mx-auto">
                <div class="row">
                    <div class="col-lg-4 homeat">
                        WE BELIEVE
                    </div>
                    <div class="col-lg-8 homeat">
                        <h4>Data Integrity Services stands as a premier technology and consulting partner, offering
                            comprehensive end-to-end solutions within the Microsoft ecosystem. As a dedicated team of
                            subject matter experts, including Microsoft certified professionals. We are committed to
                            delivering outstanding results for your business.</h4>
                        <a href="{{url('we-are')}}" class="btnmake btn-default">Make Forward</a>
                    </div>
                </div>
            </div>
        </div>
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
        <!-- <figure>
                <div class="imgseccont">
                    <img src="{{ asset('web/images/mis-img-1.png') }}" alt="Dis" />
                </div>
                <figcaption>
                    <p>DIS Reduces 20% in Supply Chain inefficiencies for a Global Retail Chain with Unified Data
                        Platform and enhanced decision-making.</p>
                    <a href="#" class="caseset"><span></span> By partnering with Microsoft Azure, Data Integrity
                        Services (DIS) executed a Unified Data Platform for a leading Global Retail Chain which helped
                        them reduce 20% of inefficiencies in their logistics network, and improved quality of their data
                        with Unified BI dashboards.</a>
                </figcaption>
            </figure>
            <figure>
                <img src="{{ asset('web/images/mis-img-2.png') }}" alt="Dis" />
                <figcaption>
                    <p>DIS Saves a Large Financial Institution by securing their data through Cloud Migration</p>
                    <a href="#" class="caseset"><span></span>Data Integrity Services conducted a secure cloud migration
                        to Microsoft Azure for a financial institution of thousands, through which several security
                        measures and adherence management were noticed.</a>
                </figcaption>
            </figure>
            <figure>
                <div class="imgseccont">
                    <img src="{{ asset('web/images/mis-img-3.png') }}" alt="Dis" /> -->
        <!-- <a href="#" class="videobtn">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="17" viewBox="0 0 14 17" fill="none">
                <g clip-path="url(#clip0_1_123)">
                  <path d="M1.14497 1.20377L12.1028 7.86114C12.1813 7.90902 12.2465 7.97746 12.2917 8.05967C12.337 8.14188 12.3608 8.235 12.3608 8.32976C12.3608 8.42453 12.337 8.51764 12.2917 8.59985C12.2465 8.68207 12.1813 8.75051 12.1028 8.79839L1.14497 15.4558C1.06558 15.504 0.975355 15.5296 0.883435 15.5298C0.791515 15.53 0.70117 15.505 0.621557 15.4571C0.541944 15.4092 0.475892 15.3403 0.430096 15.2573C0.384301 15.1743 0.360389 15.0802 0.360784 14.9845V1.67294C0.360757 1.57739 0.384937 1.48353 0.430883 1.40083C0.476829 1.31813 0.542913 1.24952 0.622464 1.20192C0.702015 1.15433 0.792216 1.12944 0.883958 1.12976C0.975701 1.13009 1.06574 1.15562 1.14497 1.20377Z" fill="white" />
                </g>
                <defs>
                  <clipPath id="clip0_1_123">
                    <rect width="13" height="16" fill="white" transform="translate(0.160095 0.329956)" />
                  </clipPath>
                </defs>
              </svg>
            </span>
          </a> -->
        <!-- </div>
                <figcaption>
                    <p>Upgrading from Equipment Breakdowns of a Manufacturing Plant to Significant Cost Savings by
                        AI-Driven Maintenance on Microsoft Azure.</p>
                    <a href="#" class="caseset"><span></span>Data Integrity Services outcame a drowning Manufacturing
                        Plant with 30% reduction in their equipment downtime by analysing the past breakdowns resulting
                        in overall improvement of the plant’s infrastructure by their AI-Driven Maintenance
                        Technologies.
                    </a>
                </figcaption>
            </figure>
            <figure>
                <div class="imgseccont"> <img src="{{ asset('web/images/mis-img-4.png') }}" alt="Dis" /></div>
                <figcaption>
                    <p>DIS Streamlines Customer Interactions of an MNC by Customer Relationship Management (CRM),
                        powered by Microsoft Azure.</p>
                    <a href="#" class="caseset"><span></span>Data Integrity Services helped a Multinational Corporation
                        with efficient collaboration, keeping customer satisfaction in priority, which improved their
                        user adoption by 40%. This outcome came as a positive result with effective Customer
                        Relationship Management by user-friendly Power Apps Interface, integrated with Azure.</a>
                </figcaption>
            </figure>
            <figure>
                <div class="imgseccont">
                    <img src="{{ asset('web/images/mis-img-5.png') }}" alt="Dis" /> -->
        <!-- <a href="#" class="videobtn">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="17" viewBox="0 0 14 17" fill="none">
                <g clip-path="url(#clip0_1_123)">
                  <path d="M1.14497 1.20377L12.1028 7.86114C12.1813 7.90902 12.2465 7.97746 12.2917 8.05967C12.337 8.14188 12.3608 8.235 12.3608 8.32976C12.3608 8.42453 12.337 8.51764 12.2917 8.59985C12.2465 8.68207 12.1813 8.75051 12.1028 8.79839L1.14497 15.4558C1.06558 15.504 0.975355 15.5296 0.883435 15.5298C0.791515 15.53 0.70117 15.505 0.621557 15.4571C0.541944 15.4092 0.475892 15.3403 0.430096 15.2573C0.384301 15.1743 0.360389 15.0802 0.360784 14.9845V1.67294C0.360757 1.57739 0.384937 1.48353 0.430883 1.40083C0.476829 1.31813 0.542913 1.24952 0.622464 1.20192C0.702015 1.15433 0.792216 1.12944 0.883958 1.12976C0.975701 1.13009 1.06574 1.15562 1.14497 1.20377Z" fill="white" />
                </g>
                <defs>
                  <clipPath id="clip0_1_123">
                    <rect width="13" height="16" fill="white" transform="translate(0.160095 0.329956)" />
                  </clipPath>
                </defs>
              </svg>
            </span>
          </a> -->
        <!-- </div>
                <figcaption>
                    <p> Helping Multinational Sales Organizations struggling with real-time insights with the
                        implementation of Sales Performance Dashboard</p>
                    <a href="#" class="caseset"><span></span>Data Integrity Services helped a a Multinational Sales
                        Organization with 25% increase in their sales revenue with real-time insights and targeted sales
                        strategies, advancing the collaboration among the sales team region-wise. DIS made it possible
                        by integrating data from CRM systems, Excel Spreadsheets, and ofcourse by the efforts of its
                        hard-working team with the help of Power BI Automated Dashboards.</a>
                </figcaption>
            </figure>
            <figure>
                <div class="imgseccont"> <img src="{{ asset('web/images/mis-img-6.png') }}" alt="Dis" /></div>
                <figcaption>
                    <p> Reduced 30% in Onboarding Time and Paperwork of a large HR Management with Power Automation and
                        Azure AI Services.</p>
                    <a href="#" class="caseset"><span></span>Data Integrity Services helped a large HR Department facing
                        difficulties in managing employee onboarding and performance evaluation data by introducing
                        AI-driven insights to advance their processes. With our Power Automation and Azure AI Services,
                        decision-making of the AI-infused HR management was enhanced due to which employees were
                        satisfied through their personalized performance insights.</a>

                </figcaption>
            </figure>-->
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
<section class="latestinsights">
    <div class="container">
        <div class="row mb-75">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                <h4>Latest insights</h4>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                <a href="{{url('data-world')}}" class="viewall">View all</a>
            </div>
        </div>
    </div>
    <div class="owl-carousel owl-theme" id="carousel2">
        @foreach ($insights as $insights)
        <div class="item">
            <div class="sightcorsual"
                style="background-image: url('{{ asset($insights->image) }}'); width: 100%; max-width: 400px; height: 500px; background-size: cover; background-position: center; overflow: hidden;">
                <!-- You can add any content inside this div if needed -->
            </div>

            <div class="boxmember">
                <!-- <h6><span class="dot"></span>White Paper</h6> -->
                <h5>{{$insights->title}}</h5>
            </div>
        </div>
        @endforeach
        <!-- <div class="item">
            <div class="sightcorsual">
                <img src="{{ asset('web/images/insight-img-1.png') }}">
            </div>
            <div class="boxmember">
                <h5>Advanced algorithms to ensure unparalleled accuracy and reliability in safeguarding your data</h5>
            </div>
        </div>
        <div class="item">
            <div class="sightcorsual">
                <img src="{{ asset('web/images/insight-img-2.png') }}">
            </div>
            <div class="boxmember">
                <h5>Crafting a smooth blend that ensures your data's integrity is rock-solid with our cutting-edge AI,
                    BI, and ML technologies.</h5>
            </div>
        </div>
        <div class="item">
            <div class="sightcorsual">
                <img src="{{ asset('web/images/insight-img-3.png') }}">
            </div>
            <div class="boxmember">
                <h5>Adapting to evolve patterns and ensuring the highest standards of accuracy through Machine Learning,
                    refining and optimizing data processes.</h5>
            </div>
        </div>
        <div class="item">
            <div class="sightcorsual">
                <img src="{{ asset('web/images/insight-img-4.png') }}">
            </div>
            <div class="boxmember">
                <h5>Empowering businesses to make informed decisions based on a data-driven foundation</h5>
            </div>
        </div>
        <div class="item">
            <div class="sightcorsual">
                <img src="{{ asset('web/images/insight-img-4.png') }}">
            </div>
            <div class="boxmember">
                <h5>Employing advanced techniques to adapt and fortify the data against evolving risks with our dynamic
                    security layers</h5>
            </div>
        </div>
        <div class="item">
            <div class="sightcorsual">
                <img src="{{ asset('web/images/insight-img-4.png') }}">
            </div>
            <div class="boxmember">
                <h5>Assuring customer-centric approach with our data integrity services revolving around your needs</h5>
            </div>
        </div> -->
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
<script>
$(document).ready(function() {
    $("#carousel2").owlCarousel({
        margin: 20,
        nav: true,

        loop: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            450: {
                items: 2
            },
            1000: {
                items: 4
            }
        }

    });
});
</script>
@include('layouts.footer')