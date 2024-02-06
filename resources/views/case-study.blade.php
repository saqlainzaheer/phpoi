@include('layouts.header')

<style>
.bannerslider h4 {
    font-size: 30px;
    font-weight: 500;
    padding: 10px 84px 0px 0;
    color: white;
}

@media only screen and (max-width: 639px) {
    .bannerslider h4 {
        font-size: 16px;
        padding: 0;
    }
}
</style>

<div class="bannerslider oneuspage">
    <div class="captionheader shadownone lefttextcap nohome">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>World's <span>First</span></h1>
                    <h4>
                        {{$casestudy->title}}</h4>
                </div>
            </div>
        </div>
    </div>
    <img width="100%" height="100%" src="{{ asset('web/images/atgalance.jpg')}}">
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