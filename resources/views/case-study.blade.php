@include('layouts.header')
</div>
<div class="bannerslider oneuspage">
    <div class="captionheader shadownone lefttextcap nohome">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>World's <span>First</span></h1>
                    <h4 style="font-size: 40px;font-weight: 500;padding: 10px 84px 0px 0;color: white;">
                        {{$casestudy->title}}</h4>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('web/images/atgalance.jpg')}}">
</div>
<!-- <section class="wecarepart atwecare">
    <div class="container">
        <div class="row mb-5 globeheading">
            <div class="col-lg-6">
                <div class="imgcall"> <img src="{{ ('web/images/cloud-pro-img03.jpg')}}"></div>
            </div>
            <div class="col-lg-6">
            </div>
        </div>
    </div>
</section> -->
<section class="dataworldpart" style="background:#F4F8FC">
    <div class="container">

        {!! $casestudy->content !!}

    </div>
</section>


<footer class="darkfooter">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                <h6>Company</h6>
                <ul class="fotnab">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Works</a></li>
                    <li><a href="#">Career</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                <h6>Help</h6>
                <ul class="fotnab">
                    <li><a href="#"> Customer Support</a></li>
                    <li><a href="#">Delivery Details</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                <h6>Resources</h6>
                <ul class="fotnab">
                    <li><a href="#"> Free eBooks</a></li>
                    <li><a href="#">Development Tutorial</a></li>
                    <li><a href="#">How to - Blog</a></li>
                    <li><a href="#">Youtube Playlist</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                <h6>Install App</h6>
                <ul class="fotnab">
                    <li><a href="#"><img src="{{ ('web/images/app-store.png')}}"> </a></li>
                    <li><a href="#"><img src="{{ ('web/images/play-store.png')}}"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container fotcopy">
        <div class="row ">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <p>© Copyright 2022, All Rights Reserved by DIS</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <ul class="fotsocial">
                    <li><a href=""><img src="{{ ('web/images/twitter-icon.svg')}}"></a></li>
                    <li><a href=""><img src="{{ ('web/images/facebook-icon.svg')}}"></a></li>
                    <li><a href=""><img src="{{ ('web/images/instagram-icon.svg')}}"></a></li>
                    <li><a href=""><img src="{{ ('web/images/github-icon.svg')}}"></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script>
$(document).ready(function() {
    var owl = $('.owl-bepart');
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
</script>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
</body>

</html>

@include('layouts.footer')