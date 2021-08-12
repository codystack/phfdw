<?php
include "./components/header.php";
require_once "../controller/adminauth.php";
?>


    <section class="p-0 bg-light">
      <div class="image image-overlay image-cover" style="background-image:url(./assets/images/background.jpg)"
      data-top-top="transform: translateY(0px);" 
      data-top-bottom="transform: translateY(-250px);"></div>
      <div class="container">
        <div class="row justify-content-center align-items-end vh-50 mb-5">
          <div class="col col-md-10 col-lg-8">
            <div class="row align-items-center">
              <div class="col-4 col-lg-3">
                <img class="mr-3 avatar avatar-xl rounded" src="https://i.imgur.com/quYTOnx.png" alt="Generic placeholder image">
              </div>
              <div class="col">
                <div class="row align-items-center">
                  <div class="col-md-8">
                    <h2 class="mb-0"><b><?php echo $_SESSION['firstName']; ?></b> <?php echo $_SESSION['lastName']; ?></h2>
                    <span class="text-muted">Admin</span>
                  </div>
                  <div class="col-md-4 text-left text-md-right">
                    <a href="logout" class="btn btn-rounded btn-ico btn-white" data-toggle="tooltip" data-placement="top" title="Log Out"><i class="icon-log-out fs-20"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="bg-light p-0">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col col-md-10 col-lg-8">
            <div class="nav nav-tabs mb-1">
              <a class="nav-item nav-link active" data-toggle="tab" href="#demo-2-1">Dashboard</a>
              <a class="nav-item nav-link" data-toggle="tab" href="#demo-2-3">Info Request</a>
              <a class="nav-item nav-link" data-toggle="tab" href="#demo-2-5">Exhibitors</a>
              <a class="nav-item nav-link" data-toggle="tab" href="#demo-2-2">Designers</a>
              <a class="nav-item nav-link" data-toggle="tab" href="#demo-2-4">Models</a>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section class="bg-light pt-2">

      <div class="container">
        <div class="tab-content" id="demo-2">

          <!-- tab info -->
          <div class="tab-pane show active" id="demo-2-1" role="tabpanel" aria-labelledby="demo-2-1">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-8">
                
                <!-- stats -->
                <div class="row gutter-1 mb-2">
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="equal">
                      <div class="boxed bg-danger text-white">
                        <div class="equal-header">
                        <?php
                        $countTraffic = mysqli_query($conn, "SELECT id FROM traffic");
                        echo "<b class=\"h2\">".mysqli_num_rows($countTraffic)."</b>";
                        ?>
                        </div>
                        <div class="equal-footer">
                          <span class="text-muted">Visitors Traffic</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="equal">
                      <div class="boxed">
                        <div class="equal-header">
                        <?php
                        $countInfoRequest = mysqli_query($conn, "SELECT id FROM contact");
                        echo "<b class=\"h2\">".mysqli_num_rows($countInfoRequest)."</b>";
                        ?>
                        </div>
                        <div class="equal-footer">
                          <span class="text-muted">Info Request</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="equal">
                      <div class="boxed">
                        <div class="equal-header">
                        <?php
                        $countSpaceRequest = mysqli_query($conn, "SELECT id FROM exhibitors");
                        echo "<b class=\"h2\">".mysqli_num_rows($countSpaceRequest)."</b>";
                        ?>
                        </div>
                        <div class="equal-footer">
                          <span class="text-muted">Exhibitors</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="equal">
                      <div class="boxed">
                        <div class="equal-header">
                        <?php
                        $countDesigners = mysqli_query($conn, "SELECT id FROM designers");
                        echo "<b class=\"h2\">".mysqli_num_rows($countDesigners)."</b>";
                        ?>
                        </div>
                        <div class="equal-footer">
                          <span class="text-muted">Designers</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- / stats -->

              </div>
            </div>
          </div>
          <!-- / tab -->



          <!-- tab groups -->
          <div class="tab-pane" id="demo-2-3" role="tabpanel" aria-labelledby="demo-2-3">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-8">
                <div class="row">
                  <div class="col">
                    <div class="boxed p-3">
                      <div class="table-responsive">
                        <table id="inforequest-datatables" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Client Name</th>
                                    <th>Date</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                                <tbody>
                                <?php
                                $select_query = "SELECT * FROM contact ORDER BY date ASC";;
                                $result = mysqli_query($conn, $select_query);
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $id = $row['id'];
                                        $fullName = $row['fullName'];
                                        $email = $row['email'];
                                        $date = $row['date'];
 
                                        echo "<tr>";
                                        echo "<td class=\"budget\">" .$fullName. "</td>";
                                        echo "<td class=\"budget\">" .date("d(D) M Y", strtotime($date)). "</td>";

                                        echo "<td class='text-right'>"
                                            ."<button class=\"btn btn-icon contactinfo btn-sm btn-info\" data-id='".$id."'>
                                                <span class=\"btn-inner--icon\"><i class=\"ni ni-zoom-split-in\"></i></span>
                                                <span class=\"btn-inner--text\"><i class='far fa-eye'></i>View</span>
                                            </button>
                                            
                                            <a href=\"\" class=\"btn btn-icon btn-sm btn-danger\">
                                                <span class=\"btn-inner--icon\"><i class=\"ni ni-ruler-pencil\"></i></span>
                                                <span class=\"btn-inner--text\">Delete</span>
                                            </a>".
                                            "</td >";
                                        "</tr>";
                                    }
                                }else {
                                    echo "<td><p>No Info Request Yet!</p></td>";
                                }
                                ?>
                                </tbody>
                            <tfoot>
                                <tr>
                                    <th>Client Name</th>
                                    <th>Date</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </tfoot>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- / tab -->

          <!-- tab Exhibitors -->
          <div class="tab-pane" id="demo-2-5" role="tabpanel" aria-labelledby="demo-2-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-8">
                <div class="row">
                  <div class="col">
                    <div class="boxed p-3">
                      <div class="table-responsive">
                        <table id="spacerequest-datatables" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Exhibitors Name</th>
                                    <th>Reg Code</th>
                                    <th>Date</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                                <tbody>
                                <?php
                                $select_query = "SELECT * FROM exhibitors ORDER BY date ASC";;
                                $result = mysqli_query($conn, $select_query);
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $id = $row['id'];
                                        $contactperson = $row['contactperson'];
                                        $email = $row['email'];
                                        $regCode = $row['regCode'];
                                        $date = $row['date'];

                                        echo "<tr>";
                                        echo "<td class=\"budget\">" .$contactperson. "</td>";
                                        echo "<td class=\"budget\">" .$regCode. "</td>";
                                        echo "<td class=\"budget\">" .date("d(D) M Y", strtotime($date)). "</td>";

                                        echo "<td class='text-right'>"
                                            ."<button class=\"btn btn-icon spaceinfo btn-sm btn-info\" data-id='".$id."'>
                                                <span class=\"btn-inner--icon\"><i class=\"ni ni-zoom-split-in\"></i></span>
                                                <span class=\"btn-inner--text\"><i class='far fa-eye'></i>View</span>
                                            </button>
                                            
                                            <a href=\"\" class=\"btn btn-icon btn-sm btn-danger\">
                                                <span class=\"btn-inner--icon\"><i class=\"ni ni-ruler-pencil\"></i></span>
                                                <span class=\"btn-inner--text\">Delete</span>
                                            </a>".
                                            "</td >";
                                        "</tr>";
                                    }
                                }else {
                                    echo "<td><p>No Rent Space Request Yet!</p></td>";
                                }
                                ?>
                                </tbody>
                            <tfoot>
                                <tr>
                                    <th>Exhibitors Name</th>
                                    <th>Reg Code</th>
                                    <th>Date</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </tfoot>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <!-- / tab -->

          <!-- tab Designers -->
          <div class="tab-pane" id="demo-2-2" role="tabpanel" aria-labelledby="demo-2-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-8">
                <div class="row">
                  <div class="col">
                    <div class="boxed p-3">
                      <div class="table-responsive">
                        <table id="designersrequest-datatables" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Designers Name</th>
                                    <th>Reg Code</th>
                                    <th>Date</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                                <tbody>
                                <?php
                                $select_query = "SELECT * FROM designers ORDER BY date ASC";;
                                $result = mysqli_query($conn, $select_query);
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $id = $row['id'];
                                        $firstName = $row['firstName'];
                                        $lastName = $row['lastName'];
                                        $regCode = $row['regCode'];
                                        $email = $row['email'];
                                        $date = $row['date'];

                                        echo "<tr>";
                                        echo "<td class=\"budget\">" .$firstName." ".$lastName. "</td>";
                                        echo "<td class=\"budget\">" .$regCode. "</td>";
                                        echo "<td class=\"budget\">" .date("d(D) M Y", strtotime($date)). "</td>";

                                        echo "<td class='text-right'>"
                                            ."<button class=\"btn btn-icon designersinfo btn-sm btn-info\" data-id='".$id."'>
                                                <span class=\"btn-inner--icon\"><i class=\"ni ni-zoom-split-in\"></i></span>
                                                <span class=\"btn-inner--text\"><i class='far fa-eye'></i>View</span>
                                            </button>
                                            
                                            <a href=\"\" class=\"btn btn-icon btn-sm btn-danger\">
                                                <span class=\"btn-inner--icon\"><i class=\"ni ni-ruler-pencil\"></i></span>
                                                <span class=\"btn-inner--text\">Delete</span>
                                            </a>".
                                            "</td >";
                                        "</tr>";
                                    }
                                }else {
                                    echo "<td><p>No Designers Yet!</p></td>";
                                }
                                ?>
                                </tbody>
                            <tfoot>
                                <tr>
                                    <th>Designers Name</th>
                                    <th>Reg Code</th>
                                    <th>Date</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </tfoot>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <!-- / tab -->

          <!-- tab Models -->
          <div class="tab-pane" id="demo-2-4" role="tabpanel" aria-labelledby="demo-2-4">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-8">
                <div class="row">
                  <div class="col">
                    <div class="boxed p-3">
                      <div class="table-responsive">
                        <table id="modelsrequest-datatables" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Model's Name</th>
                                    <th>Height</th>
                                    <th>Age</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                                <tbody>
                                <?php
                                $select_query = "SELECT * FROM models ORDER BY date ASC";;
                                $result = mysqli_query($conn, $select_query);
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $id = $row['id'];
                                        $firstName = $row['firstName'];
                                        $lastName = $row['lastName'];
                                        $age = $row['age'];
                                        $email = $row['email'];
                                        $height = $row['height'];

                                        echo "<tr>";
                                        echo "<td class=\"budget\">" .$firstName." ".$lastName. "</td>";
                                        echo "<td class=\"budget\">" .$height. "</td>";
                                        echo "<td class=\"budget\">" .$age. "</td>";

                                        echo "<td class='text-right'>"
                                            ."<button class=\"btn btn-icon modelsinfo btn-sm btn-info\" data-id='".$id."'>
                                                <span class=\"btn-inner--icon\"><i class=\"ni ni-zoom-split-in\"></i></span>
                                                <span class=\"btn-inner--text\"><i class='far fa-eye'></i>View Profile</span>
                                            </button>
                                            
                                            <!--<a href=\"\" class=\"btn btn-icon btn-sm btn-danger\">
                                                <span class=\"btn-inner--icon\"><i class=\"ni ni-ruler-pencil\"></i></span>
                                                <span class=\"btn-inner--text\">Delete</span>
                                            </a>-->".
                                            "</td >";
                                        "</tr>";
                                    }
                                }else {
                                    echo "<td><p>No Models Yet!</p></td>";
                                }
                                ?>
                                </tbody>
                            <tfoot>
                                <tr>
                                    <th>Designers Name</th>
                                    <th>Reg Code</th>
                                    <th>Date</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </tfoot>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <!-- / tab -->
        </div>
      </div>
    </section>


<?php include "./components/footer.php"; ?>