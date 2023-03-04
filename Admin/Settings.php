<?php
require_once 'Header.php';

?>
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Settings</li>
        </ol>
    </nav>

    <div class="row">

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Settings</h4>

                    <div>
                    <ul id="docs-nav-pills" class="nav nav-pills mb-5 bg-light" role="tablist">
        <li class="nav-item">
            <a id="docs-tab-overview" class="nav-link active px-5 font-weight-bold" data-toggle="tab" href="#edit-profile" role="tab">Edit Profile</a>
        </li>
            <li class="nav-item">
                <a id="docs-tab-gettingstarted" class="nav-link px-5 font-weight-bold" data-toggle="tab" href="#security" role="tab">Change Password</a>
            </li>
            <li class="nav-item">
              <a id="docs-tab-gettingstarted" class="nav-link px-5 font-weight-bold" data-toggle="tab" href="#developer-Api" role="tab">Tools</a>
          </li>
          </ul>
      <div class="tab-content mt-2" id="myTabContent">
        <div class="tab-pane fade show active" id="edit-profile" role="tabpanel" aria-labelledby="home-tab">
          Edit Profile
        </div>
        <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="profile-tab">profile</div>
        <div class="tab-pane fade" id="developer-Api" role="tabpanel" aria-labelledby="contact-tab">Contact</div>
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