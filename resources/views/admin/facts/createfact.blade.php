@include('admin.layouts.navbar')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="bi bi-table"></i> Create Fact</h1>
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

                    <form class="form-horizontal" action="/admin/fact/store" method="post">
                        @csrf
                        <div class="mb-3 row">
                            <label for="fact" class="form-label col-md-3">Fact Title</label>
                            <div class="col-md-8">
                                <input class="form-control" name="fact" type="text"
                                    placeholder="Enter fact e.g 130K+,120%" required maxlength="20">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="factDisc" class="form-label col-md-3">Fact Discription</label>
                            <div class="col-md-8">
                                <input class="form-control col-md-8" id="factDis" name="factDis" type="text"
                                    placeholder="Enter discrption of Fact 50 characters" required maxlength="50">
                            </div>
                        </div>

                        <div class="tile-footer">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-3">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="bi bi-check-circle-fill me-2"></i>Add Fact</button>
                                    <a style="text-decoration:none; color:white;" class="btn-primary btn"
                                        href="/admin/list/fact">Back</a>
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
<!-- <script type="text/javascript" src="{{ asset('admin/js/plugins/dataTables.bootstrap.min.js')}}"></script> -->
<script type="text/javascript">
$('#sampleTable').DataTable();
</script>
@include('admin.layouts.footer')