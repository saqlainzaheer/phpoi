@include('admin.layouts.navbar')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="bi bi-table"></i> List Products</h1>
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
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>OverView</th>
                                    <th>Specification</th>
                                    <th>Document</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $item)
                                <tr>
                                    <td>{{$item->title}}</td>
                                    <td><img src="{{$item->image}}" style="width: 20%;"></td>
                                    <td>{{ \Illuminate\Support\Str::limit($item->overview, 20) }}.. </td>
                                    <td>{{ \Illuminate\Support\Str::limit($item->specification, 20) }}..</td>
                                    <td><a href="{{$item->pdf_file}}" class="btn btn-info" target="_blank">View</a></td>
                                    <td>
                                        <a href="{{url('admin/products/edit',$item->id)}}" class="btn btn-info">Edit</a>
                                        <a href="{{url('admin/products/destroy',$item->id)}}" class="btn btn-danger">DELETE</a>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
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