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
                <!-- <div class="col-lg-6 " id="applybtn">
                    <a style="margin:20px 0 20px 0" href="{{ url('join-us/jobdetail', ['id' => $job->id]) }}"
                        id="hoverapply" id="apply" class="btn btn-primary">Apply For This Job Now</a>
                </div> -->

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
        <form action="{{ url('join-us/job-application/store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="allcontactform">

                <div class="row">
                    @if (session('success'))
                    <div class="col-lg-12    ">

                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    </div>
                    @endif

                    @if (session('error'))
                    <div class="col-lg-12">

                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    </div>
                    @endif
                </div>
                <div class="row">
                    <!-- Full Name -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Job Title</label>
                            <input style="background-color: #f5f5f5;pointer-events: none;" type="text" name="job_title"
                                value="{{ $job->job_title }}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Job Designation (Read-only) -->
                        <div class="form-group">
                            <label>Job Designation</label>
                            <input style="background-color: #f5f5f5;pointer-events: none;" type="text"
                                name="job_designation" value="{{ $job->designation }}" class="form-control" readonly>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Full Name -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="full_name" placeholder="Full Name" class="form-control" required>
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Email Address" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Phone Number -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="number" min="0" name="phone_number" placeholder="Phone Number"
                                class="form-control" required>
                        </div>
                    </div>
                    <!-- Resume/CV Upload -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Resume/CV Upload</label>
                            <input type="file" name="resume" class="form-control-file" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- LinkedIn Profile -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>LinkedIn Profile (Optional)</label>
                            <input type="text" name="linkedin_profile" placeholder="LinkedIn Profile"
                                class="form-control">
                        </div>
                    </div>
                    <!-- Years of Relevant Experience -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Years of Relevant Experience</label>
                            <input type="number" name="years_experience" placeholder="Years of Experience"
                                class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Portfolio Link -->
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Portfolio Link (If applicable)</label>
                            <input type="text" name="portfolio_link" placeholder="Portfolio Link" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Additional Comments -->
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Additional Comments</label>
                            <textarea class="form-control" name="additional_comments"
                                placeholder="Additional Comments"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-12">
                        <div class="form-group btnpart">
                            <input type="submit" value="Submit" class="btn btn-primary">
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</section>
<script>
setTimeout(function() {
    var alertElement = document.querySelector('.alert');

    if (alertElement) {
        alertElement.style.display = 'none';
    } else {
        // Handle the case where the element is not found
        // You might want to display an error message to the user or take other actions.
    }
}, 3000); // 3000 milliseconds = 3 seconds
</script>
@include('layouts.footer');