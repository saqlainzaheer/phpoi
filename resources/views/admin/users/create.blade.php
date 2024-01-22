@include('admin.layouts.navbar')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="bi bi-table"></i> Create Users</h1>
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
                    <form class="form-horizontal" action="/admin/users/store" method="post">
                        @csrf
                        <div class="mb-3 row">
                            <label class="form-label col-md-3">Name</label>
                            <div class="col-md-8">
                                <input class="form-control" name="name" type="text" placeholder="Enter full name">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="form-label col-md-3">Email</label>
                            <div class="col-md-8">
                                <input class="form-control col-md-8" name="email" type="email" placeholder="Enter email address">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="form-label col-md-3">Contact No.</label>
                            <div class="col-md-8">
                                <input class="form-control col-md-8" name="phone" type="text" placeholder="Enter contact number">
                            </div>
                        </div>
                       
                        <div class="mb-3 row">
                            <label class="form-label col-md-3">Gender</label>
                            <div class="col-md-9">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="gender" value="male">Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="gender" value="female">Female
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="form-label col-md-3">Password</label>
                            <div class="col-md-8">
                                <input class="form-control col-md-8" name="password" type="password" placeholder="Enter password">
                            </div>
                        </div>
                        <div class="tile-footer">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-3">
                                    <button class="btn btn-primary" type="submit"><i class="bi bi-check-circle-fill me-2"></i>Register</button>
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