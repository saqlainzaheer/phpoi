@include('admin.layouts.navbar')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="bi bi-table"></i> Deposit Requests</h1>
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
                                    <th>Sr No.</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Amount</th>
                                    <th>Payment Type</th>
                                    <th>Screenshot</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($deposits as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->amount}}</td>
                                    <td>{{$item->payment_type}}</td>
                                    <td><img src="{{$item->screenshot}}" width="70px" height="70px" alt=""></td>
                                    <td>
                                        @if($item->status == 0)
                                        <a href="{{url('admin/action/'.$item->id.'/'.$item->status)}}" class="btn btn-success">Approve</a>
                                        @else
                                        <a href="{{url('admin/action/'.$item->id.'/'.$item->status)}}" class="btn btn-danger">Reject</a>
                                        @endif
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