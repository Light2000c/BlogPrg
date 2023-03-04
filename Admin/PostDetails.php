<?php
require_once 'Header.php';

?>
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Edit Post</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>

    <div class="row">

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">EDIT POST</h4>

                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <strong>Note!!</strong> Fields you don't want to make changes to should be left untouched.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <div class="row mt-5">
                        <div class="col-sm-6 col-lg-6 mb-4">
                            <div class="mb-5">
                                <img class="img-fluid" src="https://hips.hearstapps.com/amv-prod-gp.s3.amazonaws.com/gearpatrol/wp-content/uploads/2019/01/10-Best-Indoor-Plants-Gear-Patrol-lead-full.jpg" alt="">
                            </div>

                            <div class="form-group mb-3">
                                <label class="mb-2" for="image">Add New Image</label>
                                <input class="form-control" type="file">
                            </div>

                            <div>
                                <button class="btn btn-sm btn-primary">Update Image</button>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-6 mt-4">
                            <form action="">
                                <div class="form-group mb-3">
                                    <label for="Title">Title</label>
                                    <input class="form-control" type="text">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="Category">Category</label>
                                    <input class="form-control" type="text">
                                </div>


                                <div class="form-group mb-3">
                                    <label for="Details">Details</label>
                                    <textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-sm">Save Changes</button>
                                </div>

                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>


    </div>
</div>

<?php

require_once 'Footer.php';
?>