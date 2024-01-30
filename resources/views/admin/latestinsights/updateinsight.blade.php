@include('admin.layouts.navbar')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="bi bi-table"></i> Update insight</h1>
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

                    <form class="form-horizontal" action="/admin/insight/store/update/{{ $post->id }}" method="post"
                        enctype="multipart/form-data" onsubmit="return validateForm();">>
                        @csrf
                        <div class="mb-3 row">
                            <label for="title" class="form-label col-md-3">insight Title</label>
                            <div class="col-md-8">
                                <input class="form-control" id="title" value="{{ old('title', $post->title) }}"
                                    name="title" type="text" placeholder="Enter insight Title" maxlength="220">
                            </div>
                        </div>

                </div>
                <div class="mb-3 row">
                    <label for="image" class="form-label col-md-3">Upload Icon or svg </label>
                    <div class="col-md-8">
                        <input class="form-control col-md-8" type="file" id="image" name="image"
                            onchange="previewImage(this)">
                        <img id="hero_image_preview" src="{{ asset($post->image) }}" alt="Hero Image"
                            style="max-width: 100px; margin:5px;">
                    </div>
                </div>

                <div class="tile-footer">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-3">
                            <button class="btn btn-primary" type="submit"><i
                                    class="bi bi-check-circle-fill me-2"></i>Update insight</button>
                            <a style="text-decoration:none; color:white;" class="btn-primary btn"
                                href="/admin/insight/list">Back</a>
                            <span id="imageError" style="color: red;"></span><br>
                        </div>
                    </div>
                </div>
                </form>>
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


<script>
function validateForm() {
    var image = document.getElementById("image");


    if (!image || !image.files || !image.files[0]) {
        document.getElementById('imageError').innerHTML = '';
        return true;
    } else {
        var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.svg)$/i;
        if (!allowedExtensions.exec(image.value)) {
            document.getElementById('imageError').innerHTML = 'Invalid file type. Please select a valid image.';
            return false;
        } else {
            document.getElementById('imageError').innerHTML = '';
        }
        return true;
    }
    // Validate image type


    // Add any additional validation logic here

    // Allow form submission
}

function previewImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#hero_image_preview')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@include('admin.layouts.footer')