@include('admin.layouts.navbar')
<style>
.ck-editor__editable[role="textbox"] {
    /* Editing area */
    min-height: 400px;
}
</style>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="bi bi-table"></i> Create Case Study</h1>
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
                    <form class="form-horizontal" action="/admin/casestudy/store" method="post"
                        enctype="multipart/form-data" onsubmit="return validate();">>
                        @csrf
                        <div class="mb-3 row">
                            <label for="title" class="form-label col-md-3">Title</label>
                            <div class="col-md-8">
                                <input class="form-control" name="title" type="text" placeholder="Enter title" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="hero_image" class="form-label col-md-3">Hero Image</label>
                            <div class="col-md-8">
                                <input class="form-control" id="hero_image" name="hero_image" type="file" required
                                    accept="image/*">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="casecontent" class="form-label col-md-3">Content</label>
                            <div class="col-md-8">
                                <textarea class="form-control" id="casecontent" name="content" rows="5"
                                    placeholder="Enter content" required>Hello, World!</textarea>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="metadisc" class="form-label col-md-3">Meta Description (Optional)</label>
                            <div class="col-md-8">
                                <input class="form-control" name="metadisc" type="text" placeholder="Meta Description">
                            </div>
                        </div>
                        <div class="tile-footer">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-3">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="bi bi-check-circle-fill me-2"></i>Add Case Studies</button>
                                    <a style="text-decoration:none; color:white;" class="btn-primary btn"
                                        href="/admin/casestudy/list">Back</a>
                                    <span id="imageError" style="color: red;"></span><br>
                                </div>
                            </div>
                        </div>
                    </form>>

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
function validate() {
    var image = document.getElementById("hero_image");
    if (!image) {
        document.getElementById('imageError').innerHTML = 'Invalid file type. Please select a valid image.';
        return false;
    }
    // Validate image type
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.svg)$/i;
    if (!allowedExtensions.exec(image.value)) {
        document.getElementById('imageError').innerHTML = 'Invalid file type. Please select a valid image.';
        return false;
    } else {
        document.getElementById('imageError').innerHTML = '';
    }

    // Add any additional validation logic here

    return true; // Allow form submission
}
</script>


@include('admin.layouts.footer')