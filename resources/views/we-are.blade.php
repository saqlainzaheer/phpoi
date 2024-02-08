@include('layouts.header')

<style>
.ag-format-container {
    width: 1142px;
    margin: 0 auto;
}



.ag-courses_box {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;

    padding: 50px 0;
}

.ag-courses_item {
    -ms-flex-preferred-size: calc(33.33333% - 30px);
    flex-basis: calc(50% - 30px);

    margin: 0 15px 30px;

    overflow: hidden;
    border: 2px solid black;
    border-radius: 28px;
}

.ag-courses-item_link {
    display: block;
    padding: 30px 20px;
    background-color: white;

    overflow: hidden;

    position: relative;
}

.ag-courses-item_link:hover,
.ag-courses-item_link:hover .ag-courses-item_date {
    text-decoration: none;
    color: #FFF;
}

.ag-courses-item_link:hover .ag-courses-item_bg {
    -webkit-transform: scale(10);
    -ms-transform: scale(10);
    transform: scale(10);
}

.ag-courses_item a {
    text-decoration: none;
}

.ag-courses-item_title {
    min-height: 87px;
    overflow: hidden;

    font-weight: bold;
    font-size: 30px;
    color: black;

    z-index: 2;
    position: relative;
}

.ag-courses-item_date-box {
    font-size: 18px;
    color: #FFF;

    z-index: 2;
    position: relative;
}

.ag-courses-item_date {
    font-weight: bold;
    color: #f9b234;

    -webkit-transition: color .5s ease;
    -o-transition: color .5s ease;
    transition: color .5s ease
}

.card-description {
    font-weight: 600;
    line-height: 32px;
    color: hsl(0deg 0% 0% / 50%);
    font-size: 16px;
    max-width: 470px;
}

.ag-courses-item_bg {
    height: 128px;
    width: 128px;
    background-color: #f9b234;

    z-index: 1;
    position: absolute;
    top: -75px;
    right: -75px;

    border-radius: 50%;

    -webkit-transition: all .5s ease;
    -o-transition: all .5s ease;
    transition: all .5s ease;
}

.ag-courses_item:nth-child(2n) .ag-courses-item_bg {
    background-color: #3ecd5e;
}

.ag-courses_item:nth-child(3n) .ag-courses-item_bg {
    background-color: #e44002;
}

.ag-courses_item:nth-child(4n) .ag-courses-item_bg {
    background-color: #952aff;
}

.ag-courses_item:nth-child(5n) .ag-courses-item_bg {
    background-color: #cd3e94;
}

.ag-courses_item:nth-child(6n) .ag-courses-item_bg {
    background-color: #4c49ea;
}




/* ----- */
.wemakeheading {

    margin-bottom: 35px;
}

.hero {
    /* padding-top: 100px; */
    /* padding-bottom: 100px; */
    /* padding-left: 20px; */
    flex-wrap: wrap;
    min-height: 300px;
    display: flex;
    /* justify-content: center; */
    /* align-items: center; */
    flex-direction: row;
    height: 100%;
    /* backgro  und: radial-gradient(ellipse at center, rgba(255, 112, 2, 0.1) 0%, rgba(98, 51, 0, 0) 70%), radial-gradient(ellipse at center, rgba(255, 111, 0, 0.05) 0%, rgba(0, 0, 0, 0) 70%), radial-gradient(ellipse at center, rgba(255, 191, 0, 0.1) 0%, rgba(200, 77, 6, 0) 70%) #ffffff; */
    background: radial-gradient(ellipse at center, rgba(0, 0, 255, 0.1) 0%, rgba(0, 191, 255, 0) 70%), radial-gradient(ellipse at center, rgba(173, 216, 230, 0.05) 0%, rgba(0, 0, 255, 0) 70%), radial-gradient(ellipse at center, rgba(173, 216, 230, 0.1) 0%, rgba(0, 191, 255, 0) 70%) #ffffff;

    background-repeat: no-repeat, no-repeat, no-repeat;
    background-size: 1200px 1200px, 1200px 1200px, 1200px 1200px;
    background-attachment: fixed;
    animation: bganimation 15s infinite;
}

.makepara {
    text-align: center;
    color: #797979;
    font-family: Play;
    font-size: 27px;
    font-style: normal;
    font-weight: 400;
    line-height: 43.2px;
}

.ethichead {
    width: 40%;
}

.ethicp {
    width: 60%;

}

.ethichead h4 {

    color: var(--gray-900, #101828);
    /* text-align: center; */
    font-family: Play;
    font-size: 36px;
    font-style: normal;
    font-weight: 700;
    line-height: 44px;
    letter-spacing: -0.72px;
}

.ethicp p {

    color: #797979;
    font-family: Play;
    font-size: 20px;
    font-style: normal;
    font-weight: 400;
    line-height: 149.4%;
}

.ethicdiv {
    display: flex;
    width: 100%;
    margin: 100px 0;
    /* margin-bottom: 50px; */
}



@keyframes bganimation {
    50% {
        background-position-x: 700px;
    }
}

@media only screen and (max-width: 979px) {
    .ag-courses_item {
        -ms-flex-preferred-size: calc(50% - 30px);
        flex-basis: calc(50% - 30px);
    }

    .ag-courses-item_title {
        font-size: 24px;
    }
}

@media only screen and (max-width: 767px) {
    .ag-format-container {
        width: 96%;
    }

}

@media only screen and (max-width: 639px) {
    .ethicdiv {

        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    . .ethichead {
        width: 100%;
    }

    .ethicp {
        width: 100%;
    }

    .ethicp p {
        width: 250px;
        margin: auto;
    }

    .ag-courses_item {
        -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
    }

    .ag-courses-item_title {
        min-height: 10px;
        line-height: 1;
        margin: 10px 0;
        font-size: 20px;
        padding: 0 22px;
    }

    .wearevideo {
        padding: 0px 30px;
    }

    .card-description {

        line-height: 25px;
        font-size: 17px;
        padding: 0 19px;
    }

    .ag-courses-item_link {
        /* padding: 22px 40px; */
        padding: 15px 0;
    }

    .ag-courses-item_date-box {
        font-size: 16px;
    }

    .makeforword {
        padding: 54px 0px;
    }

    .wemakeheading {
        margin-bottom: 25px;
        font-size: 39px;
    }


    .makepara {
        font-size: 16px;
    }

    .imgseccont img {
        margin: auto;
        height: 420px;

    }

    #imgrow {
        gap: 7px;
    }


}
</style>
<div class="bannerslider wearevid" style="height:65vh;">
    <div class="captionheader shadownone lefttextcap nohome" style=" background-color: rgba(0, 0, 0, 0.2);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>We <span> Are </span> </h1>
                    <h3><span style="color:white ">Your Microsoft Solutions Partner, Qualified Azure Expert MSP. Empower
                            Your Data Journey with Excellence.</span></h3>
                </div>
            </div>
        </div>
    </div>
    <video width="100%" height="100%" autoplay muted loop>
        <source src="{{ asset('web/images/weare-vid.mp4') }}" type="video/mp4">
    </video>
</div>
<section class="makeforword hero">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h2 class="wemakeheading">Make <span> Forward </span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <p class="makepara">Data Integrity Services stands as a premier technology and consulting partner,
                    offering comprehensive end-to-end solutions within the Microsoft ecosystem. As a dedicated team
                    of
                    subject matter experts, including Microsoft certified professionals. We are committed to
                    delivering
                    outstanding results for your business. </p>
                <div style="width:250px;margin:auto;">

                    <a href="{{url('our-services')}}" class="btn btn-primary mbtn"
                        style="background:#3483ae; font-size: 21px; margin-top:10px;">Make Forward</a>
                </div>
            </div>
        </div>

    </div>

</section>
<!-- <section class="explorepart">
    <div class="container">
        <div class="row">

        </div>
        <div id="imgrow" class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-12 p-0 bexplore">
                <div class="imgseccont boxexplorevid">
                    <a href="{{url('cloud-providers#casestudiess')}}">
                        <img src="{{ asset('web/images/expore-img01.png') }}" alt="Dis"> </a>
                     <a href="#" class="videobtn">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="17" viewBox="0 0 14 17" fill="none">
                                <g clip-path="url(#clip0_1_123)">
                                    <path d="M1.14497 1.20377L12.1028 7.86114C12.1813 7.90902 12.2465 7.97746 12.2917 8.05967C12.337 8.14188 12.3608 8.235 12.3608 8.32976C12.3608 8.42453 12.337 8.51764 12.2917 8.59985C12.2465 8.68207 12.1813 8.75051 12.1028 8.79839L1.14497 15.4558C1.06558 15.504 0.975355 15.5296 0.883435 15.5298C0.791515 15.53 0.70117 15.505 0.621557 15.4571C0.541944 15.4092 0.475892 15.3403 0.430096 15.2573C0.384301 15.1743 0.360389 15.0802 0.360784 14.9845V1.67294C0.360757 1.57739 0.384937 1.48353 0.430883 1.40083C0.476829 1.31813 0.542913 1.24952 0.622464 1.20192C0.702015 1.15433 0.792216 1.12944 0.883958 1.12976C0.975701 1.13009 1.06574 1.15562 1.14497 1.20377Z" fill="white"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_1_123">
                                        <rect width="13" height="16" fill="white" transform="translate(0.160095 0.329956)"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                    </a> -->
<!-- </div> -->
<!-- </div>
<div class="col-lg-4 col-md-4 col-sm-4 col-12 p-0 bexplore">
    <div class="imgseccont boxexplorevid">
        <a href="{{url('cloud-providers#casestudiess')}}">

            <img src="{{ asset('web/images/expore-img02.png') }}" alt="Dis">
        </a> -->
<!-- <a href="#" class="videobtn">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="17" viewBox="0 0 14 17" fill="none">
                                <g clip-path="url(#clip0_1_123)">
                                    <path d="M1.14497 1.20377L12.1028 7.86114C12.1813 7.90902 12.2465 7.97746 12.2917 8.05967C12.337 8.14188 12.3608 8.235 12.3608 8.32976C12.3608 8.42453 12.337 8.51764 12.2917 8.59985C12.2465 8.68207 12.1813 8.75051 12.1028 8.79839L1.14497 15.4558C1.06558 15.504 0.975355 15.5296 0.883435 15.5298C0.791515 15.53 0.70117 15.505 0.621557 15.4571C0.541944 15.4092 0.475892 15.3403 0.430096 15.2573C0.384301 15.1743 0.360389 15.0802 0.360784 14.9845V1.67294C0.360757 1.57739 0.384937 1.48353 0.430883 1.40083C0.476829 1.31813 0.542913 1.24952 0.622464 1.20192C0.702015 1.15433 0.792216 1.12944 0.883958 1.12976C0.975701 1.13009 1.06574 1.15562 1.14497 1.20377Z" fill="white"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_1_123">
                                        <rect width="13" height="16" fill="white" transform="translate(0.160095 0.329956)"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                    </a> 
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12 p-0 bexplore">
                <div class="imgseccont boxexplorevid">
                    <a href="{{url('cloud-providers#casestudiess')}}">

                        <img src="{{ asset('web/images/expore-img03.png') }}" alt="Dis">
                    </a>
                  <a href="#" class="videobtn">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="17" viewBox="0 0 14 17" fill="none">
                                <g clip-path="url(#clip0_1_123)">
                                    <path d="M1.14497 1.20377L12.1028 7.86114C12.1813 7.90902 12.2465 7.97746 12.2917 8.05967C12.337 8.14188 12.3608 8.235 12.3608 8.32976C12.3608 8.42453 12.337 8.51764 12.2917 8.59985C12.2465 8.68207 12.1813 8.75051 12.1028 8.79839L1.14497 15.4558C1.06558 15.504 0.975355 15.5296 0.883435 15.5298C0.791515 15.53 0.70117 15.505 0.621557 15.4571C0.541944 15.4092 0.475892 15.3403 0.430096 15.2573C0.384301 15.1743 0.360389 15.0802 0.360784 14.9845V1.67294C0.360757 1.57739 0.384937 1.48353 0.430883 1.40083C0.476829 1.31813 0.542913 1.24952 0.622464 1.20192C0.702015 1.15433 0.792216 1.12944 0.883958 1.12976C0.975701 1.13009 1.06574 1.15562 1.14497 1.20377Z" fill="white"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_1_123">
                                        <rect width="13" height="16" fill="white" transform="translate(0.160095 0.329956)"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row mt-150">
            <div class="col-lg-10 mx-auto">
                <p class="makepara">At the heart of every DIS project lies these three fundamental assets. By allowing
                    these assets to complement and strengthen one another, we deliver effective solutions across diverse
                    industries and subjects.</p>
            </div>
        </div>
    </div>
</section> -->


<!-- <section id="sl">


    <div class="blog-slider">
        <div class="swiper-wrapper blog-slider__wrp ">
            <div class="swiper-slide blog-slider__item ">
                <div class="blog-slider__img">

                    <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759872/kuldar-kalvik-799168-unsplash.webp"
                        alt="">
                </div>
                <div class="blog-slider__content">
                    <span class="blog-slider__code">26 December 2019</span>
                    <div class="blog-slider__title">Lorem Ipsum Dolor</div>
                    <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae
                        voluptate repellendus magni illo ea animi? </div>
                    <a href="#" class="blog-slider__button">READ MORE</a>
                </div>
            </div>
            <div class="swiper-slide blog-slider__item ">
                <div class="blog-slider__img">
                    <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759871/jason-leung-798979-unsplash.webp"
                        alt="">
                </div>
                <div class="blog-slider__content">
                    <span class="blog-slider__code">26 December 2019</span>
                    <div class="blog-slider__title">Lorem Ipsum Dolor2</div>
                    <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae
                        voluptate repellendus magni illo ea animi?</div>
                    <a href="#" class="blog-slider__button">READ MORE</a>
                </div>
            </div>

            <div class="swiper-slide blog-slider__item ">
                <div class="blog-slider__img">
                    <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759871/alessandro-capuzzi-799180-unsplash.webp"
                        alt="">
                </div>
                <div class="blog-slider__content">
                    <span class="blog-slider__code">26 December 2019</span>
                    <div class="blog-slider__title">Lorem Ipsum Dolor</div>
                    <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae
                        voluptate repellendus magni illo ea animi?</div>
                    <a href="#" class="blog-slider__button">READ MORE</a>
                </div>
            </div>

        </div>
        <div class="blog-slider__pagination"></div>
    </div>
</section> -->
<style>
.tile img {
    object-fit: cover;
}
</style>

<section id="pic">
    <div class="container">

        <div class="col-lg-12">
            <h4 class="mb-5 ">Explore our stories</h4>
        </div>
        <div class="wrap">
            <a href="{{url('cloud-providers#casestudiess')}}">
                <div class="tile">
                    <img src="{{ asset('web/images/mimg01.jpg') }}" />
                    <div class="text">
                        <h1>Understanding</h1>
                        <h2 class="animate-text">We diligently understand your project.</h2>
                        <p class="animate-text">align with your needs, and set clear expectations before proceeding.
                        </p>
                        <div class="dots">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                    </div>
                </div>
            </a>


            <a href="{{url('cloud-providers#casestudiess')}}">
                <div class="tile">

                    <img src="{{ asset('web/images/mimg02.jpg') }}" />
                    <div class="text">
                        <h1>Solving</h1>
                        <h2 class="animate-text">With a team of experts,</h2>
                        <p class="animate-text">we craft ingenious solutions to address your unique challenges, only
                            after a deep understanding. </p>
                        <div class="dots">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{url('cloud-providers#casestudiess')}}">
                <div class="tile">

                    <img src="{{ asset('web/images/mimg03.jpg') }}" />

                    <div class="text">
                        <h1>Implementing</h1>
                        <h2 class="animate-text">We bring our solutions to life</h2>
                        <p class="animate-text">ensuring seamless integration and tangible results, but only after
                            thorough understanding and smart problem-solving. </p>
                        <div class="dots">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-10 mx-auto ">
            <p class="makepara " id="storyb">At the heart of every DIS project lies these three fundamental assets. By
                allowing these assets to complement and strengthen one another, we deliver effective solutions across
                diverse industries and subjects.</p>
        </div>

    </div>


</section>
<section class="wemakeinn">
    <div class="container">
        <!-- <div class="row mb-150">
            <div class="col-lg-12">
                <h3 class="mb-5">We make innovation happen.</h3>
                <p>DIS started with a compact team and a mission to catalyze the digital revolution. Now, we are a team of over hundreds of individuals spread over the globe, yet our essence remains unchanged, formed by agility, vertical task forces, and an intrinsic drive for innovation.</p>
            </div>
        </div> -->

        <!-- <div class="row mb-150s">
            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                <div class="wearerating">
                    14,300+
                    <span> People</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                <div class="wearerating">
                    38
                    <span> Nationalities</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                <div class="wearerating">
                    152
                    <span> Partnerships with Universities</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                <div class="wearerating">
                    2030
                    <span> Net Zero Goal</span>
                </div>
            </div>
        </div> -->

        <div class="row mt-100">
            <div class="col-lg-12">
                <h3 class="mb-5">A Microsoft Partner of Distinction </h3>
                <p style="max-width: 600px;margin-bottom:30px;">As a Solutions Partner , We demonstrate our
                    broad
                    capability
                    to help customers
                    manage and govern
                    their data to build analytics and AI, migration of key infrastructure workloads to Azure,
                    modernise
                    existing applications and build cloud-native apps and safeguard their entire organisation
                    with
                    integrated security, compliance, and identity solutions.

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



                <h3 style="margin-bottom :10px; margin-top:150px;">DIS Comprehensive Offerings: Explore Our Services
                </h3>

                <div class="ag-format-container">
                    <div class="ag-courses_box">
                        <div class="ag-courses_item">
                            <a href="{{url('our-services')}}" class="ag-courses-item_link">
                                <div class="ag-courses-item_bg"></div>

                                <div class="ag-courses-item_title">
                                    AI and Machine Learning on Microsoft Azure
                                </div>
                                <div class="ag-courses-item_date-box">
                                    <p class="card-description">Advanced exploration of Azure's AI and ML
                                        capabilities,
                                        including Azure Machine Learning for model training and deployment</p>

                                </div>

                            </a>
                        </div>

                        <div class="ag-courses_item">
                            <a href="{{url('our-services')}}" class="ag-courses-item_link">
                                <div class="ag-courses-item_bg"></div>

                                <div class="ag-courses-item_title">
                                    Analytics on Microsoft Azure

                                </div>
                                <div class="ag-courses-item_date-box">
                                    <p class="card-description">In-depth coverage of Azure analytics services,
                                        encompassing Azure Data Factory for orchestrating data workflows,Azure
                                        Synapse
                                        Analytics for big data</p>

                                </div>

                            </a>
                        </div>

                        <div class="ag-courses_item">
                            <a href="{{url('our-services')}}" class="ag-courses-item_link">
                                <div class="ag-courses-item_bg"></div>

                                <div class="ag-courses-item_title">
                                    Data Warehouse Migration to Microsoft Azure
                                </div>
                                <div class="ag-courses-item_date-box">
                                    <p class="card-description">Comprehensive strategies for migrating
                                        large-scale
                                        on-premises data warehouses to Azure, with a focus on optimizing
                                        performance,
                                        scalability, and cost-effectiveness</p>

                                </div>

                            </a>
                        </div>

                        <div class="ag-courses_item">
                            <a href="{{url('our-services')}}" class="ag-courses-item_link">
                                <div class="ag-courses-item_bg"></div>

                                <div class="ag-courses-item_title">
                                    DevOps with GitHub on Microsoft Azure
                                </div>
                                <div class="ag-courses-item_date-box">
                                    <p class="card-description">Advanced DevOps practices using GitHub Actions
                                        for
                                        continuous integration and continuous deployment (CI/CD) pipelines.</p>

                                </div>


                            </a>
                        </div>

                        <div class="ag-courses_item">
                            <a href="{{url('our-services')}}" class="ag-courses-item_link">
                                <div class="ag-courses-item_bg"></div>

                                <div class="ag-courses-item_title">
                                    Infra and Database Migration to Microsoft Azure
                                </div>
                                <div class="ag-courses-item_date-box">
                                    <p class="card-description">Advanced methodologies for migrating complex IT
                                        infrastructures and databases to Azure, including Azure Migrate, Azure
                                        Site
                                        Recovery</p>

                                </div>

                            </a>
                        </div>

                        <div class="ag-courses_item">
                            <a href="{{url('our-services')}}" class="ag-courses-item_link">
                                <div class="ag-courses-item_bg"></div>

                                <div class="ag-courses-item_title">
                                    Kubernetes on Microsoft Azure
                                </div>
                                <div class="ag-courses-item_date-box">
                                    <p class="card-description">In-depth exploration of deploying and managing
                                        <br> containerized applications at scale using Azure Kubernetes Service
                                        (AKS).
                                    </p>

                                </div>
                            </a>
                        </div>

                        <div class="ag-courses_item">
                            <a href="{{url('our-services')}}" class="ag-courses-item_link">
                                <div class="ag-courses-item_bg">
                                </div>
                                <div class="ag-courses-item_title">
                                    Microsoft Low Code Application Development
                                </div>
                                <div class="ag-courses-item_date-box">
                                    <p class="card-description">Advanced usage of low-code platforms within the
                                        Microsoft ecosystem, such as Power Platform, with a focus on building
                                        complex
                                        applications.</p>

                                </div>
                            </a>
                        </div>

                        <div class="ag-courses_item">
                            <a href="{{url('our-services')}}" class="ag-courses-item_link">
                                <div class="ag-courses-item_bg"></div>

                                <div class="ag-courses-item_title">
                                    Business Intelligence
                                </div>
                                <div class="ag-courses-item_date-box">
                                    <p class="card-description">Advanced business intelligence practices using
                                        Power BI,
                                        including data modeling, advanced analytics with DAX (Data Analysis
                                        Expressions), and integration with Azure.</p>

                                </div>

                            </a>
                        </div>
                        <div class="ag-courses_item">
                            <a href="{{url('our-services')}}" class="ag-courses-item_link">
                                <div class="ag-courses-item_bg"></div>

                                <div class="ag-courses-item_title">
                                    Intelligent Automation
                                </div>
                                <div class="ag-courses-item_date-box">
                                    <p class="card-description">Advanced intelligent automation strategies using
                                        Power
                                        Automate, Azure Logic Apps, and Azure Functions. Emphasis on designing
                                        complex
                                        workflows, integrating with custom APIs.
                                    </p>

                                </div>

                            </a>
                        </div>
                        <div class="ag-courses_item">
                            <a href="{{url('our-services')}}" class="ag-courses-item_link">
                                <div class="ag-courses-item_bg"></div>

                                <div class="ag-courses-item_title">
                                    Build and Modernize AI Apps with Microsoft Azure specialization.
                                </div>
                                <div class="ag-courses-item_date-box">
                                    <p class="card-description">Unlock the potential of AI app development with our
                                        Microsoft Solutions Partner Specialization, powered by Azure.Elevate your skills
                                        in creating and modernizing AI-driven applications.
                                    </p>

                                </div>

                            </a>
                        </div>
                    </div>
                </div>



            </div>
        </div>

    </div>
    <div class="wearevideo" style="width: 100%; ">
        <video id="myVideo" controls type="video/mp4" width="100%" height="100%">
            <source src="{{ asset('web/images/F.mp4') }}" type="video/mp4">
        </video>
    </div>


</section>

<style>
#values img {
    width: 50px;
    height: 50px;
    margin: 5px 0;

}

#values h3 {
    margin-bottom: 10px;
}

#values {
    padding: 0;
}

#values .containe {
    margin: 0 50px;
}



#values .headp {
    font-size: 20px;
    max-width: 800px;
    margin: auto;
}
</style>
<section id="values" class="dataworldpart">
    <div class="containe">
        <div class="row mb-75">
            <div class="col-lg-12 ">
                <h4 class="mainheadingtext text-center">OUR VALUES</h4>
                <p class="headp text-center">Our values guide everything we do.We believe in honesty, customer focus,
                    teamwork,
                    innovation,
                    respect and social responsibility.</p>
            </div>
        </div>
        <div class="row mb-4">

            <div class="col-lg-4 mb-4">
                <div class="joinusbox" style="height:100%;">
                    <div><img src="{{ asset('web/images/vicon-1.svg') }}" class="iconjoin"></div>
                    <h3>Honesty</h3>
                    <p>We consider honesty to be our highest value. The trust that our customers, employees and business
                        partners place in us is sacred. Everything we do, how we think, how we interact, will always be
                        guided by the principle of always doing the right thing, especially when it is difficult to do.
                        There is no real success without honesty</p>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="joinusbox" style="height:100%;">
                    <div><img src="{{ asset('web/images/vicon-2.svg') }}" class="iconjoin"></div>
                    <h3>Experience</h3>
                    <p>We believe that experience is crucial when serving our customers. We hire people with exceptional
                        capabilities and potential. We support the spirit of constant growth and striving to achieve an
                        ever-increasing level of knowledge. Our goal is to help each team member reach their highest
                        potential.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="joinusbox" style="height:100%;">
                    <div><img src="{{ asset('web/images/vicon-3.svg') }}" class="iconjoin"></div>
                    <h3>Perfection</h3>
                    <p>We believe that we are trying to do our best. When we deliver the highest level of performance,
                        the results demonstrate excellent performance, and our customers benefit from it. Our experience
                        is confirmed by the fact that we provide stable excellent results that matter to the
                        organizations we work with. The work is really done only when our customers are satisfied with
                        what we do.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="joinusbox" style="height:100%;">
                    <div><img src="{{ asset('web/images/vicon-4.svg') }}" class="iconjoin"></div>
                    <h3>Dexterity</h3>
                    <p>We will use our ability to act quickly and gracefully as a source of competitive advantage for
                        our organization and for our customers. Our agility will be the key to ensuring the sustainable
                        growth of our company and will be the main reason for the success of our customers, which will
                        make us their preferred partner.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="joinusbox" style="height:100%;">
                    <div><img src="{{ asset('web/images/vicon-5.svg') }}" class="iconjoin"></div>
                    <h3>Expansion</h3>
                    <p>We believe that people are our main value. Since we only hire the most talented people, we
                        encourage them to do their best every day. Every moment in our organization is an opportunity to
                        showcase your talent and make an impact. Every member of the organization knows that he is
                        authorized and trusts him to act in the interests of our organization and those whom we serve.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="joinusbox" style="height:100%;">
                    <div><img src="{{ asset('web/images/vicon-6.svg') }}" class="iconjoin"></div>
                    <h3>Innovation</h3>
                    <p>We are sure that the best days in the world are still ahead. We will develop our curiosity,
                        harness the power of technology and use our resources to create innovative ideas and discover
                        new ways of thinking. We do this as our part in making this world a better place.</p>
                </div>
            </div>




        </div>
</section>
<section class="hero">
    <div class="container">


        <div class="container">


            <div class="ethicdiv">
                <div class="ethichead">
                    <h4 class="">Make forward, act sustainably.</h4>
                </div>
                <div class="ethicp">
                    <p>Believing in the potential of a sustainable future, we always acknowledge
                        “TECHNOLOGY”
                        as a powerful tool to attain it. Being the pioneers in digital transformation, we strictly
                        adhere to
                        modernization and standardization in maintaining your valuable information and data,
                        respecting the
                        upcoming generation rights

                    <div>

                        <a href="{{url('our-services')}}" class="btn btn-primary mbtn"
                            style="background:#3483ae; font-size: 21px; margin-top:10px;">Make Forward</a>
                    </div>
                    </p>
                </div>
            </div>
        </div>
        <!-- <div class="row mt-75">
            <div class="col-lg-12">
                <h3 class="mb-5">Make forward, act sustainably.</h3>
                <p class="mb-5">Believing in the potential of a sustainable future, we always acknowledge
                    “TECHNOLOGY”
                    as a powerful tool to attain it. Being the pioneers in digital transformation, we strictly
                    adhere to
                    modernization and standardization in maintaining your valuable information and data,
                    respecting the
                    upcoming generation rights</p>
                <a href="{{url('our-services')}}" class="btn btn-primary">Discover more</a>
            </div>
        </div> -->
    </div>
</section>
<!-- <section class="bepartour">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel owl-bepart owl-theme">
                    <div class="item">
                        <div class="beparttext">
                            <h4> Be part of our team</h4>
                            <a href="#" class="btn btn-primary">Join us</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="beparttext">
                            <h4> Be part of our team</h4>
                            <a href="#" class="btn btn-primary">Join us</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="beparttext">
                            <h4> Be part of our team</h4>
                            <a href="#" class="btn btn-primary">Join us</a>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
</section> -->
@include('layouts.footer')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
var swiper = new Swiper('.blog-slider', {
    spaceBetween: 30,
    effect: 'fade',
    loop: true,
    mousewheel: {
        invert: false,
    },
    // autoHeight: true,
    pagination: {
        el: '.blog-slider__pagination',
        clickable: true,
    },

});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var video = document.getElementById('myVideo');
    var videoHeight = video.offsetHeight;

    // Calculate the threshold dynamically based on the desired visible portion
    var threshold = (100 / videoHeight);

    // Function to start video playback
    function startVideo(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                video.play();
            } else {
                video.pause(); // Pause video if it's not in view
            }
        });
    }

    // Create an intersection observer instance
    var observer = new IntersectionObserver(startVideo, {
        root: null, // Use the viewport as the root
        rootMargin: "0px", // No margin
        threshold: threshold // Trigger when the specified portion of the video is in view
    });

    // Start observing the video element
    observer.observe(video);
});
</script>