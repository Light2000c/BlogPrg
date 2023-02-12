<?php
require_once 'Header.php';

?>
<div class="page-content">

<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Add Post</li>
					</ol>
</nav>

<div class="row">

<div class="col-lg-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">CREATE A POST</h4>
								<p class="text-muted mb-3">Read the <a href="https://github.com/mimo84/bootstrap-maxlength" target="_blank"> Official Bootstrap MaxLength Documentation </a>for a full list of instructions and other options.</p>
								<div class="row mb-3">
									<div class="col-lg-3">
										<label for="defaultconfig" class="col-form-label">Title</label>
									</div>
									<div class="col-lg-8">
										<input class="form-control" maxlength="25" name="defaultconfig" id="defaultconfig" type="text" placeholder="Type Something..">
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-lg-3">
										<label for="defaultconfig-2" class="col-form-label">Category</label>
									</div>
									<div class="col-lg-8">
										<input class="form-control" maxlength="20" name="defaultconfig-2" id="defaultconfig-2" type="text" placeholder="Type Something..">
									</div>
								</div>
								
								<div class="row">
									<div class="col-lg-3">
										<label for="defaultconfig-4" class="col-form-label">Description</label>
									</div>
									<div class="col-lg-8">
										<textarea id="maxlength-textarea" class="form-control" id="defaultconfig-4" maxlength="100" rows="8" placeholder="This textarea has a limit of 100 chars."></textarea>
                                        <div class=" d-grid mt-4">
                                            <button class="btn btn-primary">Submit</button>
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