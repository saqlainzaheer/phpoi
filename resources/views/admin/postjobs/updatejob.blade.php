@include('admin.layouts.navbar')

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="bi bi-table"></i> Create New JOb </h1>
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
                    <form class="form-horizontal" action="/admin/job/update/{{$job->id}}" method="post">
                        @csrf
                        @method('PUT')
                        <!-- Use the PUT method for updates -->

                        <div class="mb-3 row">
                            <label for="job_title" class="form-label col-md-3">Job Title</label>
                            <div class="col-md-8">
                                <input class="form-control" name="job_title" type="text" placeholder="Enter job title"
                                    value="{{ old('job_title', $job->job_title) }}" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="city" class="form-label col-md-3">City</label>
                            <div class="col-md-8">
                                <input class="form-control" name="city" type="text" placeholder="Enter city"
                                    value="{{ old('city', $job->city) }}" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="apply_last_date" class="form-label col-md-3">Apply Last Date</label>
                            <div class="col-md-8">
                                <input class="form-control" name="apply_last_date" type="date"
                                    value="{{ old('apply_last_date', $job->apply_last_date) }}" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="designation" class="form-label col-md-3">Designation</label>
                            <div class="col-md-8">
                                <select class="form-control" name="designation" required>
                                    <option value="" disabled>Select Designation</option>
                                    @foreach($designations as $designation)
                                    @php
                                    $isSelected = old('designation', $job->designation) == $designation->designation;
                                    @endphp
                                    <option value="{{ $designation->designation }}" {{ $isSelected ? 'selected' : '' }}>
                                        {{ $designation->designation }}
                                    </option>
                                    @endforeach
                                </select>

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="job_details" class="form-label col-md-3">Job Details</label>
                            <div class="col-md-8">
                                <textarea class="form-control" id="job_details" name="job_details" rows="4"
                                    placeholder="Enter job details"
                                    required>{{ old('job_details', $job->job_details) }}</textarea>
                            </div>
                        </div>

                        <div class="tile-footer">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-3">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="bi bi-check-circle-fill me-2"></i>Update Job
                                    </button>

                                    <a style="text-decoration:none; color:white;" class="btn-primary btn"
                                        href="/admin/job/list">Back</a>
                                </div>
                            </div>
                        </div>
                    </form>


                </div>
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