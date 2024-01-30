@include('admin.layouts.navbar')

<main class="app-content">
    <div class="app-title">
        <div class="d-flex justify-content-between" style="width:100%;">
            <div>
                <h1><i class="bi bi-table"></i> List Insights </h1>
            </div>
            <div>
                <a href="{{ url('admin/insight/create') }}" class="btn btn-primary btn-primary:hover">Add New
                    insight</a>
            </div>
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
                                    <th>insights Title </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($insights as $insights)
                                <tr>
                                    <td>{{ $insights->id }}</td>
                                    <td>{{ $insights->title}}</td>
                                    <td style="gap: 10px; display: flex;justify-content: flex-end;">

                                        <a href="{{ url('admin/insight/create/update', ['id' => $insights->id]) }}"
                                            class="btn btn-primary">Update</a>
                                        <a href="#" onclick="confirmDelete('{{ $insights->id }}')"
                                            class="btn btn-danger " style="background:red; ">DELETE</a>
                                        <!-- Hidden form to perform the actual delete action -->
                                        <form id="delete-form-{{ $insights->id }}"
                                            action="{{ url('/admin/insight/delete', ['id' => $insights->id]) }}"
                                            method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
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
<script type="text/javascript" src="{{ asset('admin/js/plugins/jquery.dataTables.min.js') }}"></script>
<!-- <script type="text/javascript" src="{{ asset('admin/js/plugins/dataTables.bootstrap.min.js') }}"></script> -->
<script type="text/javascript">
$('#sampleTable').DataTable();
</script>

<script>
function confirmDelete(insightsId) {
    var isConfirmed = confirm('Are you sure you want to delete this insights?');
    if (isConfirmed) {
        document.getElementById('delete-form-' + insightsId).submit();
    }
}
</script>

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

@include('admin.layouts.footer')