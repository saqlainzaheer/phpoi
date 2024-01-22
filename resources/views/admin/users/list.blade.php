@include('admin.layouts.navbar')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="bi bi-table"></i> List Dealership Request</h1>
        </div>


    </div>
    <div class="row">
        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Firm Name</th>
                                    <th>Email</th>
                                    <th>Phone No.</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dealers as $dealer)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$dealer->firm_name}}</td>
                                    <td>{{$dealer->cp_email}}</td>
                                    <td>{{$dealer->cp_mobile??'Not Provided'}}</td>
                                    <td>{{$dealer->created_at->format('Y-m-d')}}</td>
                                    <td>
                                    <a href="{{url('admin/dealership/destroy',$dealer->id)}}" class="btn btn-danger">DELETE</a>
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