<?php 
require_once ('process/dbh.php');
$sql = "SELECT id, firstName, lastName,  points FROM employee, rank WHERE rank.eid = employee.id order by rank.points desc";
$result = mysqli_query($conn, $sql);
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
    <!-- Icons font CSS-->
    <link
      href="vendor/mdi-font/css/material-design-iconic-font.min.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="vendor/font-awesome-4.7/css/font-awesome.min.css"
      rel="stylesheet"
      media="all"
    />
    <!-- Font special for pages-->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
      rel="stylesheet"
    />

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all" />
    <link
      href="vendor/datepicker/daterangepicker.css"
      rel="stylesheet"
      media="all"
    />

    <!-- Main CSS-->
    <link href="./main.css" rel="stylesheet" media="all" />
    <link rel="stylesheet" type="text/css" href="../sample.css" />
    <title>EMS | ADD-EMPLOYEE</title>
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
                    <a class="nav-link" href="./admin_dashboard.php">HOME</a>
                  </li>
                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link" href="./addemp.php">Add Employee</a>
                  </li>

                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link" href="./viewemp.php">View Employee</a>
                  </li>
                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link" href="./assign.php">Assign Project</a>
                  </li>
                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link" href="./assignproject.php">Project Status</a>
                  </li>

                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link" href="./adminlogin.html">Log Out</a>
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
                <div class="page-wrapper  p-t-100 p-b-100 font-robo">
                  <div class="wrapper wrapper--w680">
                    <div class="card card-1">
                      <div class="card-heading"></div>
                      <div class="card-body">
                        <h2 class="title">Registration </h2>
                        <form
                          action="process/addempprocess.php"
                          method="POST"
                          enctype="multipart/form-data"
                        >
                          <div class="row row-space">
                            <div class="col-2">
                              <div class="input-group">
                                <input
                                  class="input--style-1"
                                  type="text"
                                  placeholder="First Name"
                                  name="firstName"
                                  required="required"
                                />
                              </div>
                            </div>
                            <div class="col-2">
                              <div class="input-group">
                                <input
                                  class="input--style-1"
                                  type="text"
                                  placeholder="Last Name"
                                  name="lastName"
                                  required="required"
                                />
                              </div>
                            </div>
                          </div>

                          <div class="input-group">
                            <input
                              class="input--style-1"
                              type="email"
                              placeholder="Email"
                              name="email"
                              required="required"
                            />
                          </div>
                          <label>Birthday</label>
                          <div class="row row-space">
                            <div class="col-2">
                              <div class="input-group">
                                <input
                                  class="input--style-1"
                                  type="date"
                                  placeholder="BIRTHDATE"
                                  name="birthday"
                                  required="required"
                                />
                              </div>
                            </div>
                            <div class="col-2">
                              <div class="input-group">
                                <div
                                  class="rs-select2 js-select-simple select--no-search"
                                >
                                  <select name="gender">
                                    <option
                                      disabled="disabled"
                                      selected="selected"
                                    >
                                      GENDER
                                    </option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                  </select>
                                  <div class="select-dropdown"></div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="input-group">
                            <input
                              class="input--style-1"
                              type="number"
                              placeholder="Contact Number"
                              name="contact"
                              required="required"
                            />
                          </div>

                          <div class="input-group">
                            <input
                              class="input--style-1"
                              type="number"
                              placeholder="NID"
                              name="nid"
                              required="required"
                            />
                          </div>

                          <div class="input-group">
                            <input
                              class="input--style-1"
                              type="text"
                              placeholder="Address"
                              name="address"
                              required="required"
                            />
                          </div>

                          <div class="input-group">
                            <input
                              class="input--style-1"
                              type="text"
                              placeholder="Department"
                              name="dept"
                              required="required"
                            />
                          </div>

                          <div class="input-group">
                            <input
                              class="input--style-1"
                              type="text"
                              placeholder="Degree"
                              name="degree"
                              required="required"
                            />
                          </div>

                          <div class="input-group">
                            <input
                              class="input--style-1"
                              type="number"
                              placeholder="Salary"
                              name="salary"
                            />
                          </div>

                          <div class="input-group">
                            <input
                              class="input--style-1"
                              type="file"
                              placeholder="file"
                              name="file"
                            />
                          </div>

                          <div class="p-t-20">
                            <button
                              class="btn btn--radius btn--green"
                              type="submit"
                            >
                              Submit
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
    <!-- <script src="./script.js"></script> -->
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="./global.js"></script>
  </body>
</html>
