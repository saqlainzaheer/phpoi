@include('admin.layouts.navbar')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="bi bi-table"></i> Edit Job Positions</h1>
        </div>
        <!-- <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul> -->
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <form class="form-horizontal" action="{{ route('job.store') }}" method="post">
                        @csrf

                        <div class="mb-3 row">
                            <label for="job_title" class="form-label col-md-3">Job Title</label>
                            <div class="col-md-8">
                                <input class="form-control" name="job_title" type="text"
                                    value="{{ $application->job_title }}" readonly>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="job_designation" class="form-label col-md-3">Job Designation</label>
                            <div class="col-md-8">
                                <input class="form-control" name="job_designation" type="text"
                                    value="{{ $application->job_designation }}" readonly>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="full_name" class="form-label col-md-3">Full Name</label>
                            <div class="col-md-8">
                                <input class="form-control" name="full_name" type="text"
                                    value="{{ $application->full_name }}" readonly>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="email" class="form-label col-md-3">Email</label>
                            <div class="col-md-8">
                                <input class="form-control" name="email" type="email" value="{{ $application->email }}"
                                    readonly>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="phone_number" class="form-label col-md-3">Phone Number</label>
                            <div class="col-md-8">
                                <input class="form-control" name="phone_number" type="text"
                                    value="{{ $application->phone_number }}" readonly>
                            </div>
                        </div>



                        <div class="mb-3 row">
                            <label for="linkedin_profile" class="form-label col-md-3">LinkedIn Profile</label>
                            <div class="col-md-8">
                                <input class="form-control" name="linkedin_profile" type="text"
                                    value="{{ $application->linkedin_profile ?? 'N/A' }}" readonly>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="years_experience" class="form-label col-md-3">Years of Relevant
                                Experience</label>
                            <div class="col-md-8">
                                <input class="form-control" name="years_experience" type="text"
                                    value="{{ $application->years_experience }}" readonly>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="portfolio_link" class="form-label col-md-3">Portfolio Link</label>
                            <div class="col-md-8">
                                <input class="form-control" name="portfolio_link" type="text"
                                    value="{{ $application->portfolio_link ?? 'N/A' }}" readonly>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="additional_comments" class="form-label col-md-3">Additional Comments</label>
                            <div class="col-md-8">
                                <textarea class="form-control" name="additional_comments"
                                    readonly>{{ $application->additional_comments }}</textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="form-label col-md-3">Resume/CV Upload</label>
                            <div class="col-md-8">
                                <a href="{{ url($application->resume_path) }}">
                                    <img style="width:20px;height:20px;" src="{{ asset('web/images/downsolid.svg') }}">
                                </a>
                            </div>
                        </div>

                        <div class="tile-footer">
                            <div class="row">
                                <div class="col-md-8 offset-md-3">
                                    <a style="text-decoration:none; color:white;" class="btn-primary btn"
                                        href="/admin/application/list">Back</a>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</main>
<!-- Page specific javascripts-->
<link rel="stylesheet" href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css">
<!-- Data table plugin-->
<script type="text/javascript" src="{{ asset('admin/js/plugins/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin/js/plugins/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript">
$('#sampleTable').DataTable();
</script>
@include('admin.layouts.footer')