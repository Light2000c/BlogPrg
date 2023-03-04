<?php
require_once 'Header.php';

?>
<div class="page-content">

<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Add Team Members</li>
					</ol>
</nav>

<div class="row">

<div class="col-lg-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Add Team Members</h4>

								<div class="row mb-3">
									<div class="col-lg-3">
										<label for="FullName" class="col-form-label">Full Name</label>
									</div>
									<div class="col-lg-8">
										<input class="form-control" maxlength="25" name="fullname" id="defaultconfig" type="text" placeholder="Enter Member FullName">
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-lg-3">
										<label for="Email" class="col-form-label">Email</label>
									</div>
									<div class="col-lg-8">
										<input class="form-control" maxlength="20" name="defaultconfig-2" id="defaultconfig-2" type="text" placeholder="example@gmail.com">
									</div>
								</div>

								<div class="row mb-3">
									<div class="col-lg-3">
										<label for="Gender" class="col-form-label">Gender</label>
									</div>
									<div class="col-lg-8">
										<input class="form-control" maxlength="20" name="defaultconfig-2" id="defaultconfig-2" type="text" placeholder="Gender">
									</div>
								</div>

                                <div class="row mb-3">
									<div class="col-lg-3">
										<label for="Password" class="col-form-label">Password</label>
									</div>
									<div class="col-lg-8">
										<input class="form-control" maxlength="20" name="defaultconfig-2" id="defaultconfig-2" type="password" placeholder="Create a Password">
									</div>
								</div>

                                <div class="row mb-3">
									<div class="col-lg-3">
										<label for="Password" class="col-form-label">Confirm Password</label>
									</div>
									<div class="col-lg-8">
										<input class="form-control" maxlength="20" name="defaultconfig-2" id="defaultconfig-2" type="password" placeholder="Confirm Password">
									</div>
								</div>

                                <div class="row">
									<div class="col-lg-3">
										
									</div>
									<div class="col-lg-8">
                                        <div class=" d-grid mt-4">
                                            <button class="btn btn-primary">Add Member</button>
                                        </div>
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