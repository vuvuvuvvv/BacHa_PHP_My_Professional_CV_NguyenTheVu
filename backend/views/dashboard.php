<?php
$commonUrl = Params::$common;
$uploadUrl = $commonUrl . '/upload';

$date = new DateTime("now", new DateTimeZone('Asia/Ho_Chi_Minh'));
?>


<!-- dropzonejs -->
<script src="../adminlte3/plugins/dropzone/min/dropzone.min.js"></script>

<div class="modal fade" id="addEducation" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="addEducationLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addEducationLabel">Add Education</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pt-0 pb-2">
                <form class="w-100 row mx-0">
                    <div class="w-100 form-group">
                        <label for="school_name">School Name:</label>
                        <input type="text" class="form-control" id="school_name">
                    </div>
                    <div class="w-100 form-group">
                        <label for="major">Major:</label>
                        <input type="text" class="form-control" id="major">
                    </div>
                    <div class="w-100 form-group">
                        <label for="start_time">Start Time:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" id="start_time" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/yyyy" data-mask>
                        </div>
                    </div>
                    <div class="w-100 form-group">
                        <label>End Time:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="end_time_option_edu" id="end_time_now" value="" checked>
                            <label class="form-check-label" for="end_time_now">
                                Now
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="end_time_option_edu" id="end_time_specific_edu" value="">
                            <label class="form-check-label" for="end_time_specific_edu">
                                Specific Time
                            </label>
                        </div>
                        <div class="input-group mt-2" id="end_time_group_edu" style="display: none;">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" id="end_time" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/yyyy" data-mask>
                        </div>
                    </div>
                    <div class="w-100">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('input[name="end_time_option_edu"]').change(function() {
            if ($('#end_time_specific_edu').is(':checked')) {
                $('#end_time_group_edu').show();
            } else {
                $('#end_time_group_edu').hide();
            }
        });
    });
</script>

<div class="modal fade" id="addWExp" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="addWExpLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addWExpLabel">Add Work experience</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pt-0 pb-2">
                <form class="w-100 row m-0 p-0">
                    <div class="w-100 form-group">
                        <label for="company_name">Company Name:</label>
                        <input type="text" class="form-control" id="company_name">
                    </div>
                    <div class="w-100 form-group">
                        <label for="position">Position:</label>
                        <input type="text" class="form-control" id="position">
                    </div>
                    <div class="w-100 form-group">
                        <label for="start_time">Start Time:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" id="start_time" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/yyyy" data-mask>
                        </div>
                    </div>
                    <div class="w-100 form-group">
                        <label>End Time:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="end_time_option_wexp" id="end_time_now_wexp" value="" checked>
                            <label class="form-check-label" for="end_time_now_wexp">
                                Now
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="end_time_option_wexp" id="end_time_specific_wexp" value="">
                            <label class="form-check-label" for="end_time_specific_wexp">
                                Specific Time
                            </label>
                        </div>
                        <div class="input-group mt-2" id="end_time_group_wexp" style="display: none;">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" id="end_time" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/yyyy" data-mask>
                        </div>
                    </div>
                    <div class="w-100 form-group">
                        <label for="description">Description:</label>
                        <textarea type="text" class="form-control" name="description" rows="5"></textarea>
                    </div>
                    <div class="w-100">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('input[name="end_time_option_wexp"]').change(function() {
            if ($('#end_time_specific_wexp').is(':checked')) {
                $('#end_time_group_wexp').show();
            } else {
                $('#end_time_group_wexp').hide();
            }
        });
    });
</script>


<div class="modal fade" id="addBlog" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="addBlogLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addBlogLabel">Add Blog</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pt-0 pb-2">
                <form class="w-100 row m-0 p-0">
                    <div class="w-100 form-group">
                        <label for="position">Image:</label>
                        <div class="w-100">
                            <div class="w-100 rounded d-flex align-items-center justify-content-center text-center"
                                style="aspect-ratio: 2 / 1; border: 2px solid #ced4da; border-style: dashed !important;"
                                id="dropzoneContainer">
                                Click to slelect<br>Or<br>Drag and drop file here!
                            </div>
                        </div>
                        <div class="dz-preview dz-file-preview w-100 d-none"
                            style="aspect-ratio: 2 / 1;"
                            id="dropzonePreview">
                            <div id="template" class="w-100">
                                <div class="m-0 p-0 w-100">
                                    <span class="preview w-100 d-flex justify-content-center"><img src="data:," class="w-100" style="object-fit: contain; background-color: #fff; aspect-ratio: 2 / 1;" alt="" data-dz-thumbnail /></span>
                                </div>

                                <div class="w-100 px-3 mt-2 d-flex align-items-center gap-2">
                                    <div class="btn-group" id="actions">
                                        <button data-dz-remove class="btn btn-danger rounded delete">
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>
                    <div class="w-100 form-group">
                        <label for="content">Content:</label>
                        <textarea class="form-control" name="content" rows="3"></textarea>
                    </div>
                    <div class="w-100">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>

            <script>
                $(document).ready(function() {
                    // Dropzone configuration
                    Dropzone.autoDiscover = false;
                    let previewNode = document.querySelector("#template");
                    previewNode.id = "";
                    let previewTemplate = previewNode.parentNode.innerHTML;
                    previewNode.parentNode.removeChild(previewNode);

                    let myDropzone = new Dropzone("#dropzoneContainer", {
                        url: "/blog/add", // Adjust URL if necessary
                        parallelUploads: 1,
                        previewTemplate: previewTemplate,
                        previewsContainer: "#dropzonePreview",
                        clickable: "#dropzoneContainer",
                        autoProcessQueue: false, // Prevent Dropzone from submitting automatically
                        init: function() {
                            this.on("addedfile", function(file) {
                                if (this.files.length > 1) {
                                    this.removeFile(this.files[0]);
                                }
                                $("#dropzoneContainer").removeClass('d-flex').addClass('d-none');
                                $("#dropzonePreview").removeClass('d-none');
                            });

                            this.on("removedfile", function() {
                                if (this.files.length === 0) {
                                    $("#dropzoneContainer").removeClass('d-none').addClass('d-flex');
                                    $("#dropzonePreview").addClass('d-none');
                                }
                            });
                        }
                    });

                    // Handle form submission
                    $("form").on("submit", function(event) {
                        event.preventDefault();

                        // Collect form data
                        let formData = new FormData(this);
                        // Add Dropzone file to form data
                        myDropzone.getAcceptedFiles().forEach(file => {
                            formData.append('blog_image', file);
                        });

                        // AJAX request to submit the form
                        $.ajax({
                            url: '/blog/add', // Adjust URL if necessary
                            method: 'POST',
                            data: formData,
                            contentType: false,
                            processData: false,
                            success: function(response) {
                                let res = JSON.parse(response);
                                if (res.success) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Blog Added!',
                                        text: 'Your blog has been added successfully.',
                                        confirmButtonText: 'OK'
                                    }).then(() => {
                                        $('#addBlog').modal('hide'); // Hide the modal
                                        location.reload(); // Reload page after success
                                    });
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Error!',
                                        text: res.error || 'An error occurred while adding the blog.',
                                        confirmButtonText: 'OK'
                                    });
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error('AJAX Error:', status, error); // Debug AJAX errors
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error!',
                                    text: 'An error occurred while processing your request.',
                                    confirmButtonText: 'OK'
                                });
                            }
                        });
                    });
                });
            </script>

        </div>
    </div>
</div>

<div class="modal fade" id="addproject" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="addprojectLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addprojectLabel">Add project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pt-0 pb-2">
                <form class="w-100 row m-0 p-0">
                    <div class="w-100 form-group">
                        <label for="position">Image:</label>
                        <div class="w-100">
                            <div class="w-100 rounded d-flex align-items-center justify-content-center text-center"
                                style="aspect-ratio: 2 / 1; border: 2px solid #ced4da; border-style: dashed !important;"
                                id="dropzoneContainer">
                                Click to slelect<br>Or<br>Drag and drop file here!
                            </div>
                        </div>
                        <div class="dz-preview dz-file-preview w-100 d-none"
                            style="aspect-ratio: 2 / 1;"
                            id="dropzonePreview">
                            <div id="template" class="w-100">
                                <div class="m-0 p-0 w-100">
                                    <span class="preview w-100 d-flex justify-content-center"><img src="data:," class="w-100" style="object-fit: contain; background-color: #fff; aspect-ratio: 2 / 1;" alt="" data-dz-thumbnail /></span>
                                </div>

                                <div class="w-100 px-3 mt-2 d-flex align-items-center gap-2">
                                    <div class="btn-group" id="actions">
                                        <button data-dz-remove class="btn btn-danger rounded delete">
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 form-group">
                        <label for="pj_name">Project name:</label>
                        <input type="text" name="prject_name" class="form-control" id="pj_name">
                    </div>
                    <div class="w-100 form-group">
                        <label for="position">Position:</label>
                        <input type="text" name="position" class="form-control" id="position">
                    </div>
                    <div class="w-100 form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>
                    </div>
                    <div class="w-100">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>

            <script>
                $(document).ready(function() {
                    // Dropzone configuration
                    Dropzone.autoDiscover = false;
                    let previewNode = document.querySelector("#template");
                    previewNode.id = "";
                    let previewTemplate = previewNode.parentNode.innerHTML;
                    previewNode.parentNode.removeChild(previewNode);

                    let myDropzone = new Dropzone("#dropzoneContainer", {
                        url: "/blog/add", // Adjust URL if necessary
                        parallelUploads: 1,
                        previewTemplate: previewTemplate,
                        previewsContainer: "#dropzonePreview",
                        clickable: "#dropzoneContainer",
                        autoProcessQueue: false, // Prevent Dropzone from submitting automatically
                        init: function() {
                            this.on("addedfile", function(file) {
                                if (this.files.length > 1) {
                                    this.removeFile(this.files[0]);
                                }
                                $("#dropzoneContainer").removeClass('d-flex').addClass('d-none');
                                $("#dropzonePreview").removeClass('d-none');
                            });

                            this.on("removedfile", function() {
                                if (this.files.length === 0) {
                                    $("#dropzoneContainer").removeClass('d-none').addClass('d-flex');
                                    $("#dropzonePreview").addClass('d-none');
                                }
                            });
                        }
                    });

                    // Handle form submission
                    $("form").on("submit", function(event) {
                        event.preventDefault();

                        // Collect form data
                        let formData = new FormData(this);
                        // Add Dropzone file to form data
                        myDropzone.getAcceptedFiles().forEach(file => {
                            formData.append('blog_image', file);
                        });

                        // AJAX request to submit the form
                        $.ajax({
                            url: '/blog/add', // Adjust URL if necessary
                            method: 'POST',
                            data: formData,
                            contentType: false,
                            processData: false,
                            success: function(response) {
                                let res = JSON.parse(response);
                                if (res.success) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Blog Added!',
                                        text: 'Your blog has been added successfully.',
                                        confirmButtonText: 'OK'
                                    }).then(() => {
                                        $('#addBlog').modal('hide'); // Hide the modal
                                        location.reload(); // Reload page after success
                                    });
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Error!',
                                        text: res.error || 'An error occurred while adding the blog.',
                                        confirmButtonText: 'OK'
                                    });
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error('AJAX Error:', status, error); // Debug AJAX errors
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error!',
                                    text: 'An error occurred while processing your request.',
                                    confirmButtonText: 'OK'
                                });
                            }
                        });
                    });
                });
            </script>

        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row m-0 px-0 py-3">
            <div class="col-xl-6 row m-0" style="height: max-content !important;">

                <div class="w-100 mb-3">
                    <form class="w-100 row m-0 bg-white rounded shadow-sm p-3">

                        <button class="btn m-0 px-0 w-100 btn-secondary rounded-0" type="button" data-toggle="collapse" data-target="#userInfoCollapse" aria-expanded="false" aria-controls="userInfoCollapse">
                            <h4 class="w-100">User Information</h4>
                        </button>
                        <div class="collapse m-0 p-0 w-100" id="userInfoCollapse">
                            <div class="col-md-6 col-lg-12 col-xxl-6 form-group">
                                <label for="fullname">Fullname:</label>
                                <input type="text" value="<?= isset($user['fullname']) ? $user['fullname'] : ''  ?>" class="form-control" id="fullname">
                            </div>
                            <div class="col-md-6 col-lg-12 col-xxl-6 form-group">
                                <label for="job">Job:</label>
                                <input type="text" value="<?= isset($user['job']) ? $user['job'] : ''  ?>" class="form-control" id="job">
                            </div>
                            <div class="col-md-6 col-lg-12 col-xxl-6 form-group">
                                <label>Date of birth:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input spellcheck="false" value="<?= isset($user['date_of_birth']) ? $user['date_of_birth'] : ''  ?>" type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-12 col-xxl-6 form-group">
                                <label for="phone">Phone number:</label>
                                <input type="text" value="<?= isset($user['phone']) ? $user['phone'] : ''  ?>" class="form-control" id="phone">
                            </div>
                            <div class="col-md-6 col-lg-12 col-xxl-6 form-group">
                                <label for="email">Email:</label>
                                <input type="email" value="<?= isset($user['email']) ? $user['email'] : ''  ?>" class="form-control" id="email">
                            </div>
                            <div class="col-md-6 col-lg-12 col-xxl-6 form-group">
                                <label for="address">Address:</label>
                                <input type="text" value="<?= isset($user['address']) ? $user['address'] : ''  ?>" class="form-control" id="address">
                            </div>
                            <div class="col-md-6 col-lg-12 col-xxl-6 form-group">
                                <label for="social_network">Social Network:</label>
                                <input type="text" value="<?= isset($user['social_network']) ? $user['social_network'] : ''  ?>" class="form-control" id="social_network">
                            </div>
                            <div class="col-md-6 col-lg-12 col-xxl-6 form-group">
                                <label for="description">Description:</label>
                                <textarea class="form-control" rows="5" id="description"><?= isset($user['description']) ? $user['description'] : ''  ?></textarea>
                            </div>
                            <div class="col">
                                <button class="btn btn-warning" type="submit">Save edit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="w-100 mb-3">
                    <div class="w-100 p-3 rounded shadow-sm bg-white">
                        <button class="btn m-0 px-0 w-100 btn-secondary rounded-0" type="button" data-toggle="collapse" data-target="#wExpCollapse" aria-expanded="false" aria-controls="wExpCollapse">
                            <h4>Work Experience</h4>
                        </button>
                        <div class="collapse m-0 p-0 w-100" id="wExpCollapse">
                            <?php if (isset($workExperience) && count($workExperience) > 0) : ?>
                                <?php foreach ($workExperience as $key => $wexp) : ?>
                                    <form class="w-100 p-2 mb-3 row mx-0" data-id="<?= $key ?>" style="background-color: #eee;">
                                        <h5 class="w-100"><?= ($key + 1) . '. ' . (isset($wexp['company_name']) ? $wexp['company_name'] : '')  ?></h5>
                                        <div class="col-md-6 col-lg-12 col-xxl-6 form-group">
                                            <label for="company_name_<?= $key ?>">Company Name:</label>
                                            <input type="text" value="<?= isset($wexp['company_name']) ? $wexp['company_name'] : ''  ?>" class="form-control" id="school_name_<?= $key ?>">
                                        </div>
                                        <div class="col-md-6 col-lg-12 col-xxl-6 form-group">
                                            <label for="position_<?= $key ?>">Position:</label>
                                            <input type="text" value="<?= isset($wexp['position']) ? $wexp['position'] : ''  ?>" class="form-control" id="position_<?= $key ?>">
                                        </div>
                                        <div class="col-md-6 col-lg-12 col-xxl-6 form-group">
                                            <label for="description_<?= $key ?>">Description:</label>
                                            <textarea type="text" class="form-control"><?= isset($wexp['description']) ? $wexp['description'] : ''  ?></textarea>
                                        </div>
                                        <div class="col-md-6 col-lg-12 col-xxl-6 form-group">
                                            <label for="start_time_<?= $key ?>">Start Time:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="start_time_<?= $key ?>" value="<?= isset($wexp['start_time']) ? $wexp['start_time'] : '' ?>" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/yyyy" data-mask>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-12 col-xxl-6 form-group">
                                            <label>End Time:</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="end_time_option_wexp_<?= $key ?>" id="end_time_now_<?= $key ?>" value=""
                                                    <?= !isset($wexp['end_time']) || is_null($wexp['end_time']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="end_time_now_<?= $key ?>">
                                                    Now
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="end_time_option_wexp_<?= $key ?>" id="end_time_specific_wexp_<?= $key ?>" value="<?= isset($wexp['end_time']) ? $wexp['end_time'] : '' ?>"
                                                    <?= isset($wexp['end_time']) && !is_null($wexp['end_time']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="end_time_specific_wexp_<?= $key ?>">
                                                    Specific Time
                                                </label>
                                            </div>
                                            <div class="input-group mt-2" id="end_time_group_wexp_<?= $key ?>" style="display: <?= isset($wexp['end_time']) && !is_null($wexp['end_time']) ? 'flex' : 'none' ?>;">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="end_time_<?= $key ?>" value="<?= isset($wexp['end_time']) ? $wexp['end_time'] : '' ?>" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/yyyy" data-mask>
                                            </div>
                                        </div>
                                        <div class="w-100">
                                            <button class="btn btn-warning" type="submit">Save edit</button>
                                        </div>
                                    </form>
                                <?php endforeach; ?>

                                <script>
                                    $(document).ready(function() {
                                        // Sử dụng vòng lặp để gán sự kiện cho từng nhóm radio
                                        <?php foreach ($workExperience as $key => $wexp) : ?>
                                            $('input[name="end_time_option_wexp_<?= $key ?>"]').change(function() {
                                                if ($('#end_time_specific_wexp_<?= $key ?>').is(':checked')) {
                                                    $('#end_time_group_wexp_<?= $key ?>').show();
                                                } else {
                                                    $('#end_time_group_wexp_<?= $key ?>').hide();
                                                }
                                            });
                                        <?php endforeach; ?>
                                    });
                                </script>
                            <?php else: ?>
                                No result
                            <?php endif; ?>

                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addWExp">
                                Add new
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-100 mb-3">
                    <div class="w-100 p-3 rounded shadow-sm bg-white">
                        <button class="btn m-0 px-0 w-100 btn-secondary rounded-0" type="button" data-toggle="collapse" data-target="#projectCollapse" aria-expanded="false" aria-controls="projectCollapse">
                            <h4>Project</h4>
                        </button>
                        <div class="collapse m-0 p-0 w-100" id="projectCollapse">
                            <?php if (isset($projects) && count($projects) > 0) : ?>
                                <?php foreach ($projects as $key => $pj) : ?>
                                    <div class="modal fade" id="changeImgproject_<?= $key ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="changeImgproject_<?= $key ?>Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="changeImgproject_<?= $key ?>Label">Edit</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body m-0 pt-0">
                                                    <div class="w-100">
                                                        <div class="w-100 rounded d-flex align-items-center justify-content-center text-center"
                                                            style="aspect-ratio: 2 / 1; border: 2px solid #ced4da; border-style: dashed !important;"
                                                            id="dropzoneContainer_<?= $key ?>">
                                                            Click to slelect<br>Or<br>Drag and drop file here!
                                                        </div>
                                                    </div>
                                                    <div class="dz-preview dz-file-preview w-100 d-none"
                                                        style="aspect-ratio: 2 / 1;"
                                                        id="dropzonePreview_<?= $key ?>">
                                                        <div id="template_<?= $key ?>" class="w-100">
                                                            <div class="m-0 p-0 w-100">
                                                                <span class="preview w-100 d-flex justify-content-center"><img src="data:," class="w-100" style="object-fit: contain; background-color: #fff; aspect-ratio: 2 / 1;" alt="" data-dz-thumbnail /></span>
                                                            </div>

                                                            <div class="w-100 d-flex mt-2 align-items-center" id="total_progress_<?= $key ?>">
                                                                <div class="progress progress-striped active w-100 bg-white" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                                                    <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                                                </div>
                                                            </div>

                                                            <div class="w-100 px-3 mt-2 d-flex align-items-center gap-2">
                                                                <div class="btn-group" id="actions_<?= $key ?>">
                                                                    <button class="btn btn-primary start rounded mr-3">
                                                                        Save
                                                                    </button>
                                                                    <button data-dz-remove class="btn btn-danger rounded delete">
                                                                        Delete
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        Dropzone.autoDiscover = false;

                                        document.addEventListener("DOMContentLoaded", function() {
                                            var dropzoneElement = document.querySelector("#dropzoneContainer_<?= $key ?>");

                                            if (dropzoneElement && !dropzoneElement.dropzone) {
                                                let previewNode = document.querySelector("#template_<?= $key ?>");
                                                previewNode.id = "";
                                                let previewTemplate = previewNode.parentNode.innerHTML;
                                                previewNode.parentNode.removeChild(previewNode);
                                                var myDropzone<?= $key ?> = new Dropzone("#dropzoneContainer_<?= $key ?>", { // Ensure we're targeting the correct form element
                                                    url: "/project/changeImage",
                                                    parallelUploads: 1,
                                                    previewTemplate: previewTemplate,
                                                    autoQueue: false,
                                                    previewsContainer: "#dropzonePreview_<?= $key ?>",
                                                    clickable: "#dropzoneContainer_<?= $key ?>",
                                                    params: {
                                                        id: <?= $pj['id'] ?>
                                                    },
                                                    accept: function(file, done) {
                                                        console.log("uploaded");
                                                        done();
                                                    },
                                                    init: function() {
                                                        this.on("addedfile", function() {
                                                            if (this.files.length > 0) {
                                                                $("#dropzoneContainer_<?= $key ?>").removeClass('d-flex').addClass('d-none');
                                                                $("#dropzonePreview_<?= $key ?>").removeClass('d-none');
                                                            }

                                                            if (this.files[1] != null) {
                                                                this.removeFile(this.files[0]);
                                                            }
                                                        });


                                                        this.on("removedfile", function(file) {
                                                            if (this.files.length > 0) {
                                                                $("#dropzoneContainer_<?= $key ?>").removeClass('d-none').addClass('d-flex');
                                                                $("#dropzonePreview_<?= $key ?>").addClass('d-none');
                                                            }
                                                        });

                                                        this.on("sending", function(file) {
                                                            console.log("Đang gửi tệp: " + file.name);
                                                        });

                                                        this.on("success", function(file, response) {
                                                            console.log("Tệp đã được tải lên thành công: " + file.name);
                                                            console.log("Phản hồi từ máy chủ: ", response);

                                                            Swal.fire({
                                                                title: "Thành công!",
                                                                text: "Ảnh đã được đổi.",
                                                                icon: "warning",
                                                                showCancelButton: false,
                                                                confirmButtonColor: "#3085d6",
                                                                confirmButtonText: "Tải lại trang",
                                                                allowOutsideClick: false,
                                                                allowEscapeKey: false,
                                                                allowEnterKey: true,
                                                            }).then((result) => {
                                                                if (result.isConfirmed) {
                                                                    location.reload()
                                                                }
                                                            });
                                                        });

                                                        this.on("error", function(file, response) {
                                                            console.log("Tải lên tệp thất bại: " + file.name);
                                                            console.log("Lỗi từ máy chủ: ", response);
                                                        });

                                                        this.on("complete", function(file) {
                                                            console.log("Quá trình tải lên hoàn tất cho tệp: " + file.name);
                                                        });
                                                    }
                                                });

                                                myDropzone<?= $key ?>.on("sending", function(file) {
                                                    file.previewElement.querySelector("#actions_<?= $key ?> .start").setAttribute("disabled", "disabled")
                                                })

                                                myDropzone<?= $key ?>.on("addedfile", function(file) {
                                                    file.previewElement.querySelector("#actions_<?= $key ?> .start").onclick = function() {
                                                        myDropzone<?= $key ?>.enqueueFile(file);
                                                    };
                                                });

                                                var startButton = document.querySelector("#actions_<?= $key ?> .start");

                                                if (startButton) {
                                                    startButton.onclick = function() {
                                                        myDropzone<?= $key ?>.enqueueFiles(myDropzone<?= $key ?>.getFilesWithStatus(Dropzone.ADDED));
                                                    };
                                                }
                                            }
                                        });
                                    </script>

                                    <form class="w-100 p-2 my-3 row mx-0" data-id="<?= $pj['id'] ?>" style="background-color: #eee;">
                                        <!-- <h5 class="w-100"><?= ($key + 1) . '. ' . (isset($pj['project_name']) ? $pj['project_name'] : '')  ?></h5> -->

                                        <button class="btn m-0 px-0 w-100 btn-primary rounded-0" type="button" data-toggle="collapse" data-target="#projectItemCollapse_<?= $key ?>" aria-expanded="false" aria-controls="projectItemCollapse_<?= $key ?>">

                                            <h5 class="w-100"><?= ($key + 1) . '. ' . (isset($pj['project_name']) ? $pj['project_name'] : '')  ?></h5>
                                        </button>
                                        <div class="collapse row m-0 p-0 w-100" id="projectItemCollapse_<?= $key ?>">

                                            <div class="col-md-6 col-xl-12 col-xxl-6 form-group">
                                                <label>Image:</label>
                                                <br />
                                                <img src="<?= $uploadUrl . $pj['project_image'] ?>" class="w-100" style="object-fit: contain; background-color: #fff; max-width: 400px; min-width: 80px; aspect-ratio: 1 / 1;" alt="<?= $pj['project_name'] ?>"><br>

                                                <button type="button" class="btn btn-success mt-1" data-toggle="modal" data-target="#changeImgproject_<?= $key ?>">
                                                    Change Image
                                                </button>
                                            </div>

                                            <div class="col-md-6 col-xl-12 row m-0 p-0 " style="height: max-content;">
                                                <div class="w-100 form-group">
                                                    <label for="pj_name_<?= $key ?>">Project name:</label>
                                                    <input type="text" value="<?= isset($pj['project_name']) ? $pj['project_name'] : ''  ?>" class="form-control" id="pj_name_<?= $key ?>">
                                                </div>
                                                <div class="w-100 form-group">
                                                    <label for="position_<?= $key ?>">Position:</label>
                                                    <input type="text" value="<?= isset($pj['position']) ? $pj['position'] : ''  ?>" class="form-control" id="position_<?= $key ?>">
                                                </div>

                                                <div class="w-100 form-group">
                                                    <label for="description_<?= $key ?>">Description:</label>
                                                    <textarea class="form-control"><?= isset($pj['description']) ? $pj['description'] : ''  ?></textarea>
                                                </div>
                                            </div>

                                            <div class="w-100">
                                                <button type="button" class="btn btn-warning mt-1 save-project-edit-btn" data-key="<?= $key ?>">Save edit</button>
                                                <button type="button" class="btn btn-danger mt-1 delete-project-btn" data-key="<?= $key ?>">Delete</button>
                                            </div>
                                        </div>
                                    </form>
                                <?php endforeach; ?>

                                <script>
                                    $(document).ready(function() {
                                        // $(".save-project-edit-btn").on("click", function() {
                                        //     var form = $(this).closest("form");
                                        //     var projectId = form.data('id');

                                        //     // Check if "Now" is selected, otherwise get the specific time
                                        //     var createdTimeOption = form.find('input[name^="created_time_option"]:checked').attr('id');
                                        //     var createdTime = '';

                                        //     if (createdTimeOption.includes('specific')) {
                                        //         createdTime = form.find('input[id^="created_time_specific_"]').val();
                                        //     }

                                        //     var formData = {
                                        //         id: projectId,
                                        //         title: form.find('input[id^="title_"]').val(),
                                        //         created_time: createdTime, // This will be empty if "Now" is selected
                                        //         content: form.find('textarea').val()
                                        //     };

                                        //     $.ajax({
                                        //         url: "/project/edit",
                                        //         method: "POST",
                                        //         data: formData,
                                        //         success: function(response) {
                                        //             let res = JSON.parse(response);
                                        //             var isSuccess = res.success === true || res.success === 'true';

                                        //             if (isSuccess) {
                                        //                 Swal.fire({
                                        //                     icon: 'success',
                                        //                     title: 'Edit saved!',
                                        //                     text: 'Your changes have been saved successfully.',
                                        //                     confirmButtonText: 'OK'
                                        //                 }).then(() => {
                                        //                     location.reload();
                                        //                 });
                                        //             } else {
                                        //                 Swal.fire({
                                        //                     icon: 'error',
                                        //                     title: 'Error!',
                                        //                     text: res.error || 'An error occurred while saving your changes.',
                                        //                     confirmButtonText: 'OK'
                                        //                 });
                                        //             }
                                        //         },
                                        //         error: function(jqXHR, textStatus, errorThrown) {
                                        //             console.error("AJAX Error:", textStatus, errorThrown);
                                        //             console.error("Response Text:", jqXHR.responseText);
                                        //             Swal.fire({
                                        //                 icon: 'error',
                                        //                 title: 'Error!',
                                        //                 text: 'Aaaan error occurred while processing your request.',
                                        //                 confirmButtonText: 'OK'
                                        //             });
                                        //         }

                                        //     });
                                        // });

                                        $(".delete-project-btn").on("click", function() {
                                            var form = $(this).closest("form");
                                            var projectId = form.data('id');

                                            $.ajax({
                                                url: "/project/delete",
                                                method: "POST",
                                                data: {
                                                    id: projectId
                                                },
                                                success: function(response) {
                                                    let res = JSON.parse(response);
                                                    console.log(res)
                                                    var isSuccess = res.success === true || res.success === 'true';

                                                    if (isSuccess) {
                                                        Swal.fire({
                                                            icon: 'success',
                                                            title: 'Sucess!',
                                                            text: 'Deleted successfully.',
                                                            confirmButtonText: 'OK'
                                                        }).then(() => {
                                                            location.reload();
                                                        });
                                                    } else {
                                                        Swal.fire({
                                                            icon: 'error',
                                                            title: 'Error!',
                                                            text: res.error || 'An error occurred while deleting your project.',
                                                            confirmButtonText: 'OK'
                                                        });
                                                    }
                                                },
                                                error: function(jqXHR, textStatus, errorThrown) {
                                                    console.error("AJAX Error:", textStatus, errorThrown);
                                                    console.error("Response Text:", jqXHR.responseText);
                                                    Swal.fire({
                                                        icon: 'error',
                                                        title: 'Error!',
                                                        text: 'An error occurred while processing your request.',
                                                        confirmButtonText: 'OK'
                                                    });
                                                }

                                            });
                                        });
                                    });
                                </script>
                            <?php else: ?>
                                No result
                            <?php endif; ?>

                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addproject">
                                Add new
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 row m-0" style="height: max-content !important;">
                <div class="w-100 mb-3">
                    <div class="w-100 p-3 rounded shadow-sm bg-white">
                        <button class="btn m-0 px-0 w-100 btn-secondary rounded-0" type="button" data-toggle="collapse" data-target="#educationCollapse" aria-expanded="false" aria-controls="educationCollapse">
                            <h4>Education</h4>
                        </button>
                        <div class="collapse m-0 p-0 w-100" id="educationCollapse">
                            <?php if (isset($educations) && count($educations) > 0) : ?>
                                <?php foreach ($educations as $key => $education) : ?>
                                    <form class="w-100 p-2 mb-3 row mx-0" data-id="<?= $key ?>" style="background-color: #eee;">
                                        <h5 class="w-100"><?= ($key + 1) . '. ' . (isset($education['school_name']) ? $education['school_name'] : '')  ?></h5>
                                        <div class="col-md-6 col-lg-12 col-xxl-6 form-group">
                                            <label for="school_name_<?= $key ?>">School Name:</label>
                                            <input type="text" value="<?= isset($education['school_name']) ? $education['school_name'] : ''  ?>" class="form-control" id="school_name_<?= $key ?>">
                                        </div>
                                        <div class="col-md-6 col-lg-12 col-xxl-6 form-group">
                                            <label for="major_<?= $key ?>">Major:</label>
                                            <input type="text" value="<?= isset($education['major']) ? $education['major'] : ''  ?>" class="form-control" id="major_<?= $key ?>">
                                        </div>
                                        <div class="col-md-6 col-lg-12 col-xxl-6 form-group">
                                            <label for="start_time_<?= $key ?>">Start Time:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="start_time_<?= $key ?>" value="<?= isset($education['start_time']) ? $education['start_time'] : '' ?>" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/yyyy" data-mask>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-12 col-xxl-6 form-group">
                                            <label>End Time:</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="end_time_option_<?= $key ?>" id="end_time_now_<?= $key ?>" value=""
                                                    <?= !isset($education['end_time']) || is_null($education['end_time']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="end_time_now_<?= $key ?>">
                                                    Now
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="end_time_option_<?= $key ?>" id="end_time_specific_<?= $key ?>" value="<?= isset($education['end_time']) ? $education['end_time'] : '' ?>"
                                                    <?= isset($education['end_time']) && !is_null($education['end_time']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="end_time_specific_<?= $key ?>">
                                                    Specific Time
                                                </label>
                                            </div>
                                            <div class="input-group mt-2" id="end_time_group_<?= $key ?>" style="display: <?= isset($education['end_time']) && !is_null($education['end_time']) ? 'flex' : 'none' ?>;">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="end_time_<?= $key ?>" value="<?= isset($education['end_time']) ? $education['end_time'] : '' ?>" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/yyyy" data-mask>
                                            </div>
                                        </div>
                                        <div class="w-100">
                                            <button class="btn btn-warning" type="submit">Save edit</button>
                                        </div>
                                    </form>
                                <?php endforeach; ?>

                                <script>
                                    $(document).ready(function() {
                                        // Sử dụng vòng lặp để gán sự kiện cho từng nhóm radio
                                        <?php foreach ($educations as $key => $education) : ?>
                                            $('input[name="end_time_option_<?= $key ?>"]').change(function() {
                                                if ($('#end_time_specific_<?= $key ?>').is(':checked')) {
                                                    $('#end_time_group_<?= $key ?>').show();
                                                } else {
                                                    $('#end_time_group_<?= $key ?>').hide();
                                                }
                                            });
                                        <?php endforeach; ?>
                                    });
                                </script>
                            <?php else: ?>
                                No result
                            <?php endif; ?>

                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addEducation">
                                Add new
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-100 mb-3">
                    <div class="w-100 p-3 rounded shadow-sm bg-white">
                        <button class="btn m-0 px-0 w-100 btn-secondary rounded-0" type="button" data-toggle="collapse" data-target="#blogCollapse" aria-expanded="false" aria-controls="blogCollapse">
                            <h4>Blog</h4>
                        </button>
                        <div class="collapse m-0 p-0 w-100" id="blogCollapse">
                            <?php if (isset($blogs) && count($blogs) > 0) : ?>
                                <?php foreach ($blogs as $key => $blog) : ?>
                                    <div class="modal fade" id="changeImgBlog_<?= $key ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="changeImgBlog_<?= $key ?>Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="changeImgBlog_<?= $key ?>Label">Change Blog Image</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body m-0 pt-0">
                                                    <div class="w-100">
                                                        <div class="w-100 rounded d-flex align-items-center justify-content-center text-center"
                                                            style="aspect-ratio: 2 / 1; border: 2px solid #ced4da; border-style: dashed !important;"
                                                            id="blogDropzoneContainer_<?= $key ?>">
                                                            Click to slelect<br>Or<br>Drag and drop file here!
                                                        </div>
                                                    </div>
                                                    <div class="dz-preview dz-file-preview w-100 d-none"
                                                        style="aspect-ratio: 2 / 1;"
                                                        id="blogDropzonePreview_<?= $key ?>">
                                                        <div id="blog_prv_template_<?= $key ?>" class="w-100">
                                                            <div class="m-0 p-0 w-100">
                                                                <span class="preview w-100 d-flex justify-content-center"><img src="data:," class="w-100" style="object-fit: contain; background-color: #fff; aspect-ratio: 2 / 1;" alt="" data-dz-thumbnail /></span>
                                                            </div>

                                                            <div class="w-100 d-flex mt-2 align-items-center" id="total_progress_<?= $key ?>">
                                                                <div class="progress progress-striped active w-100 bg-white" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                                                    <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                                                </div>
                                                            </div>

                                                            <div class="w-100 px-3 mt-2 d-flex align-items-center gap-2">
                                                                <div class="btn-group" id="actions_<?= $key ?>">
                                                                    <button class="btn btn-primary start rounded mr-3">
                                                                        Save
                                                                    </button>
                                                                    <button data-dz-remove class="btn btn-danger rounded delete">
                                                                        Delete
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        Dropzone.autoDiscover = false;

                                        document.addEventListener("DOMContentLoaded", function() {
                                            var dropzoneElement = document.querySelector("#blogDropzoneContainer_<?= $key ?>");

                                            if (dropzoneElement && !dropzoneElement.dropzone) {
                                                let previewNode = document.querySelector("#blog_prv_template_<?= $key ?>");
                                                previewNode.id = "";
                                                let previewTemplate = previewNode.parentNode.innerHTML;
                                                previewNode.parentNode.removeChild(previewNode);
                                                var myDropzone<?= $key ?> = new Dropzone("#blogDropzoneContainer_<?= $key ?>", { // Ensure we're targeting the correct form element
                                                    url: "/blog/changeImage",
                                                    parallelUploads: 1,
                                                    previewTemplate: previewTemplate,
                                                    autoQueue: false,
                                                    previewsContainer: "#blogDropzonePreview_<?= $key ?>",
                                                    clickable: "#blogDropzoneContainer_<?= $key ?>",
                                                    params: {
                                                        id: <?= $blog['id'] ?>
                                                    },
                                                    accept: function(file, done) {
                                                        console.log("uploaded");
                                                        done();
                                                    },
                                                    init: function() {
                                                        this.on("addedfile", function() {
                                                            if (this.files.length > 0) {
                                                                $("#blogDropzoneContainer_<?= $key ?>").removeClass('d-flex').addClass('d-none');
                                                                $("#blogDropzonePreview_<?= $key ?>").removeClass('d-none');
                                                            }

                                                            if (this.files[1] != null) {
                                                                this.removeFile(this.files[0]);
                                                            }
                                                        });


                                                        this.on("removedfile", function(file) {
                                                            if (this.files.length > 0) {
                                                                $("#blogDropzoneContainer_<?= $key ?>").removeClass('d-none').addClass('d-flex');
                                                                $("#blogDropzonePreview_<?= $key ?>").addClass('d-none');
                                                            }
                                                        });

                                                        this.on("sending", function(file) {
                                                            console.log("Đang gửi tệp: " + file.name);
                                                        });

                                                        this.on("success", function(file, response) {
                                                            console.log("Tệp đã được tải lên thành công: " + file.name);
                                                            console.log("Phản hồi từ máy chủ: ", response);

                                                            Swal.fire({
                                                                title: "Thành công!",
                                                                text: "Ảnh đã được đổi.",
                                                                icon: "warning",
                                                                showCancelButton: false,
                                                                confirmButtonColor: "#3085d6",
                                                                confirmButtonText: "Tải lại trang",
                                                                allowOutsideClick: false,
                                                                allowEscapeKey: false,
                                                                allowEnterKey: true,
                                                            }).then((result) => {
                                                                if (result.isConfirmed) {
                                                                    location.reload()
                                                                }
                                                            });
                                                        });

                                                        this.on("error", function(file, response) {
                                                            console.log("Tải lên tệp thất bại: " + file.name);
                                                            console.log("Lỗi từ máy chủ: ", response);
                                                        });

                                                        this.on("complete", function(file) {
                                                            console.log("Quá trình tải lên hoàn tất cho tệp: " + file.name);
                                                        });
                                                    }
                                                });

                                                myDropzone<?= $key ?>.on("sending", function(file) {
                                                    file.previewElement.querySelector("#actions_<?= $key ?> .start").setAttribute("disabled", "disabled")
                                                })

                                                myDropzone<?= $key ?>.on("addedfile", function(file) {
                                                    file.previewElement.querySelector("#actions_<?= $key ?> .start").onclick = function() {
                                                        myDropzone<?= $key ?>.enqueueFile(file);
                                                    };
                                                });

                                                var startButton = document.querySelector("#actions_<?= $key ?> .start");

                                                if (startButton) {
                                                    startButton.onclick = function() {
                                                        myDropzone<?= $key ?>.enqueueFiles(myDropzone<?= $key ?>.getFilesWithStatus(Dropzone.ADDED));
                                                    };
                                                }
                                            }
                                        });
                                    </script>

                                    <form class="w-100 p-2 my-3 row mx-0" data-id="<?= $blog['id'] ?>" style="background-color: #eee;">
                                        <!-- <h5 class="w-100"><?= ($key + 1) . '. ' . (isset($blog['title']) ? $blog['title'] : '')  ?></h5> -->

                                        <button class="btn m-0 px-0 w-100 btn-primary rounded-0" type="button" data-toggle="collapse" data-target="#blogItemCollapse_<?= $key ?>" aria-expanded="false" aria-controls="blogItemCollapse_<?= $key ?>">

                                            <h5 class="w-100"><?= ($key + 1) . '. ' . (isset($blog['title']) ? $blog['title'] : '')  ?></h5>
                                        </button>
                                        <div class="collapse row m-0 p-0 w-100" id="blogItemCollapse_<?= $key ?>">

                                            <div class="col-md-6 col-xl-12 col-xxl-6 form-group">
                                                <label>Image:</label>
                                                <br />
                                                <img src="<?= $uploadUrl . $blog['image'] ?>" class="w-100" style="object-fit: contain; background-color: #fff; max-width: 400px; min-width: 80px; aspect-ratio: 1 / 1;" alt="<?= $blog['title'] ?>"><br>

                                                <button type="button" class="btn btn-success mt-1" data-toggle="modal" data-target="#changeImgBlog_<?= $key ?>">
                                                    Change Image
                                                </button>
                                            </div>

                                            <div class="col-md-6 col-xl-12 row m-0 p-0 " style="height: max-content;">
                                                <div class="w-100 form-group">
                                                    <label for="title_<?= $key ?>">Title:</label>
                                                    <input type="text" value="<?= isset($blog['title']) ? $blog['title'] : ''  ?>" class="form-control" id="title_<?= $key ?>">
                                                </div>
                                                <div class="w-100 form-group">
                                                    <label>Created Time:</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="created_time_option" id="created_time_now_<?= $key ?>" value=""
                                                            <?= !isset($blog['created_at']) || is_null($blog['created_at']) ? 'checked' : '' ?>>
                                                        <label class="form-check-label" for="created_time_now_<?= $key ?>">
                                                            Now
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="created_time_option" id="created_time_specific_<?= $key ?>" value="<?= isset($blog['created_at']) ? $blog['created_at'] : '' ?>"
                                                            <?= isset($blog['created_at']) && !is_null($blog['created_at']) ? 'checked' : '' ?>>
                                                        <label class="form-check-label" for="created_time_specific_<?= $key ?>">
                                                            Specific Time
                                                        </label>
                                                    </div>
                                                    <div class="input-group mt-2" id="created_time_group_<?= $key ?>" style="display: <?= isset($blog['created_at']) && !is_null($blog['created_at']) ? 'flex' : 'none' ?>;">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                        </div>
                                                        <input type="datetime" class="form-control" value="<?= $date->format('Y-m-d H:i:s') ?>">
                                                    </div>
                                                </div>
                                                <div class="w-100 form-group">
                                                    <label for="content_<?= $key ?>">Content:</label>
                                                    <textarea class="form-control"><?= isset($blog['content']) ? $blog['content'] : ''  ?></textarea>
                                                </div>
                                            </div>

                                            <div class="w-100">
                                                <button type="button" class="btn btn-warning mt-1 save-blog-edit-btn" data-key="<?= $key ?>">Save edit</button>
                                                <button type="button" class="btn btn-danger mt-1 delete-blog-btn" data-key="<?= $key ?>">Delete</button>
                                            </div>
                                        </div>
                                    </form>
                                <?php endforeach; ?>

                                <script>
                                    $(document).ready(function() {
                                        $(".save-blog-edit-btn").on("click", function() {
                                            var form = $(this).closest("form");
                                            var blogId = form.data('id');

                                            // Check if "Now" is selected, otherwise get the specific time
                                            var createdTimeOption = form.find('input[name^="created_time_option"]:checked').attr('id');
                                            var createdTime = '';

                                            if (createdTimeOption.includes('specific')) {
                                                createdTime = form.find('input[id^="created_time_specific_"]').val();
                                            }

                                            var formData = {
                                                id: blogId,
                                                title: form.find('input[id^="title_"]').val(),
                                                created_time: createdTime, // This will be empty if "Now" is selected
                                                content: form.find('textarea').val()
                                            };

                                            $.ajax({
                                                url: "/blog/edit",
                                                method: "POST",
                                                data: formData,
                                                success: function(response) {
                                                    let res = JSON.parse(response);
                                                    var isSuccess = res.success === true || res.success === 'true';

                                                    if (isSuccess) {
                                                        Swal.fire({
                                                            icon: 'success',
                                                            title: 'Edit saved!',
                                                            text: 'Your changes have been saved successfully.',
                                                            confirmButtonText: 'OK'
                                                        }).then(() => {
                                                            location.reload();
                                                        });
                                                    } else {
                                                        Swal.fire({
                                                            icon: 'error',
                                                            title: 'Error!',
                                                            text: res.error || 'An error occurred while saving your changes.',
                                                            confirmButtonText: 'OK'
                                                        });
                                                    }
                                                },
                                                error: function(jqXHR, textStatus, errorThrown) {
                                                    console.error("AJAX Error:", textStatus, errorThrown);
                                                    console.error("Response Text:", jqXHR.responseText);
                                                    Swal.fire({
                                                        icon: 'error',
                                                        title: 'Error!',
                                                        text: 'Aaaan error occurred while processing your request.',
                                                        confirmButtonText: 'OK'
                                                    });
                                                }

                                            });
                                        });

                                        $(".delete-blog-btn").on("click", function() {
                                            var form = $(this).closest("form");
                                            var blogId = form.data('id');

                                            $.ajax({
                                                url: "/blog/delete",
                                                method: "POST",
                                                data: {
                                                    id: blogId
                                                },
                                                success: function(response) {
                                                    let res = JSON.parse(response);
                                                    console.log(res)
                                                    var isSuccess = res.success === true || res.success === 'true';

                                                    if (isSuccess) {
                                                        Swal.fire({
                                                            icon: 'success',
                                                            title: 'Sucess!',
                                                            text: 'Deleted successfully.',
                                                            confirmButtonText: 'OK'
                                                        }).then(() => {
                                                            location.reload();
                                                        });
                                                    } else {
                                                        Swal.fire({
                                                            icon: 'error',
                                                            title: 'Error!',
                                                            text: res.error || 'An error occurred while deleting your blog.',
                                                            confirmButtonText: 'OK'
                                                        });
                                                    }
                                                },
                                                error: function(jqXHR, textStatus, errorThrown) {
                                                    console.error("AJAX Error:", textStatus, errorThrown);
                                                    console.error("Response Text:", jqXHR.responseText);
                                                    Swal.fire({
                                                        icon: 'error',
                                                        title: 'Error!',
                                                        text: 'An error occurred while processing your request.',
                                                        confirmButtonText: 'OK'
                                                    });
                                                }

                                            });
                                        });
                                    });
                                </script>
                                <script>
                                    $(document).ready(function() {
                                        // Sử dụng vòng lặp để gán sự kiện cho từng nhóm radio
                                        <?php foreach ($blogs as $key => $blog) : ?>
                                            $('input[name="created_time_option_<?= $key ?>"]').change(function() {
                                                if ($('#created_time_specific_<?= $key ?>').is(':checked')) {
                                                    $('#created_time_group_<?= $key ?>').show();
                                                } else {
                                                    $('#created_time_group_<?= $key ?>').hide();
                                                }
                                            });
                                        <?php endforeach; ?>
                                    });
                                </script>
                            <?php else: ?>
                                No result
                            <?php endif; ?>

                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addBlog">
                                Add new
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-100 mb-3">
                    <div class="w-100 p-3 rounded shadow-sm bg-white">
                        <button class="btn m-0 px-0 w-100 btn-secondary rounded-0" type="button" data-toggle="collapse" data-target="#contactCollapse" aria-expanded="false" aria-controls="contactCollapse">
                            <h4>Contact</h4>
                        </button>
                        <div class="collapse m-0 p-0 w-100" id="contactCollapse">
                            <?php if (isset($contact) && count($contact) > 0) : ?>
                                <?php foreach ($contact as $key => $ctItem) : ?>
                                    <form class="w-100 p-2 mb-3 row mx-0" data-id="<?= $key ?>" style="background-color: #eee;">
                                        <h5 class="w-100"><?= ($key + 1) . '. ' . (isset($ctItem['subject']) ? $ctItem['subject'] : '')  ?></h5>
                                        <div class="col-md-6 col-lg-12 col-xxl-6 form-group">
                                            <label for="name_<?= $key ?>">Name:</label>
                                            <input type="text" value="<?= isset($ctItem['name']) ? $ctItem['name'] : ''  ?>" class="form-control" id="name_<?= $key ?>">
                                        </div>
                                        <div class="col-md-6 col-lg-12 col-xxl-6 form-group">
                                            <label for="email_<?= $key ?>">Email:</label>
                                            <input type="text" value="<?= isset($ctItem['email']) ? $ctItem['email'] : ''  ?>" class="form-control" id="email_<?= $key ?>">
                                        </div>
                                        <div class="col-md-6 col-lg-12 col-xxl-6 form-group">
                                            <label for="subject_<?= $key ?>">Subject:</label>
                                            <input type="text" value="<?= isset($ctItem['subject']) ? $ctItem['subject'] : ''  ?>" class="form-control" id="subject_<?= $key ?>">
                                        </div>
                                        <div class="col-md-6 col-lg-12 col-xxl-6 form-group">
                                            <label for="message_<?= $key ?>">Message:</label>
                                            <input type="text" value="<?= isset($ctItem['message']) ? $ctItem['message'] : ''  ?>" class="form-control" id="message_<?= $key ?>">
                                        </div>

                                        <div class="w-100">
                                            <button class="btn btn-warning" type="submit">Save edit</button>
                                        </div>
                                    </form>
                                <?php endforeach; ?>
                            <?php else: ?>
                                No result
                            <?php endif; ?>

                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addContact">
                                Add new
                            </button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- InputMask -->
<script src="../adminlte3/plugins/moment/moment.min.js"></script>
<script src="../adminlte3/plugins/inputmask/jquery.inputmask.min.js"></script>
<script>
    $('[data-mask]').inputmask()
</script>