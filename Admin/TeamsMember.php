<?php
require_once 'Header.php';

?>
<div class="page-content">

    <nav class="page-breadcrumb">
		<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Team Members</li>
		</ol>
    </nav>


    <div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Team Members Table</h6>
                <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>image</th>
                        <th>Start date</th>
                        <th>Salary</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>  <img class="img-fluid" src="https://hips.hearstapps.com/amv-prod-gp.s3.amazonaws.com/gearpatrol/wp-content/uploads/2019/01/10-Best-Indoor-Plants-Gear-Patrol-lead-full.jpg" alt=""></td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                        <td><button class="btn btn-sm btn-primary">view</button></td>
                        <td><button class="btn btn-sm btn-primary">delete</button></td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td> <img class="img-fluid" src="https://hips.hearstapps.com/amv-prod-gp.s3.amazonaws.com/gearpatrol/wp-content/uploads/2019/01/10-Best-Indoor-Plants-Gear-Patrol-lead-full.jpg" alt=""></td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                        <td><button class="btn btn-sm btn-primary">view</button></td>
                        <td><button class="btn btn-sm btn-primary">delete</button></td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td> <img class="img-fluid" src="https://hips.hearstapps.com/amv-prod-gp.s3.amazonaws.com/gearpatrol/wp-content/uploads/2019/01/10-Best-Indoor-Plants-Gear-Patrol-lead-full.jpg" alt=""></td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                        <td><button class="btn btn-sm btn-primary">view</button></td>
                        <td><button class="btn btn-sm btn-primary">delete</button></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
					</div>
				</div>
        
</div>

<?php

require_once 'Footer.php';
?>