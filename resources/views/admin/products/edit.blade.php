@include('admin.layouts.navbar')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="bi bi-table"></i> Edit Product</h1>
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
                    <form class="form-horizontal" action="{{ url('admin/products/update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3 row">
                            <label class="form-label col-md-3" for="exampleSelect1">Parent Product</label>
                            <div class="col-md-8">
                                <select class="form-control col-md-8" id="exampleSelect1" name="parent_id">
                                    <option value="0">SELECT PARENT PRODUCT</option>
                                    @foreach ($products as $item)
                                    <option value="{{$item->id}}" {{$product->parent_id == $item->id ? 'Selected':''}}>{{$item->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="form-label col-md-3">Title</label>
                            <div class="col-md-8">
                                <input class="form-control col-md-8" name="title" type="text" value="{{$product->title}}" placeholder="Enter Title">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="form-label col-md-3">Overview</label>
                            <div class="col-md-8">
                                <input class="form-control col-md-8" name="overview" type="text" value="{{$product->overview}}" placeholder="Enter OverView">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="form-label col-md-3">Specifications</label>
                            <div class="col-md-8">
                                <input class="form-control col-md-8" name="specification" value="{{$product->specification}}" type="text" placeholder="Enter Specification">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="form-label col-md-3">Product Picture</label>
                            <div class="col-md-8">
                                <input class="form-control col-md-8" name="image" type="file">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="form-label col-md-3">PDF Document</label>
                            <div class="col-md-8">
                                <input class="form-control col-md-8" name="pdf_file" type="file">
                            </div>
                        </div>


                        <div class="tile-footer">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-3">
                                    <button class="btn btn-primary" type="submit">Update</button>
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