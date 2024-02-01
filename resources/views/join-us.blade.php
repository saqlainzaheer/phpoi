@include('layouts.header')
<style>

</style>
<div class="bannerslider oneuspage">
    <div class="captionheader shadownone lefttextcap nohome">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>Join <span>Us</span></h1>
                </div>
            </div>
        </div>
    </div>
    <video width="100%" height="100%" autoplay muted loop>
        <source src="{{ ('web/images/joinus.mp4')}}" type="video/mp4">
    </video>
</div>

<section class="wecarepart">
    <div class="container">
        @if(Session::has('success'))
        <p class="alert alert-success">{{ Session::get('success')}}</p>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="list-unstyled">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-6 mx-auto text-center mb-75">
                <h4 class="mainheadingtext">Careers</h4>
                <p class="mb-5">The future of the fourth technological revolution remains uncertain, but what we do know
                    is
                    that it should stem from and be driven by people. Joining DIS means not just getting the
                    tools for future tech challenges but also becoming part of an exclusive community.
                </p>
                <a href="#current_job" class="btn btn-primary">Browse Open Positions</a>
            </div>
        </div>
        <div class="row mb-75">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12 ">
                <div class="wecarefor">
                    <img class="img1" src="{{ ('web/images/joinus-img01.jpg')}}" alt="Dis">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12 p-0">
                <div class="wecarefor">
                    <img class="img2" src="{{ ('web/images/joinus-img02.jpg')}}" alt="Dis">
                </div>
            </div>
        </div>

    </div>
    </sectio>
    <style>
    .howtojoin {
        padding: 100px 20px;
        background: #F4F8FC;
    }

    /*
    .howtojoin h4 {
        color: #fff;
    }

    a.viewall {
        text-align: right;
        color: #fff;
        text-decoration: none;
        float: right;
    }

    .howtojoin .boxmember {
        padding: 15px 30px 20px;
        background: linear-gradient(180deg,
                rgba(0, 0, 0, 0) 43.5%,
                rgba(12, 17, 21, 0.94) 100%);
        top: 0px;
        display: flex;
        flex-direction: column-reverse;
    }

    .howtojoin .boxmember .dot {
        width: 8px;
        height: 8px;
        border-radius: 4px;
        background: #00e0ce;
        display: block;
        margin-right: 10px;
    } */
    .text-kwmgk {
        font-size: 42px;
        font-family: 'Style Script', cursive;
    }

    .card.card-vxuhl {
        text-align: center;
        margin-bottom: 50px;
        color: rgba(21, 31, 39, 1);
        border-top: none;
        box-shadow: 0px 30px 32px 0px rgba(0, 0, 0, 0.1);
        border-left: none;
        padding-top: 48px;
        border-right: none;

        border-bottom: none;


        padding-bottom: 48px;
        background-color: rgba(255, 255, 255, 1);
        border-top-left-radius: 6px;
        border-top-right-radius: 6px;
        border-bottom-left-radius: 6px;
        border-bottom-right-radius: 6px;
    }

    .card {
        max-width: 700px;
    }

    #cardjoin h3 {
        font-size: 37px;
        font-weight: 600;
        color: #3881a9;
    }

    .howtojoin h4 {
        font-weight: 500;
        font-size: 37px;
        color: #3881a9;
    }

    .howtojoin p {
        padding: 0 80px;
    }

    .howtojoin .btn:hover {
        background: #4099c9;
    }

    @media only screen and (max-width: 600px) {

        .howtojoin p {
            padding: 4px;
        }

        .howtojoin h4 {
            font-size: 30px;
        }

        .card.card-vxuhl {
            box-shadow: none;
            margin-bottom: 0px;
            padding-bottom: 0;
        }

        /* .wecarepart p {
            font-size: 42px;
        } */
        .howtojoin .owl-dots {
            /* display: block; */
            gap: 10px;
            display: flex;
            justify-content: center;
            margin: 15px 0;
        }

        .howtojoin .owl-dots .owl-dot {
            width: 15px;
            height: 15px;
            background: grey;
            border-radius: 20px;
            opacity: 0.5;

        }

        .howtojoin .owl-dots button.owl-dot.active {

            opacity: 1;
        }

        #last {
            gap: 15px;
        }
    }
    </style>
    <section class="howtojoin">
        <div class="joinnav">

            <div class="container">
                <div class="row mb-75" style="text-align:center;">

                    <h4>How to become a member of DIS?</h4>
                    <p id="howtojoinp">Excited to unleash and refine your talents at DIS? We're here to guide you
                        through
                        each step of
                        the application process, paving the way for you to seamlessly transition into a valued member of
                        the DIS team.</p>


                </div>
            </div>
            <div class="owl-carousel owl-theme" id="carousel1">
                <div class="item">
                    <div id="cardjoin" class="card card-vxuhl">
                        <span class="text text-align-center text-kwmgk">
                            Level 1
                        </span>

                        <h3 class="text text-align-center text-rz3fg">


                            Your application

                        </h3>
                        <div class="ProseMirror">
                            <p>You found an opportunity that suits you and your abilities? Perfect! Use our application
                                form
                                to send us your resume and credentials. Once we received your documents, you will get a
                                confirmation via email..
                            </p>
                        </div>

                    </div>



                </div>
                <div class="item">
                    <div id="cardjoin" class="card card-vxuhl">
                        <span class="text text-align-center text-kwmgk">
                            Level 2
                        </span>

                        <h3 class="text text-align-center text-rz3fg">


                            Our reply

                        </h3>
                        <div class="ProseMirror">
                            <p>Thank you for submitting your application. We will carefully review your credentials and
                                aim
                                to get back to you at the earliest. If your profile aligns with our requirements, we'll
                                reach out to schedule an interview.
                            </p>
                        </div>

                    </div>



                </div>
                <div class="item">
                    <div id="cardjoin" class="card card-vxuhl">
                        <span class="text text-align-center text-kwmgk">
                            Level 3
                        </span>

                        <h3 class="text text-align-center text-rz3fg">


                            Your interview
                        </h3>
                        <div class="ProseMirror">
                            <p>You founCurious to know if we're the right fit for each other? The interview is the
                                perfect
                                opportunity to explore alignment with your expectations, discuss job requirements, and
                                delve
                                into the workplace environment. Plus, if multiple DIS companies catch your interest,
                                you're
                                welcome to participate in several interviews!
                            </p>
                        </div>

                    </div>



                </div>
                <div class="item">
                    <div id="cardjoin" class="card card-vxuhl">
                        <span class="text text-align-center text-kwmgk">
                            The Final
                        </span>

                        <h3 class="text text-align-center text-rz3fg">


                            You at DIS
                        </h3>
                        <div class="ProseMirror">
                            <p>Curious to know if we're the right fit for each other? The interview is the perfect
                                opportunity to explore alignment with your expectations, discuss job requirements, and
                                delve
                                into the workplace environment. Plus, if multiple DIS companies catch your interest,
                                you're
                                welcome to participate in several interviews!
                            </p>
                        </div>

                    </div>



                </div>


                <!-- <div class="item">
                <div class="sightcorsual">
                    <img src="{{ asset('web/images/insight-img-4.png') }}">
                </div>
                <div class="boxmember">
                   
                    <h5>Assuring customer-centric approach with our data integrity services revolving around your needs
                    </h5>
                </div>
            </div> -->
            </div>
            <div style="display:flex; justify-content:center;">
                <a href="#current_job" id="hoverapply" id="apply" class="btn btn-primary">Apply Now</a>
            </div>
        </div>

    </section>
    <section class="wecarepart">
        <div class="container">
            <div class="row mb-75">
                <div class="col-lg-12 text-center">
                    <h4 class="mainheadingtext">Values that define us</h4>
                </div>
            </div>
            <div class="row mb-4" id="last">
                <div class="col-lg-4">
                    <div class="joinusbox">
                        <span> <img src="{{ ('web/images/joinus-icon01.svg')}}" class="iconjoin"></span>
                        <h3>Employee Well-being</h3>
                        <p>Fostering an inclusive and supportive work environment where everyone feels valued and
                            motivated to contribute their best.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="joinusbox">
                        <span> <img src="{{ ('web/images/joinus-icon02.svg')}}" class="iconjoin"></span>
                        <h3>Professional Growth</h3>
                        <p>Extending to the professional growth of our employees, we provide opportunities for skill
                            development, training, and advancement, empowering them to thrive in their careers</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="joinusbox">
                        <span> <img src="{{ ('web/images/joinus-icon03.svg')}}" class="iconjoin"></span>
                        <h3> Work-Life Balance</h3>
                        <p>Maintaining a healthy balance between work and personal life, our flexible work policies
                            ensure that employees can achieve equilibrium, leading to a great productivity.</p>
                    </div>
                </div>
            </div>
            <div class="row mb-75" id="last">
                <div class="col-lg-4">
                    <div class="joinusbox">
                        <span> <img src="{{ ('web/images/joinus-icon04.svg')}}" class="iconjoin"></span>
                        <h3>Ethical Leadership</h3>
                        <p>Promoting transparency, fairness, and honesty in all aspects of our work, which leads to our
                            employees trust in the integrity of our leadership.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="joinusbox">
                        <span> <img src="{{ ('web/images/joinus-icon05.svg')}}" class="iconjoin"></span>
                        <h3>Environment Responsibility</h3>
                        <p>We are committed to sustainable practices, minimizing our carbon footprint, and contributing
                            positively to the communities in which we operate.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="joinusbox">
                        <span> <img src="{{ ('web/images/joinus-icon06.svg')}}" class="iconjoin"></span>
                        <h3>Adaptability</h3>
                        <p>Believing in the dynamic landscape of digital realm, we understand “adaptability is the key”.
                            We encourage a culture of flexibility, allowing our team to navigate challenges, embrace
                            change, and thrive in an ever-evolving industry.
                        </p>
                    </div>
                </div>
            </div>




            <div class="row mb-75 mt-75" id="current_job">
                <div class="col-lg-12 text-center">
                    <h4 class="mainheadingtext">Current job open positions</h4>
                </div>
            </div>



            <style>
            #sampleTable tr td,
            tr th {
                border: none;

            }



            /* #sampleTable td {
            text-align: center;
        } */

            #sampleTable thead tr th {
                color: #9c9c9c;
                padding: 40px 0 40px 0;
                font-weight: 500;
                font-size: 21px;


            }

            #sampleTable .btn:hover {
                background: #4099c9;
            }

            .input.form-control.form-control-sm {
                border: none;
                padding: 10px;
                border-bottom: 0.125rem solid #d6e0ea;
                cursor: progress;

            }
            </style>
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead style="border:1px">

                        <tr>
                            <th>Job Title </th>
                            <th>Designation </th>
                            <th>City</th>
                            <th>Deadline</th>
                            <th style="text-align:center">DIC Company</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($jobs as $job)
                        <tr>
                            <td>{{ $job->job_title}}</td>
                            <td>{{ $job->designation}}</td>
                            <td>{{ $job->city}}</td>
                            <td>{{ $job->apply_last_date}}</td>
                            <td style="display:flex; justify-content:center;">
                                <a href="{{ url('join-us/jobdetail', ['id' => $job->id]) }}" id="hoverapply" id="apply"
                                    class="btn btn-primary">Apply Now</a>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>




        </div>
    </section>



    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css">
    <!-- Data table plugin-->
    <script type="text/javascript" src="{{ asset('admin/js/plugins/jquery.dataTables.min.js') }}"></script>
    <!-- <script type="text/javascript" src="{{ asset('admin/js/plugins/dataTables.bootstrap.min.js') }}"></script> -->
    <script type="text/javascript">
    $('#sampleTable').DataTable();
    </script>
    <script>
    // Find the input field
    var inputField = document.querySelector('input.form-control.form-control-sm');

    // Check if the input field exists
    if (inputField) {
        // Assign the placeholder
        inputField.placeholder = "Search Your Job 🔎";
        inputField.style.border = "none";
        inputField.style.padding = "10px";
        inputField.style.borderBottom = "0.125rem solid #d6e0ea";
        inputField.style.cursor = "progress";
        inputField.blur();
    } else {
        console.error("Input field not found!");
    }

    $(document).ready(function() {
        $("#carousel1").owlCarousel({
            items: 1,
            loop: true,
            nav: true,
            dots: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    nav: false,
                    dotsEach: true
                },
                600: {
                    nav: true,
                    dotsEach: false

                },

            }

        });
    });
    </script>


    @include('layouts.footer')