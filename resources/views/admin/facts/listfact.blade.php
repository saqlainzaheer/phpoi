@include('admin.layouts.navbar')

<main class="app-content">
    <div class="app-title">
        <div class="d-flex justify-content-between" style="width:100%;">
            <div>
                <h1><i class="bi bi-table"></i> List Facts And Add Facts</h1>
            </div>
            <div>
                <a href="{{ url('admin/create/fact') }}" class="btn btn-primary btn-primary:hover">Add Fact</a>
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
                                    <th>Fact</th>
                                    <th>Fact Discription</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($facts as $fact)
                                <tr>
                                    <td>{{ $fact->id }}</td>
                                    <td>{{ $fact->fact }}</td>
                                    <td>{{ $fact->factDis }}</td>
                                    <td>
                                        <a href="#" onclick="confirmDelete('{{ $fact->id }}')"
                                            class="btn btn-danger">DELETE</a>
                                        <!-- Hidden form to perform the actual delete action -->
                                        <form id="delete-form-{{ $fact->id }}"
                                            action="{{ url('/admin/fact/delete', ['id' => $fact->id]) }}" method="POST"
                                            style="display: none;">
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
<script type="text/javascript" src="{{ asset('admin/js/plugins/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript">
$('#sampleTable').DataTable();
</script>

<script>
function confirmDelete(factId) {
    var isConfirmed = confirm('Are you sure you want to delete this fact?');
    if (isConfirmed) {
        document.getElementById('delete-form-' + factId).submit();
    }
}
</script>

<script>
setTimeout(function() {
    document.querySelector('.alert').style.display = 'none';
}, 3000); // 3000 milliseconds = 3 seconds
</script>

@include('admin.layouts.footer')