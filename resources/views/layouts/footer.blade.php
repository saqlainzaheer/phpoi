<footer class="darkfooter ">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                <h6>Company</h6>
                <ul class="fotnab">
                    <li><a href="{{url('we-are')}}">About</a></li>
                    <li><a href="{{url('our-services')}}">Services</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                <h6>Help</h6>
                <ul class="fotnab">
                    <li><a href="{{url('contact-us')}}">Contact Us</a></li>
                    <li><a href="{{url('join-us')}}">Join Us</a></li>
                    <!-- <li><a href="#">Terms & Conditions</a></li>
          <li><a href="#">Privacy Policy</a></li> -->
                </ul>
            </div>
            <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-6">
        <h6>Help</h6>
        <ul class="fotnab">
          <li><a href="#"> Customer Support</a></li>
          <li><a href="#">Delivery Details</a></li>
          <li><a href="#">Terms & Conditions</a></li>
          <li><a href="#">Privacy Policy</a></li>
        </ul>
      </div> -->
            <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-6">
        <h6>Resources</h6>
        <ul class="fotnab">
          <li><a href="#"> Free eBooks</a></li>
          <li><a href="#">Development Tutorial</a></li>
          <li><a href="#">How to - Blog</a></li>
          <li><a href="#">Youtube Playlist</a></li>
        </ul>
      </div> -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                <h6>Other Links</h6>
                <ul class="fotnab">
                    <li><a href="{{url('data-world')}}">Data World</a></li>
                    <li><a href="{{url('we-care')}}">We Care</a></li>
                    <li><a href="{{url('cloud-providers')}}">Cloud Provider</a></li>
                </ul>
            </div>

            <div style="display:flex">

                <a href="https://www.instagram.com/dataintegrityservices/">
                    <img style="width:30px; height:30px" src="{{ asset('web/images/insta.png') }}">
                </a>
                <a href="https://www.facebook.com/profile.php?id=61556158206869">
                    <img style="width:55px; height:30px" src="{{ asset('web/images/fb.svg') }}">
                </a>
                <a href="https://www.linkedin.com/company/data-integrity-services-us/">
                    <img style="width:38px; height:35px" src="{{ asset('web/images/linked-in.png') }}">
                </a>
            </div>
        </div>
        <div class="container fotcopy " style="margin-top: 10px;">
            <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <p>© Copyright 2024, All Rights Reserved by DIS</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <!-- <ul class="fotsocial">
          <li><a href=""><img src="{{ asset('web/images/twitter-icon.svg')}}"></a></li>
          <li><a href=""><img src="{{ asset('web/images/facebook-icon.svg')}}"></a></li>
          <li><a href=""><img src="{{ asset('web/images/instagram-icon.svg')}}"></a></li>
          <li><a href=""><img src="{{ asset('web/images/github-icon.svg')}}"></a></li>
        </ul> -->
                </div>
            </div>
        </div>
</footer>
<!-- <script>
$(document).ready(function() {
    var owl = $('.owl-review');
    owl.owlCarousel({
        margin: 0,
        nav: true,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
})
</script> -->
<!-- <script>
$(document).ready(function() {
    var owl = $('.owl-sight');
    owl.owlCarousel({
        margin: 20,
        nav: true,
        loop: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })
})
</script>
<script>
$(document).ready(function() {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        margin: 20,
        nav: true,
        items: 1,
        loop: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
})
</script> -->

</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
</body>

</html>