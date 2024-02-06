@include('layouts.header')

<style>
.hero {
    padding-top: 100px;
    padding-bottom: 100px;
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



/* contat us */

.contact__us {
    background-color: rgba(20, 20, 20, 0.5647058824);
    background-blend-mode: color;
    background-size: cover;
    padding: 120px 0;
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

.dataworldpart {
    padding: 75px 0px;
}


/* latestinsights  */

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

#databenifits .headp,
#dataexperties .headp {
    font-size: 20px;
    max-width: 800px;
    margin: auto;
    margin-bottom: 60px;

}

/* -----insights */
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
</style>

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
<!-- --- header section -->
<section>

    <div class="hero services--hero" id="hero">

        <div class="container">
            <div class="hero__content">

                <div class="hero__info" id="hero--info">
                    <h3 class="mainheadingtext" style="text-align:left;">Business intelligence</h3>
                    <hr>
                    <p class="hero__description">At Data Integrity Services (DIS), we provide an extensive array of
                        business intelligence services, comprising BI development, BI consulting, custom development, BI
                        support and maintenance, and self-service solution creation, among others. Our experts have
                        helped numerous clients enhance their operational processes and attain fresh business insights.
                        To learn more about our offerings, please refer to the information below.





                    </p>
                </div>
            </div>

        </div>

    </div>
    <div class="contact__us data--analytic">
        <div class="container">
            <div class="contact__us-content" id="contact-us-header">
                <h3 class="contact__us-title ">
                    Contact our experts to learn about our services, analyze and visualize your data, and
                    create a customized BI solution that will help your business grow while saving you money
                    and time.
                </h3>
                <a href="" class="contact__us-button">Contact us</a>
            </div>
        </div>
    </div>

</section>


<section class="dataworldpart" style=" background: #e5effa;">
    <div class="container">
        <div class="row" id="data-w">
            <div class="col-lg-12 text-center">
                <h4 style="padding-bottom:50px; max-width:600px; margin:auto;" class="mainheadingtext">Data is one of
                    the
                    most valuable
                    asset</h4>
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

        <div class="row mb-4" id="data-s">
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


<div class="services__main">
    <div class="container">

    </div>
</div>
<section class="buildfaster pt-25" id="latesinsight">
    <div class="container">

        <div class="row text-center">
            <h4 class="wemake  mainheadingtext"> Latest Insights</h4>
            <p class="pb-3 " style="font-size:18px;">Bringing innovation across all industries</p>
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

    </div>
</section>

<section id="databenifits">
    <div class="container">
        <div class="row mb-75">
            <div class="col-lg-12 text-center">
                <h4 class="mainheadingtext" style="margin-bottom: 30px;">
                    Benefits of business intelligence and analytics</h4>
                <p class="headp">
                    When deployed effectively, business intelligence solutions offer a multitude of benefits to business
                    owners, including enhanced organizational efficiency, dependable data, improved customer experience,
                    and high-quality data analysis. In the sections that follow, we will outline some of the most common
                    advantages of adopting a business intelligence approach.








                </p>
            </div>
        </div>

        <div class="row mb-4">

            <div class="col-lg-6 mb-4">
                <div class="joinusbox" style="height:100%;">
                    <div><img src="{{ asset('web/images/bicon-1.svg') }}" class="iconjoin"></div>
                    <h3>Enhanced Organizational Efficiency</h3>
                    <p> BI solutions can significantly improve the accuracy of business development scenarios and enable
                        companies to allocate their resources more efficiently by processing real-time and historical
                        data.</p>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="joinusbox" style="height:100%;">
                    <div><img src="{{ asset('web/images/bicon-2.svg') }}" class="iconjoin"></div>
                    <h3>Structured Reliable Data</h3>
                    <p>Rather than utilizing multiple software tools for disparate data sources, business intelligence
                        and analytics solutions amalgamate, structure, and visualize data for further analysis.</p>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="joinusbox" style="height:100%;">
                    <div><img src="{{ asset('web/images/bicon-3.svg') }}" class="iconjoin"></div>
                    <h3>Improved Customer Satisfactio</h3>
                    <p>BI technologies quickly identify any breaches in customer service and offer ways to rectify them
                        once implemented, resulting in more satisfied customers.</p>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="joinusbox" style="height:100%;">
                    <div><img src="{{ asset('web/images/bicon-4.svg') }}" class="iconjoin"></div>
                    <h3>Fast and Quality Data Analysis</h3>
                    <p>BI platforms can rapidly process substantial volumes of data, enabling business owners to
                        promptly locate relevant information and make informed decisions.</p>
                </div>
            </div>





        </div>
    </div>
</section>
<style>
#alllist {
    display: flex;
    justify-content: center;
    align-items: center;
    background: #000;
    min-height: 100vh;
}

.list {
    position: relative;
}

.list h2 {
    color: black;
    font-weight: 700;
    letter-spacing: 1px;
    margin-bottom: 10px;
}

.list ul {
    position: relative;
}

.list ul li {
    position: relative;
    left: 0;
    color: #797979;
    list-style: none;
    margin: 4px 0;
    border-left: 2px solid #43a0d3;
    transition: 0.5s;
    cursor: pointer;
}

.list ul li:hover {
    left: 10px;
}

.list ul li span {
    position: relative;
    padding: 8px;
    font-size: 20px;
    padding-left: 12px;
    display: inline-block;
    z-index: 1;
    transition: 0.5s;
}

.list ul li:hover span {
    color: white;
}

.list ul li:before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: #43a0d3;
    transform: scaleX(0);
    transform-origin: left;
    transition: 0.5s;
}

.list ul li:hover:before {
    transform: scaleX(1);
}
</style>
<section id="dataexperties">
    <div class="container">
        <div class="row mb-75">
            <div class="col-lg-12 text-center">
                <h4 class="mainheadingtext" style="margin-bottom: 30px;">
                    Data visualization benefits</h4>
                <p class="headp">
                    Sophisticated data analytics and visualization techniques are highly effective in
                    enhancing business performance and forecasting potential risks. The following are
                    main benefits of visualization.
                </p>
            </div>
        </div>
        <div id="alllis">


            <div class="row mb-4">
                <div class="col-lg-6">

                    <div class="list">
                        <h2>Our <span style="color:#43a0d3;">expertise</span></h2>
                        <ul>
                            <li><span>DCentralized Data Repository for Financial and Transactional Information.</span>
                            </li>
                            <li><span>Self-Service Reporting, Dashboards and Analytics.</span></li>
                            <li><span>Centralized Data Repository for Financial and Transactional Information.</span>
                            </li>
                            <li><span>Replace Legacy or Deficient Technology.</span></li>
                            <li><span>Build Optimized Data Sets for Specific and Targeted Needs</span></li>
                            <li><span>Enable Near Real-time Analytics with Enterprise Data Services.</span></li>
                            <li><span>Design of Business Intelligence and Information Delivery Systems.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="list">
                        <h2>Data <span style="color:#43a0d3;">Management</span></h2>
                        <ul>
                            <li><span>Data Conversion</span></li>
                            <li><span>Data Mapping</span></li>
                            <li><span>Data Cleaning</span></li>
                            <li><span>Data Discovery</span></li>
                            <li><span>Data Analysis and Validation</span></li>
                            <li><span>Data Migration</span></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="row mb-4">

                <div class="col-lg-12">

                    <div class="list">
                        <h2>Data <span style="color:#43a0d3;">Warehousing</span></h2>
                        <ul>
                            <li><span>Cloud Data Warehouses</span></li>
                            <li><span>Snowflake</span></li>
                            <li><span>On-premise to Cloud Migration Solutions.</span></li>
                            <li><span>On-premise and Cloud DataWarehouse Architecture Solutions.</span></li>
                            <li><span>DataWarehouse that supports self-service reporting, Dashboards and
                                    analytics.</span></li>
                            <li><span>Microsoft Azure (Azure SQL Database, Azure AD, Subscriptions, Resource Groups,
                                    Azure Data Lake, Azure Blob Storage, Azure Synapse, Azure Analysis Services)</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="row mb-4">


                <div class="col-lg-6">

                    <div class="list">
                        <h2>Data<span style="color:#43a0d3;"> Ingestion</span></h2>
                        <ul>
                            <li><span>We implement ETL and ELT solutions</span></li>
                            <li><span>Data Engineering Tools: MS SQL Server, SQL Server Integration Services, Azure Data
                                    Factory, Azure Synapse Analytics, Azure Data bricks, Python (Pandas)</span></li>
                            <li><span>Batch Processing: Apache Spark (PySpark).</span></li>
                            <li><span>Streaming Processing: Apache Kafka.</span></li>
                            <li><span>Monitoring Tools: SQL Server Agent, Azure Data Factory Triggers, Apache
                                    Airflow.</span></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="list">
                        <h2>Data<span style="color:#43a0d3;"> Analytics</span></h2>
                        <ul>
                            <li><span>We provide in-depth analytics for data to provide useful business insights.</span>
                            </li>
                            <li><span>Analysis Tools : SQL Server, MySQL, Postgres SQL, Snowflake Cloud SQL, Spark
                                    SQL.</span></li>
                            <li><span>Reporting Tools: MS Power BI, SQL Server Reporting Services, Tableau, QlikView,
                                    Qlik Sense.</span></li>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

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