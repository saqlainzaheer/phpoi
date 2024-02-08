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
<style>
@import 'https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:300,400';

/* colors */
/* tab setting */
/* breakpoints */
/* selectors relative to radio inputs */
html {
    width: 100%;
    height: 100%;
}

tabm {
    background: #efefef;
    color: #333;
    font-family: "Raleway";
    height: 100%;
}

tabm h1 {
    text-align: center;
    color: #428BFF;
    font-weight: 300;
    padding: 40px 0 20px 0;
    margin: 0;
}

.tabs {
    left: 50%;
    transform: translateX(-50%);
    position: relative;
    background: white;
    padding: 50px;

    padding-bottom: 80px;
    /* width: 70%; */
    width: 100%;
    /* height: 250px; */
    /* box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22); */
    border-radius: 5px;
    min-width: 240px;
}

.tabs input[name=tab-control] {
    display: none;
}

.tabs .content section h2,
.tabs ul li label {
    font-family: "Montserrat";
    font-weight: bold;
    font-size: 28px;
    border: 2px solid;
    padding: 9px;
    color: #428BFF;
}

.tabs ul {
    list-style-type: none;
    padding-left: 0;
    display: flex;
    flex-direction: row;
    margin-bottom: 10px;
    justify-content: space-between;
    align-items: flex-end;
    flex-wrap: wrap;
}

.tabs ul li {
    box-sizing: border-box;
    flex: 1;
    width: 25%;
    padding: 0 10px;
    text-align: center;
}

.tabs ul li label {
    transition: all 0.3s ease-in-out;
    color: #929daf;
    padding: 5px auto;
    overflow: hidden;
    text-overflow: ellipsis;
    display: block;
    cursor: pointer;
    transition: all 0.2s ease-in-out;
    white-space: nowrap;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.tabs ul li label br {
    display: none;
}

.tabs ul li label svg {
    fill: #929daf;
    height: 1.2em;
    vertical-align: bottom;
    margin-right: 0.2em;
    transition: all 0.2s ease-in-out;
}

.tabs ul li label:hover,
.tabs ul li label:focus,
.tabs ul li label:active {
    outline: 0;
    color: #bec5cf;
}

.tabs ul li label:hover svg,
.tabs ul li label:focus svg,
.tabs ul li label:active svg {
    fill: #bec5cf;
}

.tabs .slider {
    position: relative;
    width: 33.3%;
    transition: all 0.33s cubic-bezier(0.38, 0.8, 0.32, 1.07);
}

.tabs .slider .indicator {
    position: relative;
    width: 50px;
    max-width: 100%;
    margin: 0 auto;
    height: 4px;
    background: #428BFF;
    border-radius: 1px;
}

.tabs .content {
    margin-top: 30px;
}

.tabs .content section {
    display: none;
    -webkit-animation-name: content;
    animation-name: content;
    -webkit-animation-direction: normal;
    animation-direction: normal;
    -webkit-animation-duration: 0.3s;
    animation-duration: 0.3s;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
    -webkit-animation-iteration-count: 1;
    animation-iteration-count: 1;
    line-height: 1.4;
}

.tabs .content section h2 {
    color: #428BFF;
    display: none;
}

.tabs .content section h2::after {
    content: "";
    position: relative;
    display: block;
    width: 30px;
    height: 3px;
    background: #428BFF;
    margin-top: 5px;
    left: 1px;
}

.tabs input[name=tab-control]:nth-of-type(1):checked~ul>li:nth-child(1)>label {
    cursor: default;
    color: #428BFF;
}

.tabs input[name=tab-control]:nth-of-type(1):checked~ul>li:nth-child(1)>label svg {
    fill: #428BFF;
}

@media (max-width: 600px) {
    .tabs input[name=tab-control]:nth-of-type(1):checked~ul>li:nth-child(1)>label {
        background: rgba(0, 0, 0, 0.08);
    }
}

.tabs input[name=tab-control]:nth-of-type(1):checked~.slider {
    transform: translateX(0%);
}

.tabs input[name=tab-control]:nth-of-type(1):checked~.content>section:nth-child(1) {
    display: block;
}

.tabs input[name=tab-control]:nth-of-type(2):checked~ul>li:nth-child(2)>label {
    cursor: default;
    color: #428BFF;
}

.tabs input[name=tab-control]:nth-of-type(2):checked~ul>li:nth-child(2)>label svg {
    fill: #428BFF;
}

@media (max-width: 600px) {
    .tabs input[name=tab-control]:nth-of-type(2):checked~ul>li:nth-child(2)>label {
        background: rgba(0, 0, 0, 0.08);
    }
}

.tabs input[name=tab-control]:nth-of-type(2):checked~.slider {
    transform: translateX(100%);
}

.tabs input[name=tab-control]:nth-of-type(2):checked~.content>section:nth-child(2) {
    display: block;
}

.tabs input[name=tab-control]:nth-of-type(3):checked~ul>li:nth-child(3)>label {
    cursor: default;
    color: #428BFF;
}

.tabs input[name=tab-control]:nth-of-type(3):checked~ul>li:nth-child(3)>label svg {
    fill: #428BFF;
}

@media (max-width: 600px) {
    .tabs input[name=tab-control]:nth-of-type(3):checked~ul>li:nth-child(3)>label {
        background: rgba(0, 0, 0, 0.08);
    }
}

.tabs input[name=tab-control]:nth-of-type(3):checked~.slider {
    transform: translateX(200%);
}

.tabs input[name=tab-control]:nth-of-type(3):checked~.content>section:nth-child(3) {
    display: block;
}

.tabs input[name=tab-control]:nth-of-type(4):checked~ul>li:nth-child(4)>label {
    cursor: default;
    color: #428BFF;
}

.tabs input[name=tab-control]:nth-of-type(4):checked~ul>li:nth-child(4)>label svg {
    fill: #428BFF;
}

@media (max-width: 600px) {
    .tabs input[name=tab-control]:nth-of-type(4):checked~ul>li:nth-child(4)>label {
        background: rgba(0, 0, 0, 0.08);
    }
}

.tabs input[name=tab-control]:nth-of-type(4):checked~.slider {
    transform: translateX(300%);
}

.tabs input[name=tab-control]:nth-of-type(4):checked~.content>section:nth-child(4) {
    display: block;
}

@-webkit-keyframes content {
    from {
        opacity: 0;
        transform: translateY(5%);
    }

    to {
        opacity: 1;
        transform: translateY(0%);
    }
}

@keyframes content {
    from {
        opacity: 0;
        transform: translateY(5%);
    }

    to {
        opacity: 1;
        transform: translateY(0%);
    }
}

@media (max-width: 1000px) {
    .tabs ul li label {
        white-space: initial;
    }

    .tabs ul li label br {
        display: initial;
    }

    .tabs ul li label svg {
        height: 1.5em;
    }
}

@media (max-width: 600px) {
    .tabs ul li label {
        padding: 5px;
        border-radius: 5px;
    }

    .tabs ul li {
        width: 100%;
    }

    .tabs ul {
        gap: 10px;
    }

    /* .tabs ul li label span {
        display: none;
    } */

    .tabs .slider {
        display: none;
    }

    .tabs .content {
        margin-top: 20px;
    }

    /* .tabs .content section h2 {
        display: block;
    } */
}


/* ---------------------firstsection */
/* header titel */

.hero {
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 20px;
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

.hero__content {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    flex-direction: row;
    height: 100%;
}

.hero__title {
    margin-top: 0;
    margin-bottom: 30px;
    font-family: "Sora", sans-serif;
    font-style: normal;
    font-weight: 700;
    font-size: 60px;
    line-height: 70px;
}

.hero__info hr {
    margin-bottom: 30px;
    width: 210px;
    color: #3881a9;
    background-color: #3881a9;
    height: 2px;
    border: none;
}

@keyframes bganimation {
    50% {
        background-position-x: 700px;
    }
}

.hero__info {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    flex-direction: column;
}

.hero__description {
    max-width: 800px;
    font-size: 22px;
    font-weight: 400;
    line-height: 28px;
    font-family: play;
    color: #797979;

}

#tabm h1 {
    text-align: center;
}

/* contact us */
.contact__us {
    background-color: rgba(20, 20, 20, 0.5647058824);
    background-blend-mode: color;
    background-size: cover;
    padding: 120px 0;
}

.contact__us.data--engineering {
    background-image: url('{{ asset('web/images/contact-bg.jpg') }}');


}

.contact__us.data--visualization {
    background-image: url('{{ asset('web/images/data-visualization.webp') }}');

}

.contact__us.data--analytic {
    background-image: url('{{ asset('web/images/data-analytic.webp') }}');


}

.contact__us-content {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align: center;
}

.contact__us-title {
    color: #fff;
    margin-bottom: 65px;
    line-height: 130%;
    max-width: 1100px;
    margin-inline: auto;
}

.contact__us-button {
    font-size: 18px;
    font-weight: 400;
    line-height: 27px;
    border-radius: 0;
    padding: 14px 28px;
    color: #fff;
    width: auto;
    margin-inline: auto;
    background-color: #3881a9;
    border-radius: 10px;
}

.contact__us-button:hover {
    background-color: #3989b5;
}


/* dataanlytic dot */

#values h3::before {
    content: "•";
    color: #3881a9;
    font-weight: bold;
    display: inline-block;
    width: 1em;
    margin-left: -1em;
}

#values .headp {
    font-size: 20px;
    max-width: 800px;
    margin: auto;
    margin-bottom: 60px;

}

#values .joinusbox {
    border: none;
    box-shadow: none;
}

#banifit .headp {
    font-size: 20px;
    max-width: 800px;
    margin: auto;
    margin-bottom: 60px;

}

#banifit .joinusbox {
    border: none;
    box-shadow: none;

}

#banifit .joinusbox h3 {
    margin-top: 17px;
}

@media only screen and (max-width: 600px) {
    .tabs {
        padding: 5px;
    }

    .hero__info .mainheadingtext {
        text-align: left;

    }

}
</style>
<section id="tabm">
    <h4 class="mainheadingtext">Services That We Offer</h4>
    <div class="tabs">

        <input type="radio" id="tab1" name="tab-control" checked>
        <input type="radio" id="tab2" name="tab-control">
        <input type="radio" id="tab3" name="tab-control">
        <!-- <input type="radio" id="tab4" name="tab-control"> -->
        <ul>
            <li title="Features"><label for="tab1" role="button"><svg viewBox="0 0 24 24">
                        <path
                            d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z" />
                    </svg><br><span>Data analytics</span></label></li>
            <li title="Delivery Contents"><label for="tab2" role="button"><svg viewBox="0 0 24 24">
                        <path
                            d="M2,10.96C1.5,10.68 1.35,10.07 1.63,9.59L3.13,7C3.24,6.8 3.41,6.66 3.6,6.58L11.43,2.18C11.59,2.06 11.79,2 12,2C12.21,2 12.41,2.06 12.57,2.18L20.47,6.62C20.66,6.72 20.82,6.88 20.91,7.08L22.36,9.6C22.64,10.08 22.47,10.69 22,10.96L21,11.54V16.5C21,16.88 20.79,17.21 20.47,17.38L12.57,21.82C12.41,21.94 12.21,22 12,22C11.79,22 11.59,21.94 11.43,21.82L3.53,17.38C3.21,17.21 3,16.88 3,16.5V10.96C2.7,11.13 2.32,11.14 2,10.96M12,4.15V4.15L12,10.85V10.85L17.96,7.5L12,4.15M5,15.91L11,19.29V12.58L5,9.21V15.91M19,15.91V12.69L14,15.59C13.67,15.77 13.3,15.76 13,15.6V19.29L19,15.91M13.85,13.36L20.13,9.73L19.55,8.72L13.27,12.35L13.85,13.36Z" />

                    </svg><br><span>Data visualization</span></label></li>

            <li title="Shipping"><label for="tab3" role="button">
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M3,4A2,2 0 0,0 1,6V17H3A3,3 0 0,0 6,20A3,3 0 0,0 9,17H15A3,3 0 0,0 18,20A3,3 0 0,0 21,17H23V12L20,8H17V4M10,6L14,10L10,14V11H4V9H10M17,9.5H19.5L21.47,12H17M6,15.5A1.5,1.5 0 0,1 7.5,17A1.5,1.5 0 0,1 6,18.5A1.5,1.5 0 0,1 4.5,17A1.5,1.5 0 0,1 6,15.5M18,15.5A1.5,1.5 0 0,1 19.5,17A1.5,1.5 0 0,1 18,18.5A1.5,1.5 0 0,1 16.5,17A1.5,1.5 0 0,1 18,15.5Z" />
                    </svg><br><span>Data engineering</span></label>
            </li>
            <!-- <li title="Returns"><label for="tab4" role="button"><svg viewBox="0 0 24 24">
                        <path
                            d="M11,9H13V7H11M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M11,17H13V11H11V17Z" />
                    </svg><br><span>Returns</span></label></li> -->
        </ul>

        <div class="slider">
            <div class="indicator"></div>
        </div>


        <div class="content">

            <section class="mainsection">
                <!-- headersection -->
                <div class="hero services--hero" id="hero">

                    <div class="hero__content">
                        <div class="hero__info" id="hero--info">
                            <h3 class="mainheadingtext">Data analytics service</h3>
                            <hr>
                            <p class="hero__description">Data Integrity Services (DIS) offers a range of data processing
                                and analysis solutions that are beneficial for examining various types of data and
                                making informed decisions on different aspects of the business. Through our
                                collaborative partnership, clients can gain new perspectives on their operations and
                                business development. Moreover, they can access premium-quality data analysis with
                                minimal effort and at a reasonable cost.





                            </p>
                        </div>
                    </div>

                </div>
                <!-- end header section -->
                <!-- contact setcio -->

                <div class="contact__us data--analytic">
                    <div class="container">
                        <div class="contact__us-content" id="contact-us-header">
                            <h3 class="contact__us-title ">
                                Contact our experts to learn about our services, analyze and visualize your data, and
                                create a customized BI solution that will help your business grow while saving you money
                                and time.
                            </h3>
                            <a href="/contact-us" class="contact__us-button">Contact us</a>
                        </div>
                    </div>
                </div>
                <!-- contact end -->

                <!-- data anlyytcs -->

                <div id="values" class="dataworldpart">
                    <div class="containe">
                        <div class="row mb-75">
                            <div class="col-lg-12 text-center">
                                <h4 class="mainheadingtext" style="margin-bottom: 60px;">
                                    Spheres of business intelligence applications</h4>
                                <p class="headp">
                                    Data analytics is a multifaceted process that involves the use of
                                    diverse tools and
                                    practices. At Data Integrity Services (DIS), we provide our customers with a
                                    comprehensive range of services in this field, including consultancy, data
                                    management, mapping, quality assessment, and more. Our clients can benefit from
                                    accessing all the most popular services in the data analytics niche in one place.




                                </p>
                            </div>
                            <div class="row mb-4">

                                <div class="col-lg-4 mb-4">
                                    <div class="joinusbox" style="height:100%;">
                                        <!-- <div><img src="{{ asset('web/images/bicon-1.svg') }}" class="iconjoin"></div> -->
                                        <h3>Data management</h3>
                                        <p>Data Integrity Services (DIS) has a team of top experts who have worked for
                                            years in data management, including data collection, storage, protection,
                                            and organization.</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 mb-4">
                                    <div class="joinusbox" style="height:100%;">
                                        <!-- <div><img src="{{ asset('web/images/bicon-2.svg') }}" class="iconjoin"></div> -->
                                        <h3>Data warehousing</h3>
                                        <p>Our clients can rely on us to provide proper data warehousing, including the
                                            integration of information received from various sources into a dependable
                                            database.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <div class="joinusbox" style="height:100%;">
                                        <!-- <div><img src="{{ asset('web/images/bicon-3.svg') }}" class="iconjoin"></div> -->
                                        <h3>Data transformation</h3>
                                        <p>We convert data from any possible format so that it becomes readable and
                                            compatible for analysis.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <div class="joinusbox" style="height:100%;">
                                        <!-- <div><img src="{{ asset('web/images/bicon-4.svg') }}" class="iconjoin"></div> -->
                                        <h3>Data mapping</h3>
                                        <p>Our experts ensure a seamless process of data homogenizing by matching fields
                                            in different databases to improve the management, integration, and migration
                                            of data.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <div class="joinusbox" style="height:100%;">
                                        <!-- <div><img src="{{ asset('web/images/bicon-5.svg') }}" class="iconjoin"></div> -->
                                        <h3>Data quality</h3>
                                        <p>We assess data quality with various parameters to guarantee that the
                                            information our clients receive meets all data quality standards.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <div class="joinusbox" style="height:100%;">
                                        <!-- <div><img src="{{ asset('web/images/bicon-6.svg') }}" class="iconjoin"></div> -->
                                        <h3>Data analytics as a service</h3>
                                        <p>Data Integrity Services (DIS) provides our clients with all the advantages of
                                            a DAaaS (Data Analytics as a Service) platform, which is a fast-growing
                                            niche that is expanding up to 30% in the next following years.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <div class="joinusbox" style="height:100%;">
                                        <!-- <div><img src="{{ asset('web/images/bicon-6.svg') }}" class="iconjoin"></div> -->
                                        <h3>Augmented analytics</h3>
                                        <p>We implement machine learning and artificial intelligence technologies to
                                            enhance the efficiency and precision of the entire data analysis procedure.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <div class="joinusbox" style="height:100%;">
                                        <!-- <div><img src="{{ asset('web/images/bicon-6.svg') }}" class="iconjoin"></div> -->
                                        <h3>Data modernization</h3>
                                        <p>Data Integrity Services (DIS) helps customers complete error-free data
                                            modernization of any complexity, including transferring data from legacy
                                            databases to modern ones, including cloud technologies..</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <div class="joinusbox" style="height:100%;">
                                        <!-- <div><img src="{{ asset('web/images/bicon-6.svg') }}" class="iconjoin"></div> -->
                                        <h3>Data advisory and consulting</h3>
                                        <p>Our consultancy and advisory services help companies properly use the
                                            information in their business activities since only a few organizations know
                                            how to apply the data received from DA in their business routine..</p>
                                    </div>
                                </div>




                            </div>
                        </div>
                        <!-- data analytics end -->


            </section>
            <section class="mainsection">
                <!-- headersection -->
                <div class="hero services--hero" id="hero">

                    <div class="hero__content">
                        <div class="hero__info" id="hero--info">
                            <h1 class="hero__title">Data visualization services</h1>
                            <hr>
                            <p class="hero__description">Skilled data engineers of our company leverage a range of data
                                visualization tools to evaluate market trends and analyze business performance.
                            </p>
                        </div>
                    </div>

                </div>
                <!-- end header section -->
                <!-- contact setcio -->

                <div class="contact__us data--visualization">
                    <div class="container">
                        <div class="contact__us-content" id="contact-us-header">
                            <h3 class="contact__us-title ">
                                Contact our experts to learn about our services, analyze and visualize your data, and
                                create a customized BI solution that will help your business grow while saving you money
                                and time.
                            </h3>
                            <a href="/contact-us" class="contact__us-button">Contact us</a>
                        </div>
                    </div>
                </div>
                <!-- contact end -->

                <!-- data anlyytcs -->

                <div id="values" style="padding-top:60px">
                    <div class="containe">
                        <div class="row mb-75">
                            <div class="col-lg-12 text-center">
                                <h4 class="mainheadingtext" style="margin-bottom: 60px;">
                                    Data visualization services</h4>
                                <p class="headp">
                                    In the early stages of business establishment, dealing with large volumes of data
                                    can be challenging, causing project growth delays. At Data Integrity Services (DIS),
                                    we offer data visualization services to help manage and extract value from complex
                                    data. Our suite includes the following.




                                </p>
                            </div>
                            <div class="row mb-4">

                                <div class="col-lg-4 mb-4">
                                    <div class="joinusbox" style="height:100%;">
                                        <!-- <div><img src="{{ asset('web/images/bicon-1.svg') }}" class="iconjoin"></div> -->
                                        <h3>Data visualization consulting</h3>
                                        <p>Our data consultants help businesses select valuable data to optimize costs
                                            and find new solutions.</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 mb-4">
                                    <div class="joinusbox" style="height:100%;">
                                        <!-- <div><img src="{{ asset('web/images/bicon-2.svg') }}" class="iconjoin"></div> -->
                                        <h3>Data visualization implementation</h3>
                                        <p>Our expert team can implement reliable data visualization solutions that
                                            extract the right data and provide new insights on the needs of the target
                                            audience..</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <div class="joinusbox" style="height:100%;">
                                        <!-- <div><img src="{{ asset('web/images/bicon-3.svg') }}" class="iconjoin"></div> -->
                                        <h3>Data platform development</h3>
                                        <p>We develop customizable data visualization platforms that integrate data from
                                            various sources, create a centralized repository, provide data protection,
                                            and improve reporting and visualization.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <div class="joinusbox" style="height:100%;">
                                        <!-- <div><img src="{{ asset('web/images/bicon-4.svg') }}" class="iconjoin"></div> -->
                                        <h3>Custom reports and dashboard development</h3>
                                        <p>We create tailored dashboards and reports that show key metrics for growing
                                            your company and improving business analytics..</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <div class="joinusbox" style="height:100%;">
                                        <!-- <div><img src="{{ asset('web/images/bicon-5.svg') }}" class="iconjoin"></div> -->
                                        <h3>Data analytics and visualization optimization</h3>
                                        <p>Our team of data engineers can optimize existing data management frameworks
                                            by improving processes or removing the dependency on manual data entry.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <div class="joinusbox" style="height:100%;">
                                        <!-- <div><img src="{{ asset('web/images/bicon-6.svg') }}" class="iconjoin"></div> -->
                                        <h3>Data management</h3>
                                        <p>Our team includes experienced professionals with extensive expertise in the
                                            field of data management, covering various areas such as data collection,
                                            storage, protection, and organization.</p>
                                    </div>
                                </div>




                            </div>
                        </div>
                        <!-- data analytics end -->

                    </div>
                </div>


                <!-- ------data visulization benivits -->
                <div id="banifit" class="">
                    <div class="containe">
                        <div class="row mb-75">
                            <div class="col-lg-12 text-center">
                                <h4 class="mainheadingtext" style="margin-bottom: 60px;">
                                    Data visualization benefits</h4>
                                <p class="headp">
                                    Sophisticated data analytics and visualization techniques are highly effective in
                                    enhancing business performance and forecasting potential risks. The following are
                                    main benefits of visualization.








                                </p>
                            </div>
                            <div class="row mb-4">

                                <div class="col-lg-4 mb-4">
                                    <div class="joinusbox" style="height:100%;">
                                        <div><img src="{{ asset('web/images/bicon-1.svg') }}" class="iconjoin"></div>
                                        <h3>To assist in making business decisions</h3>
                                        <p> Data visualization is an effective tool for decision-makers as it simplifies
                                            the explanation of ideas and aids in making informed choices.</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 mb-4">
                                    <div class="joinusbox" style="height:100%;">
                                        <div><img src="{{ asset('web/images/bicon-2.svg') }}" class="iconjoin"></div>
                                        <h3>To provide a clear understanding of business performance</h3>
                                        <p>By presenting data in a report, it becomes easier to evaluate the current
                                            status and future prospects of a business.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <div class="joinusbox" style="height:100%;">
                                        <div><img src="{{ asset('web/images/bicon-3.svg') }}" class="iconjoin"></div>
                                        <h3>To enhance organizational productivity</h3>
                                        <p>By using data visualization, it is easy to identify weak points within
                                            departments or teams and predict future inefficiencies.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <div class="joinusbox" style="height:100%;">
                                        <div><img src="{{ asset('web/images/bicon-4.svg') }}" class="iconjoin"></div>
                                        <h3>To quickly recognize patterns and reasons</h3>
                                        <p>Instead of sifting through vast amounts of data, data visualization enables
                                            information to be processed and analyzed quickly, making it easier to
                                            identify trends and root causes.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <div class="joinusbox" style="height:100%;">
                                        <div><img src="{{ asset('web/images/bicon-5.svg') }}" class="iconjoin"></div>
                                        <h3>To discover valuable insights for your business</h3>
                                        <p>ENGLISH: To discover valuable insights for your business Data visualization
                                            has the potential to reveal captivating discoveries and prospects for
                                            business expansion while furnishing a rationale to support them.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <div class="joinusbox" style="height:100%;">
                                        <div><img src="{{ asset('web/images/bicon-6.svg') }}" class="iconjoin"></div>
                                        <h3>To tell stories through data</h3>
                                        <p>Data, visuals, and narrative can be combined to create a compelling story
                                            that helps key decision-makers focus on the most important factors.</p>
                                    </div>
                                </div>




                            </div>
                        </div>
                        <!-- data analytics end -->

                    </div>
                </div>
            </section>
            <section class="mainsection">
                <!-- headersection -->
                <div class="hero services--hero" id="hero">

                    <div class="hero__content">
                        <div class="hero__info" id="hero--info">
                            <h1 class="hero__title">Data engineering services</h1>
                            <hr>
                            <p class="hero__description">At Data Integrity Services (DIS), we offer state-of-the-art
                                data engineering solutions that can elevate your business to the next level. Our team of
                                experts will design a top-notch infrastructure and streamline your data flow to extract
                                valuable insights, boost productivity, and enhance overall performance. Additionally,
                                our cloud data engineers can efficiently transfer your enterprise data in record time.
                            </p>
                        </div>
                    </div>

                </div>
                <!-- end header section -->
                <!-- contact setcio -->

                <div class="contact__us data--engineering">
                    <div class="container">
                        <div class="contact__us-content" id="contact-us-header">
                            <h3 class="contact__us-title ">
                                Contact our experts to learn about our services, analyze and visualize your data, and
                                create a customized BI solution that will help your business grow while saving you money
                                and time.
                            </h3>
                            <a href="/contact-us" class="contact__us-button">Contact us</a>
                        </div>
                    </div>
                </div>
                <!-- contact end -->

                <!-- data anlyytcs -->

                <div id="values" class="dataworldpart">
                    <div class="containe">
                        <div class="row mb-75">
                            <div class="col-lg-12 text-center">
                                <h4 class="mainheadingtext" style="margin-bottom: 60px;">
                                    Data engineering solutions we deliver</h4>
                                <p class="headp">
                                    Data engineering involves handling vast amounts of unprocessed data, constructing
                                    and sustaining data pipelines to merge information from diverse sources, and
                                    organizing it into a single location for thorough business analysis.

                                    By transforming data into a usable format for data scientists to analyze, data
                                    engineers provide businesses with precise analytics that allow for fact-based
                                    decision-making. Accurate data processing enables companies to tackle intricate
                                    business problems and enhance the development of new products and services while
                                    minimizing costs.




                                </p>
                            </div>
                            <div class="row mb-4">

                                <div class="col-lg-4 mb-4">
                                    <div class="joinusbox" style="height:100%;">
                                        <!-- <div><img src="{{ asset('web/images/bicon-1.svg') }}" class="iconjoin"></div> -->
                                        <h3>Building Data Architecture</h3>
                                        <p>Our company provides customizable and easily accessible data architecture
                                            solutions. Our framework combines information about how data flows within a
                                            specific organization. Our data architecture solutions guide businesses
                                            towards achieving their goals.</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 mb-4">
                                    <div class="joinusbox" style="height:100%;">
                                        <!-- <div><img src="{{ asset('web/images/bicon-2.svg') }}" class="iconjoin"></div> -->
                                        <h3>Data Lake Implementation</h3>
                                        <p>Data Lakes manage the storage of large amounts of raw, unprocessed data until
                                            it is used by analytics applications. We offer Data Lake implementation,
                                            which allows businesses to increase productivity and growth without
                                            additional effort.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <div class="joinusbox" style="height:100%;">
                                        <!-- <div><img src="{{ asset('web/images/bicon-3.svg') }}" class="iconjoin"></div> -->
                                        <h3>Data Warehouse Implementation</h3>
                                        <p>We create data warehouses that consolidate all of the company's information
                                            from multiple sources in a single repository, separate from the operational
                                            database. This information is then used to generate analytical insights.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <div class="joinusbox" style="height:100%;">
                                        <!-- <div><img src="{{ asset('web/images/bicon-4.svg') }}" class="iconjoin"></div> -->
                                        <h3>Cloud Data Migration</h3>
                                        <p>Cloud migration can be a challenging process, but it is essential in modern
                                            business. Our cloud data engineers will set up your data lake and quickly
                                            move your enterprise data at an affordable cost.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <div class="joinusbox" style="height:100%;">
                                        <!-- <div><img src="{{ asset('web/images/bicon-5.svg') }}" class="iconjoin"></div> -->
                                        <h3>Data Management and Compliance</h3>
                                        <p>Data management and compliance are crucial to ensure that all data is secured
                                            and adheres to government regulations and business rules. Our team
                                            guarantees that your data is adequately protected.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <div class="joinusbox" style="height:100%;">
                                        <!-- <div><img src="{{ asset('web/images/bicon-6.svg') }}" class="iconjoin"></div> -->
                                        <h3>Data Analytics and Visualization</h3>
                                        <p>Our data engineering technologies utilize these tools to analyze and process
                                            large amounts of information and present it in an easy-to-understand way.
                                            This enables businesses to access data that can improve their operations</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <div class="joinusbox" style="height:100%;">
                                        <!-- <div><img src="{{ asset('web/images/bicon-6.svg') }}" class="iconjoin"></div> -->
                                        <h3>Data Engineering Consulting</h3>
                                        <p>Our expert team of engineers is fundamental to successful data management.
                                            Our data engineers design and manage data to prepare it for reporting,
                                            leading to better results and data-driven decisions.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <div class="joinusbox" style="height:100%;">
                                        <!-- <div><img src="{{ asset('web/images/bicon-6.svg') }}" class="iconjoin"></div> -->
                                        <h3>Data Strategy and Roadmap</h3>
                                        <p>We can help you to develop a data strategy and roadmap, which outlines the
                                            steps needed to achieve your data-related goals and objectives.</p>
                                    </div>
                                </div>




                            </div>
                        </div>
                        <!-- data analytics end -->


            </section>

        </div>
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