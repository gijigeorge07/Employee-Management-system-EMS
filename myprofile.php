<?php

require_once ('process/dbh.php');
$sql = "SELECT * FROM `employee` WHERE 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);


  $id = (isset($_GET['id']) ? $_GET['id'] : '');
  $sql = "SELECT * from `employee` WHERE id=$id";
  // $sql2 = "SELECT total from `salary` WHERE id = $id";
  $result = mysqli_query($conn, $sql);
  // $result2 = mysqli_query($conn , $sql2);
  // $salary = mysqli_fetch_array($result2);
  // $empS = ($salary['total']);
 
  if($result){
  while($res = mysqli_fetch_assoc($result)){
  $firstname = $res['firstName'];
  $lastname = $res['lastName'];
  $email = $res['email'];
  $contact = $res['contact'];
  $address = $res['address'];
  $gender = $res['gender'];
  $birthday = $res['birthday'];
  $nid = $res['nid'];
  $dept = $res['dept'];
  $degree = $res['degree'];
  $pic = $res['pic'];
}
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css?family=Lobster|Montserrat"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all" />
    <link
      href="vendor/datepicker/daterangepicker.css"
      rel="stylesheet"
      media="all"
    />
    <link rel="stylesheet" type="text/css" href="../sample.css" />
    <link rel="stylesheet" type="text/css" href="./main.css" />
    <title>EMS | PROFILE</title>
  </head>
  <body class="hero-anime">
    <div class="navigation-wrap start-header start-style">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="navbar navbar-expand-md navbar-light">
              <a class="navbar-brand" href="#" target="_blank"
                ><i class="fas fa-blog"></i><b>EMS</b></a
              >

              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto py-4 py-md-0">
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link" href="./emp_dashboard.php?id=<?php echo $id?>">HOME</a>
                  </li>
                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link" href="./myprofile.php?id=<?php echo $id?>">Profile</a>
                  </li>

                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link" href="./empproject.php?id=<?php echo $id?>">Projects</a>
                  </li>

                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link" href="./emplogin.html">Log Out</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <!-- <div class="absolute-center"> -->
        <div class="section">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="page-wrapper p-t-100 p-b-100 font-robo">
                  <div class="wrapper wrapper--w680">
                    <div class="card card-1">
                      <div class="card-heading"></div>
                      <div class="card-body">
                        <h2 class="title">My Info</h2>
                        <form
                          method="POST"
                          action="myprofileup.php?id=<?php echo $id?>"
                        >
                          <div class="input-group">
                            <img
                              src="process/<?php echo $pic;?>"
                              height="150px"
                              width="150px"
                            />
                          </div>

                          <div class="row row-space">
                            <div class="col-2">
                              <div class="input-group">
                                <label>First Name</label>
                                <input
                                  class="input--style-1"
                                  type="text"
                                  name="firstName"
                                  value="<?php echo $firstname;?>"
                                  readonly
                                />
                              </div>
                            </div>
                            <div class="col-2">
                              <div class="input-group">
                                <label>Last Name</label>
                                <input
                                  class="input--style-1"
                                  type="text"
                                  name="lastName"
                                  value="<?php echo $lastname;?>"
                                  readonly
                                />
                              </div>
                            </div>
                          </div>

                          <div class="input-group">
                            <label>Email</label>
                            <input
                              class="input--style-1"
                              type="email"
                              name="email"
                              value="<?php echo $email;?>"
                              readonly
                            />
                          </div>
                          <div class="row row-space">
                            <div class="col-2">
                              <div class="input-group">
                                <label>Date of Birth</label>
                                <input
                                  class="input--style-1"
                                  type="text"
                                  name="birthday"
                                  value="<?php echo $birthday;?>"
                                  readonly
                                />
                              </div>
                            </div>
                            <div class="col-2">
                              <div class="input-group">
                                <label>Gender</label>
                                <input
                                  class="input--style-1"
                                  type="text"
                                  name="gender"
                                  value="<?php echo $gender;?>"
                                  readonly
                                />
                              </div>
                            </div>
                          </div>

                          <div class="input-group">
                            <label>Contact Number</label>
                            <input
                              class="input--style-1"
                              type="number"
                              name="contact"
                              value="<?php echo $contact;?>"
                              readonly
                            />
                          </div>

                          <div class="input-group">
                            <label>NID</label>
                            <input
                              class="input--style-1"
                              type="number"
                              name="nid"
                              value="<?php echo $nid;?>"
                              readonly
                            />
                          </div>

                          <div class="input-group">
                            <label>Address</label>
                            <input
                              class="input--style-1"
                              type="text"
                              name="address"
                              value="<?php echo $address;?>"
                              readonly
                            />
                          </div>

                          <div class="input-group">
                            <label>Department</label>
                            <input
                              class="input--style-1"
                              type="text"
                              name="dept"
                              value="<?php echo $dept;?>"
                              readonly
                            />
                          </div>

                          <div class="input-group">
                            <label>Degree</label>
                            <input
                              class="input--style-1"
                              type="text"
                              name="degree"
                              value="<?php echo $degree;?>"
                              readonly
                            />
                          </div>

                          <!-- <div class="input-group">
                            <p>Total Salary</p>
                            <input
                              class="input--style-1"
                              type="text"
                              name="degree"
                              value="<?php echo $empS;?>"
                              readonly
                            />
                          </div> -->

                          <input
                            type="hidden"
                            name="id"
                            id="textField"
                            value="<?php echo $id;?>"
                            required="required"
                          /><br /><br />
                          <div class="p-t-20">
                            <button
                              class="btn btn--radius btn--green"
                              name="send"
                            >
                              Update Info
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="my-5 py-5"></div>

    <!-- //Latest compiled JavaScript -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
      integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
      crossorigin="anonymous"
    ></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="./global.js"></script>

    <!-- <script src="./script.js"></script> -->
  </body>
</html>

