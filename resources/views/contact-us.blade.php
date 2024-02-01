@include('layouts.header')
<style>
.bannerslider {
    height: 50vh;
}

.allbanner h1 span {
    font-size: 60px;
}

.captionheader h1 {
    font-size: 60px;
}

.contactbond {
    padding: 5px;
}

.contactblue {
    margin-bottom: 30px
}
</style>
<div class="bannerslider allbanner">
    <div class="captionheader shadownone">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contact<span>Us</span></h1>
                    <p>Any question or remarks? Just write us a message!</p>
                </div>
            </div>
        </div>
    </div>
    <video width="100%" height="100%" autoplay muted loop>
        <source src="{{ asset('web/images/contact-vid.mp4') }}" type="video/mp4">
    </video>
</div>

<section class="contactpart">
    <div class="container">
        @if(Session::has('success'))
        <p class="alert alert-success">{{ Session::get('success')}}</p>
        @endif
        <div class="contactbond">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contactblue">
                        <div class="cpart">
                            <h3>Contact Information</h3>
                            <p>Say something to start a live chat!</p>
                        </div>
                        <div class="cpart">
                            <div class="form-group">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path d="M20 10.999H22C22 5.869 18.127 2 12.99 2V4C17.052 4 20 6.943 20 10.999Z"
                                            fill="white" />
                                        <path
                                            d="M13 7.99999C15.103 7.99999 16 8.89699 16 11H18C18 7.77499 16.225 5.99999 13 5.99999V7.99999ZM16.422 13.443C16.2299 13.2683 15.9774 13.1752 15.7178 13.1832C15.4583 13.1912 15.212 13.2998 15.031 13.486L12.638 15.947C12.062 15.837 10.904 15.476 9.71204 14.287C8.52004 13.094 8.15904 11.933 8.05204 11.361L10.511 8.96699C10.6975 8.78612 10.8062 8.53982 10.8142 8.2802C10.8222 8.02059 10.7289 7.76804 10.554 7.57599L6.85904 3.51299C6.68408 3.32035 6.44092 3.2035 6.18119 3.18725C5.92146 3.17101 5.66564 3.25665 5.46804 3.42599L3.29804 5.28699C3.12515 5.46051 3.02196 5.69145 3.00804 5.93599C2.99304 6.18599 2.70704 12.108 7.29904 16.702C11.305 20.707 16.323 21 17.705 21C17.907 21 18.031 20.994 18.064 20.992C18.3086 20.9783 18.5394 20.8747 18.712 20.701L20.572 18.53C20.7415 18.3325 20.8273 18.0768 20.8113 17.817C20.7952 17.5573 20.6785 17.3141 20.486 17.139L16.422 13.443Z"
                                            fill="white" />
                                    </svg>
                                </span>

                                <label><a href="tel:+1-510-239-8537">+1-510-239-8537</a></label>
                                <!-- <label><a href="tel:+1012 3456 78">+1012 3456 78</a></label> -->
                            </div>
                            <div class="form-group">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path d="M22 4H2V20H22V4ZM20 8L12 13L4 8V6L12 11L20 6V8Z" fill="white" />
                                    </svg>
                                </span>
                                <label><a href="mailto:info@diservicesinc.com">info@diservicesinc.com</a></label>
                            </div>
                            <div class="form-group">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M12 1.5C9.81276 1.50258 7.71584 2.3726 6.16923 3.91922C4.62261 5.46584 3.75259 7.56276 3.75001 9.75C3.74739 11.5374 4.33124 13.2763 5.41201 14.7C5.41201 14.7 5.63701 14.9963 5.67376 15.039L12 22.5L18.3293 15.0353C18.3623 14.9955 18.588 14.7 18.588 14.7L18.5888 14.6978C19.669 13.2747 20.2526 11.5366 20.25 9.75C20.2474 7.56276 19.3774 5.46584 17.8308 3.91922C16.2842 2.3726 14.1873 1.50258 12 1.5ZM12 12.75C11.4067 12.75 10.8266 12.5741 10.3333 12.2444C9.83995 11.9148 9.45543 11.4462 9.22837 10.8981C9.00131 10.3499 8.9419 9.74667 9.05765 9.16473C9.17341 8.58279 9.45913 8.04824 9.87869 7.62868C10.2982 7.20912 10.8328 6.9234 11.4147 6.80764C11.9967 6.69189 12.5999 6.7513 13.1481 6.97836C13.6962 7.20542 14.1648 7.58994 14.4944 8.08329C14.8241 8.57664 15 9.15666 15 9.75C14.999 10.5453 14.6826 11.3078 14.1202 11.8702C13.5578 12.4326 12.7954 12.749 12 12.75Z"
                                            fill="white" />
                                    </svg>
                                </span>
                                <!-- <label> 311 S Jupiter Rd, Ste 200, Allen, Texas, 75002-3053, United States</label> -->
                                <label>Headquarters
                                    825 Watters Creek Blvd, Building M, Suite 250, Allen, Texas 75013, US</label>
                            </div>
                        </div>
                        <div class="cpart">
                            <ul class="fotsocial contactsocial">
                                <li><a href=""><img src="{{ asset('web/images/twitter-icon.svg') }}"></a></li>
                                <li><a href=""><img src="{{ asset('web/images/facebook-icon.svg') }}"></a></li>
                                <li><a href=""><img src="{{ asset('web/images/instagram-icon.svg') }}"></a></li>
                                <li><a href=""><img src="{{ asset('web/images/github-icon.svg') }}"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <form action="{{url('contactus-store')}}" method="post">
                        @csrf
                        <div class="allcontactform">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="first_name" placeholder="First Name"
                                            class="form-control" value="" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="last_name" placeholder="Last Name" class="form-control"
                                            value="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" placeholder="demo@yopmail.com"
                                            class="form-control" value="" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" name="phone_number" placeholder="Enter Phone Number"
                                            class="form-control" value="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4>Select Subject?</h4>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="General Inquiry"
                                            name="inquiry" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            General Inquiry
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="General Inquiry"
                                            name="inquiry" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            General Inquiry
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="General Inquiry"
                                            name="inquiry" id="flexRadioDefault3" checked>
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            General Inquiry
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="General Inquiry"
                                            name="inquiry" id="flexRadioDefault4" checked>
                                        <label class="form-check-label" for="flexRadioDefault4">
                                            General Inquiry
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea class="form-control" name="message" placeholder="Write your message.."
                                            required></textarea>
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
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
@include('layouts.footer')