@include('layouts.header')

<style>
#wecareheader h3 {
    color: white;
    padding: 20px 4px;
}

.joinusbox {
    border: none;
    box-shadow: none;
    background: #f4f8fc;


}

.weculture {
    padding: 90px 0px 200px;
}

.wecareimgfull img {
    margin-bottom: 100px;
}

.hero {



    flex-wrap: wrap;

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

@keyframes bganimation {
    50% {
        background-position-x: 700px;
    }
}

.ethichead {
    width: 30%;
}

.ethicp {
    width: 70%;

}

.ethichead h4 {

    color: var(--gray-900, #101828);
    text-align: center;
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
    margin-bottom: 50px;
}


@media only screen and (max-width: 600px) {
    #wecareheader h3 {
        font-size: 16px;
        line-height: 28px;
    }

    .weculture p {
        text-align: left;
    }

    .weculture {
        padding: 0;
    }

    .ethicdiv {

        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .ethichead {
        width: 100%;
    }

    .ethicp {
        width: 100%;
    }

    @keyframes bganimation {
        50% {
            background-position-x: 300px;
        }
    }
}
</style>
<div id="wecareheader" class="bannerslider wecarevid">
    <div class="captionheader shadownone lefttextcap nohome" style=" background-color: rgba(0, 0, 0, 0.5);">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <h1>We <span>Care</span></h1>
                    <h3>Our mission is to empower businesses with intelligent insights and
                        data-driven decision-making
                        tools, enabling them to achieve their strategic objectives and drive growth. We strive to
                        deliver superior business intelligence services that enable our clients to stay ahead of their
                        competition, mitigate risks, and capitalize on new opportunities. Our goal is to become the
                        go-to partner for businesses seeking actionable insights and intelligent solutions.</h3>
                </div>
            </div>
        </div>
    </div>
    <video width="100%" height="100%" autoplay muted loop>
        <source src="{{ asset('web/images/wecare-vid.mp4')}}" type="video/mp4">
    </video>
</div>
<!-- <section class="wecarepart">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <p class="">Our mission is to empower businesses with intelligent insights and data-driven
                    decision-making tools, enabling them to achieve their strategic objectives and drive growth. We
                    strive to deliver superior business intelligence services that enable our clients to stay ahead of
                    their competition, mitigate risks, and capitalize on new opportunities. Our goal is to become the
                    go-to partner for businesses seeking actionable insights and intelligent solutions.”</p>
            </div>
        </div>
    </div>
</section> -->
<section class="weculture">
    <div class="container">
        <div class="row mb-75">
            <div class="col-lg-12 ">
                <h4 class="wemake">Our Work Culture</h4>
                <p style="text-align:center">We understand that every business is unique, so our solutions are tailored
                    to the specific needs of a
                    domain. Teamwork, innovation, respect, as well as client-centric force are the core of our success
                    and solutions. </p>
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
                <h4 class="wemake">Why Choose Us?</h4>
            </div>
            <div class="col-lg-8">
                <p>We leverage advanced analytics platforms to extract insights from data, and we employ powerful
                    visualization tools to communicate those insights in an intuitive way. Our team is proficient in a
                    variety of programming languages, allowing us to develop custom solutions tailored to the unique
                    needs of each client. Ultimately, our goal is to empower our clients with the information they need
                    to make data-driven decisions that drive their business forward.



                </p>
            </div>
        </div>
        <div class="row mb-75">

            <div class="row mb-4">

                <div class="col-lg-4 mb-4">
                    <div class="joinusbox" style="height:100%;">
                        <div><img src="{{ asset('web/images/bicon-1.svg') }}" class="iconjoin"></div>
                        <h3>Planning</h3>
                        <p>We plan our work in a way to deliver the specified scope on time and are capable of working
                            with tight schedules.</p>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="joinusbox" style="height:100%;">
                        <div><img src="{{ asset('web/images/bicon-2.svg') }}" class="iconjoin"></div>
                        <h3>Risk management</h3>
                        <p>We minimize management efforts on the customer’s side while providing a high level of
                            transparency over the development process and proactive risk management.</p>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="joinusbox" style="height:100%;">
                        <div><img src="{{ asset('web/images/bicon-3.svg') }}" class="iconjoin"></div>
                        <h3>Monitoring</h3>
                        <p>We regularly measure project health with KPIs to ensure the project’s progress and adjust the
                            development process if needed.</p>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="joinusbox" style="height:100%;">
                        <div><img src="{{ asset('web/images/bicon-4.svg') }}" class="iconjoin"></div>
                        <h3>Customization</h3>
                        <p>We offer customizable business intelligence solutions tailored to the unique needs of each
                            client. This ensures that clients receive solutions that are specific to their industry,
                            business goals, and data sources.</p>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="joinusbox" style="height:100%;">
                        <div><img src="{{ asset('web/images/bicon-5.svg') }}" class="iconjoin"></div>
                        <h3>Expertise</h3>
                        <p>Our team consists of experienced business intelligence professionals who are knowledgeable in
                            the latest technologies and trends in the industry. This expertise translates into
                            high-quality solutions and recommendations for clients.</p>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="joinusbox" style="height:100%;">
                        <div><img src="{{ asset('web/images/bicon-6.svg') }}" class="iconjoin"></div>
                        <h3>Scalability</h3>
                        <p>Our solutions are designed to scale as a client's business grows. This ensures that clients
                            can continue to use the same solutions even as their data needs change over time.</p>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="joinusbox" style="height:100%;">
                        <div><img src="{{ asset('web/images/vicon-1.svg') }}" class="iconjoin"></div>
                        <h3>Data Security</h3>
                        <p>We place a high priority on data security and use industry-standard security protocols to
                            protect client data. Clients can trust that their data is safe and secure when working with
                            our company.</p>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="joinusbox" style="height:100%;">
                        <div><img src="{{ asset('web/images/vicon-2.svg') }}" class="iconjoin"></div>
                        <h3>Customer Support</h3>
                        <p>We are dedicated to providing excellent customer support to ensure that clients are satisfied
                            with their solutions. Clients have access to ongoing support and training to ensure that
                            they are getting the most out of their business intelligence solutions.</p>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="joinusbox" style="height:100%;">
                        <div><img src="{{ asset('web/images/vicon-3.svg') }}" class="iconjoin"></div>
                        <h3>Transparency</h3>
                        <p>Our customers have constant access to our task-tracking systems, such as Jira, and a
                            knowledge base where we document all project-related work.</p>
                    </div>
                </div>





            </div>
        </div>
    </div>
</section>
<style>

</style>
<section class="wecaremakeimg hero  ">
    <div class="wecareimgfull">
        <img src="{{ asset('web/images/wecare-img01.png')}}" alt="Dis">
    </div>
    <div class="container">


        <div class="ethicdiv">
            <div class="ethichead">
                <h4 class="">Values And Ethics</h4>
            </div>
            <div class="ethicp">
                <p>We leverage advanced analytics platforms to extract insights from data, and we employ powerful
                    visualization tools to communicate those insights in an intuitive way. Our team is proficient in a
                    variety of programming languages, allowing us to develop custom solutions tailored to the unique
                    needs
                    of each client. Ultimately, our goal is to empower our clients with the information they need to
                    make
                    data-driven decisions that drive their business forward.


                </p>
            </div>
        </div>
    </div>
</section>



@include('layouts.footer')