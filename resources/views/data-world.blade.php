@include('layouts.header')



<div class="bannerslider oneuspage">
    <div class="captionheader shadownone lefttextcap nohome">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>Data <span>World</span></h1>
                </div>
            </div>
        </div>
    </div>
    <img width="100%" height="100%" src="{{ asset('web/images//data-world-banner.png')}}">
</div>
<section class="dataworldpart">
    <div class="container">
        <div class="row" id="data-w">
            <div class="col-lg-12 text-center">
                <h4 class="mainheadingtext">Data is one of the most valuable asset</h4>
            </div>
        </div>

        <div class="row mb-4" id="data-s">
            <div class="col-lg-4">
                <div class="joinusbox">
                    <span> <img src="{{ asset('web/images//data-analytics.svg')}}" class="iconjoin"></span>
                    <h3>Data & Computing</h3>
                    <p>Expertise in extracting value from large datasets through the integration and management of
                        cloud-based solutions.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="joinusbox">
                    <span> <img src="{{ asset('web/images//data-class.svg')}}" class="iconjoin"></span>
                    <h3>ML & AI Operations</h3>
                    <p>Implementing intelligent algorithms by incorporating Machine Learning and Artificial Intelligence
                        for advanced decision-making.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="joinusbox">
                    <span> <img src="{{ asset('web/images//data-backup.svg')}}" class="iconjoin"></span>
                    <h3>Data Security</h3>
                    <p>Ensuring strong measures to secure your valuable data by partnering with Microsoft Azure.</p>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-lg-4">
                <div class="joinusbox">
                    <span> <img src="{{ asset('web/images//data-vis-3.svg')}}" class="iconjoin"></span>
                    <h3>Data Engineering</h3>
                    <p>Tailoring the power of data to derive meaningful insights by optimizing your computing
                        infrastructure.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="joinusbox">
                    <span> <img src="{{ asset('web/images//data-refinery-reference.svg')}}" class="iconjoin"></span>
                    <h3>Data Streaming & Event</h3>
                    <p>Transmitting data as it is generated in real time, and capturing events for later analysis &
                        retrieval.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="joinusbox">
                    <span> <img src="{{ asset('web/images//data-vis-1.svg')}}" class="iconjoin"></span>
                    <h3>Data Story Telling</h3>
                    <p>Crafting complex data in a way that tells a clear & coherent story through visually engaging
                        narratives to enhance data presence.</p>
                </div>
            </div>
        </div>

    </div>
</section>
<style>
$color-primary-white: rgb(240, 240, 240);

main {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 50px;
    color: white;
}

.card {

    border-radius: 10px;
    overflow: hidden;
    cursor: pointer;
    position: relative;
    color: white;
    box-shadow: 0 10px 30px 5px rgba(0, 0, 0, 0.2);

    img {
        position: absolute;
        object-fit: cover;

        top: 0;
        left: 0;
        opacity: 0.9;
        transition: opacity .2s ease-out;
    }

    h2 {
        position: absolute;
        inset: auto auto 30px 30px;
        margin: 0;
        transition: inset .3s .3s ease-out;

        font-weight: normal;
        text-transform: uppercase;
    }

    p,
    a {
        position: absolute;
        opacity: 0;
        max-width: 80%;
        margin: 5px;
        transition: opacity .3s ease-out;
    }

    p {
        inset: auto auto 25px 30px;
    }

    a {
        inset: auto auto 40px 30px;
        color: inherit;
        text-decoration: none;
    }

    &:hover h2 {
        inset: auto auto 140px 37px;
        transition: inset .3s ease-out;

    }

    &:hover p,
    &:hover a {
        opacity: 1;
        transition: opacity .5s .1s ease-in;
    }

    &:hover img {
        transition: opacity .3s ease-in;
        opacity: 1;
    }

}

.material-symbols-outlined {
    vertical-align: middle;
}
</style>
<section class="buildfaster pt-0" id="latesinsight">
    <div class="container">

        <div class="row text-center">
            <h4 class="wemake"> Latest Insights</h4>
            <p>Bringing innovation across all industries</p>
        </div>
        <div class="maincontainer">
            <div class="row">
                @foreach ($insights as $insight)
                <main style="margin:0 10px 20px 0;">
                    <div class="card"
                        style="background-image:linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('{{ asset($insight->image) }}'); url('{{ asset($insight->image) }}'); width: 100%; max-width: 400px; height: 350px; background-size: cover; background-position: center; overflow: hidden;">
                        <div class="card-content">
                            <h2 style=" width: 80%;overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                                {{ $insight->title }}</h2>
                            <p>{{ $insight->title }}</p>
                        </div>
                    </div>
                </main>
                @endforeach
            </div>


            <!-- <figure>
                <div class="imgseccont">
                    <img src="{{ asset('web/images//data-world-img-1.png')}}" alt="Dis">
                </div>
                <figcaption>
                    <p> DIS Reduces 20% in Supply Chain inefficiencies for a Global Retail Chain with Unified Data
                        Platform and enhanced decision-making.</p>
                    <a href="{{URL('/study/dis-reduces-supply-chain-inefficiencies')}}" class="caseset"><span></span>
                        Read more</a>
                </figcaption>
            </figure>
            <figure>
                <div class="imgseccont">

                    <img src="{{ asset('web/images//data-world-img-4.png')}}" alt="Dis">
                </div>
                <figcaption>
                    <p> DIS Saves a Large Financial Institution by securing their data through Cloud Migration.</p>
                    <a href="{{URL('/study/dis-saves-large-financial-institution')}}" class="caseset"><span></span> Read
                        more</a>
                </figcaption>
            </figure>
            <figure>
                <div class="imgseccont">
                    <img src="{{ asset('web/images//data-world-img-2.png')}}" alt="Dis">


                </div>
                <figcaption>
                    <p> Upgrading from Equipment Breakdowns of a Manufacturing Plant to Significant Cost Savings by
                        AI-Driven Maintenance on Microsoft Azure.
                    </p>
                    <a href="{{URL('/study/upgrading-from-equipment-breakdowns')}}" class="caseset"><span></span> Read
                        more</a>
                </figcaption>
            </figure>
            <figure>
                <div class="imgseccont"> <img src="{{ asset('web/images//data-world-img-5.png')}}" alt="Dis"></div>
                <figcaption>
                    <p>DIS Streamlines Customer Interactions of an MNC by Customer Relationship Management (CRM),
                        powered by Microsoft Azure.</p>
                    <a href="{{URL('/study/dis-streamlines-customer-interactions')}}" class="caseset"><span></span> Read
                        more</a>
                </figcaption>
            </figure>
            <figure>
                <div class="imgseccont">
                    <img src="{{ asset('web/images//data-world-img-3.png')}}" alt="Dis">
                    <a href="#" class="videobtn">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="17" viewBox="0 0 14 17"
                                fill="none">
                                <g clip-path="url(#clip0_1_123)">
                                    <path
                                        d="M1.14497 1.20377L12.1028 7.86114C12.1813 7.90902 12.2465 7.97746 12.2917 8.05967C12.337 8.14188 12.3608 8.235 12.3608 8.32976C12.3608 8.42453 12.337 8.51764 12.2917 8.59985C12.2465 8.68207 12.1813 8.75051 12.1028 8.79839L1.14497 15.4558C1.06558 15.504 0.975355 15.5296 0.883435 15.5298C0.791515 15.53 0.70117 15.505 0.621557 15.4571C0.541944 15.4092 0.475892 15.3403 0.430096 15.2573C0.384301 15.1743 0.360389 15.0802 0.360784 14.9845V1.67294C0.360757 1.57739 0.384937 1.48353 0.430883 1.40083C0.476829 1.31813 0.542913 1.24952 0.622464 1.20192C0.702015 1.15433 0.792216 1.12944 0.883958 1.12976C0.975701 1.13009 1.06574 1.15562 1.14497 1.20377Z"
                                        fill="white"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_1_123">
                                        <rect width="13" height="16" fill="white"
                                            transform="translate(0.160095 0.329956)"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                    </a>
                </div>
                <figcaption>
                    <p>Helping Multinational Sales Organizations struggling with real-time insights with the
                        implementation of Sales Performance Dashboard.</p>
                    <a href="{{URL('/study/helping-multinational-sales-organizations')}}" class="caseset"><span></span>
                        Read more</a>
                </figcaption>
            </figure>
            <figure>
                <div class="imgseccont"> <img src="{{ asset('web/images//data-world-img-6.png')}}" alt="Dis"></div>
                <figcaption>
                    <p>Reduced 30% in Onboarding Time and Paperwork of a large HR Management with Power Automation and
                        Azure AI Services.</p>
                    <a href="{{URL('/study/reduced-onboarding-time-and-paperwork')}}" class="caseset"><span></span> Read
                        more</a>
                </figcaption>
            </figure> -->
        </div>
    </div>
</section>


<!-- <section class="latestinsights">
    <div class="container">
        <div class="row mb-75">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                <h4>Latest insights</h4>
            </div>

        </div>

        <div class="owl-carousel owl-dataworld owl-theme">
            <div class="item">
                <div class="sightcorsual">
                    <img src="{{ asset('web/images//data-world-img-7.png')}}">
                </div>
                <div class="boxmember">
                    <h6><span class="dot"></span>White Paper</h6>
                    <h5>Unleashing the full potential of RPA with cloud computing</h5>
                </div>
            </div>
            <div class="item">
                <div class="sightcorsual">
                    <img src="{{ asset('web/images//data-world-img-8.png')}}">
                </div>
                <div class="boxmember">
                    <h6><span class="dot"></span>White Paper</h6>
                    <h5>Unleashing the full potential of RPA with cloud computing</h5>
                </div>
            </div>






        </div>


    </div>

</section> -->

<section class="contactpart pt-75">
    <div class="container">
        <div class="contactbond">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4 class="cloudcontactheading">Talk to an <span>Expert</span></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="cloudcontactimg">
                        <img src="{{ asset('web/images//cloudcontact-img.jpg')}}">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="allcontactform">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" name="" placeholder="First Name" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="" placeholder="Doe" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="Email" name="" placeholder="" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="tel" name="" placeholder="+1 012 3456 789" class="form-control"
                                        value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Company Name</label>
                                    <input type="text" name="" placeholder="" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>How did you hear about us?</label>
                                    <select class="form-control">
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea class="form-control" placeholder="Write your message.."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div class="form-group btnpart">
                                    <input type="submit" name="" value="Send Message" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@include('layouts.footer')