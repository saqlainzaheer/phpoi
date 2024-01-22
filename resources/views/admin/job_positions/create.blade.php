@include('admin.layouts.navbar')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="bi bi-table"></i> Add Job Positions</h1>
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
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <form class="form-horizontal" action="{{ url('admin/job-positions') }}" method="post" enctype="multipart/form-data">
                        @csrf
                       

                        <div class="mb-3 row">
                            <label class="form-label col-md-3">Title</label>
                            <div class="col-md-8">
                                <input class="form-control col-md-8" name="title" value="{{old('title')}}" type="text" placeholder="Enter Title" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="form-label col-md-3">Subtitle</label>
                            <div class="col-md-8">
                                <input class="form-control col-md-8" name="subtitle" value="{{old('subtitle')}}" type="text" placeholder="Enter Subtitle" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="form-label col-md-3">Description</label>
                            <div class="col-md-8">
                                <textarea class="form-control col-md-8" name="description" value="{{old('description')}}" type="text" placeholder="Enter Description" required></textarea>
                            </div>
                        </div>
                      
                        <div class="tile-footer">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-3">
                                    <button class="btn btn-primary" type="submit"><i class="bi bi-check-circle-fill me-2"></i>Submit</button>
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