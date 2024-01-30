@include('layouts.header')
<style>
.nohome .btn:hover {
    background: #4099c9;
}

#applybtn {
    display: flex;
    justify-content: flex-end;
    z-index: 10;

}

@media screen and (max-width: 1000px) {

    /* Your CSS rules for smaller devices go here */
    #applybtn {
        display: flex;
        justify-content: flex-start;

    }
}
</style>
<div class="bannerslider oneuspage">
    <div class="captionheader shadownone lefttextcap nohome" style=" background-color: rgba(0, 0, 0, 0.5);">
        <div style="color:white" class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>{{$job->job_title}}</h1>
                    <span>{{$job->apply_last_date}}</span>
                </div>
                <div class="col-lg-6 " id="applybtn">
                    <a style="margin:20px 0 20px 0" href="{{ url('join-us/jobapply', ['id' => $job->id]) }}"
                        id="hoverapply" id="apply" class="btn btn-primary">Apply For This Job Now</a>
                </div>

            </div>
            <div class="col-lg-6">
                <span>{{$job->designation}} / </span>
                <span>{{$job->city}} </span>
            </div>

        </div>
    </div>
    <video width="100%" height="100%" autoplay muted loop>
        <source src="{{ asset('web/images/contact-vid.mp4') }}" type="video/mp4">
    </video>
</div>
<section class="dataworldpart" style="background:#F4F8FC">
    <div class="container">
        <h2>Job Details</h2>
        {!! $job->job_details !!}

    </div>
</section>
@include('layouts.footer');