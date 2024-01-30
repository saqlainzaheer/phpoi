@include('admin.layouts.navbar')

<main class="app-content">
    <div class="app-title">
        <div class="d-flex justify-content-between" style="width:100%;">
            <div>
                <h1><i class="bi bi-table"></i> Jobs List And Disignations</h1>
            </div>
            <div>

                <span>
                    <a href="{{ url('admin/designation/create') }}" class="btn btn-primary btn-primary:hover">Add
                        New Job Designation </a>
                </span>
                <span>
                    <a href="{{ url('admin/job/create') }}" class="btn btn-primary btn-primary:hover">Add New Job
                    </a>
                </span>
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
                        <h2>Job Designation List</h2>
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Designation </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($designations as $designation)
                                <tr>
                                    <td>{{ $designation->id }}</td>
                                    <td>{{ $designation->designation}}</td>
                                    <td style="gap: 10px; display: flex;justify-content: flex-end;">


                                        <a href="#" onclick="confirmDeleteDesignation('{{ $designation->id }}')"
                                            class="btn btn-danger " style="background:red; ">DELETE</a>
                                        <!-- Hidden form to perform the actual delete action -->
                                        <form id="delete-designation-form-{{ $designation->id }}"
                                            action="/admin/designation/delete/{{$designation->id}}" method="POST"
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

                    <hr>
                    <h2>Job List </h2>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>

                                <tr>
                                    <th>Sr No.</th>
                                    <th>Job Title </th>
                                    <th>Job Designation </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jobs as $job)
                                <tr>
                                    <td>{{ $job->id }}</td>
                                    <td>{{ $job->job_title}}</td>
                                    <td>{{ $job->designation}}</td>
                                    <td style="gap: 10px; display: flex;justify-content: flex-end;">

                                        <a href="{{ url('admin/job/createupdate', ['id' => $job->id]) }}"
                                            class="btn btn-primary">Update</a>
                                        <a href="#" onclick="confirmjobDelete('{{ $job->id }}')" class="btn btn-danger "
                                            style="background:red; ">DELETE</a>
                                        <!-- Hidden form to perform the actual delete action -->
                                        <form id="delete-job-form-{{ $job->id }}"
                                            action="{{ url('/admin/job/delete', ['id' => $job->id]) }}" method="POST"
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
const myVariable = @json($jobs);
console.log(myVariable)

function confirmDeleteDesignation(designationId) {
    var isConfirmed = confirm('Are you sure you want to delete this Job Designation?');
    if (isConfirmed) {
        document.getElementById('delete-designation-form-' + designationId).submit();
    }
}

function confirmjobDelete(jobId) {
    var isConfirmed = confirm('Are you sure you want to delete this  Job?');
    if (isConfirmed) {
        document.getElementById('delete-job-form-' + jobId).submit();
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