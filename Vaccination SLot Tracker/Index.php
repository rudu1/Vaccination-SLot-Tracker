<!DOCTYPE html>
<html>

<head>
    <title> </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>

<body>

    <div class="header" id="topheader">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <div class="container text-uppercase p-2">
                <a class="navbar-brand" href="#">Vaccination Slot Notifier</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>



                    </ul>

                </div>
            </div>
        </nav>

        <div class="container pad1">






            <h3 class="mb-3 m-lg-2 " style="text-align: center;">Get Slot Notification on SMS</h3>
            <P class="text-center">Register Your Information to get SMS</P>
            <div class="row jumbotron">

                <div class="col-md-6">
                    <div class="MyLeftCtn">
                        <form class="myform text-center" action="reginsert.php" method="POST">
                            <h3 class="mb-3 m-lg-2 " style="text-align: center;">Get Slot Notification on SMS</h3>
                            <P class="text-center">Register Your Information to get SMS</P>

                            <div class="row">
                                <div class="col-md-6 mb-3 font-weight-bolder">
                                    <label for="inputname" style="margin-right: 150px;">First Name</label>
                                    <input type="text" name="fname" class="form-control " placeholder="First Name" required>
                                </div>

                                <div class="col-md-6 mb-3 font-weight-bolder">
                                    <label for="inputname" style="margin-right: 150px;">Last Name</label>
                                    <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6 mb-3  font-weight-bolder">
                                    <label for="number" style="margin-right: 110px" ;>Mobile Number</label>
                                    <input type="tel" name="mobile" class="form-control" placeholder="Mobile Number" required>
                                </div>

                                <div class="col-md-6 mb-3 font-weight-bolder">
                                    <label for="email" style="margin-right: 170px" ;>Email Id</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email Id" required>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3 font-weight-bolder">
                                    <label for="district" style="margin-right: 170px" ;>District</label>
                                    <input type="text" name="district" class="form-control" placeholder="District" required>
                                </div>

                                <div class="col-md-6 mb-3 font-weight-bolder">
                                    <label for="state" style="margin-right: 185px" ;>State</label>
                                    <input type="text" name="state" class="form-control" placeholder="State" required>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-4 mb-3 font-weight-bolder">
                                    <label for="Zip code" style="margin-right: 66px" ;>Pin Code</label>
                                    <input type="number" name="pin" class="form-control" placeholder="Zip Code" required>
                                </div>
                            </div>

                            <div class="col-md-12  font-weight-bolder" style="text-align: center; margin-top: 20px;">
                                <button type="submit" class="btn btn-success" name="signup">Submit</button>
                            </div>


                        </form>

                    </div>



                </div>


                <div class="col-md-6">
                    <div class="myrightctn text-center">

                        <h3 class="mb-3 m-lg-2 " style="text-align: center;">Search Nearst Vaccination Slots</h3>




                        <div class="col-md-12 font-weight-bolder" style="text-align: center;">


                            <h4 style="margin-top: 40px;">Check by Pin Code</h4>
                        </div>
                        <form method="POST">
                            <div class="form-field col-md-6" style="margin-top: 25px; margin-left: 20px">

                                <label for="pin" class="label font-weight-bolder" style="margin-right: 99px;">Pin Code</label>

                                <input id="pin" name="pin" class="input-text" type="text">

                            </div>

                            <div class="col-md-12  font-weight-bolder" style="text-align: center; margin-top: 26px;">
                                <input type="submit" class="btn btn-success" value="Submit">
                            </div>
                        </form>
                    </div>


                    <div class="r2 row">



                        <?php
                        $stateResp = file_get_contents('https://cdn-api.co-vin.in/api/v2/admin/location/states/');
                        $stateArray = json_decode($stateResp, false);
                        $states = $stateArray->states;

                        //echo $states;
                        //  foreach($states as $state){
                        //          echo $state->state_name;

                        //      }


                        ?>

                        <form method="POST">
                            <div class="row">
                                <div class="col-md-12 font-weight-bolder" style="text-align: center;">
                                    <h4 style="margin-top: 40px;">Check by State</h4>
                                </div>
                            </div>

                            <script>
                                function getDistricts(state) {
                                    document.cookie = 'selectedState=' + state
                                    console.log(state);
                                    location.reload(true);
                                }
                            </script>



                            <div class="row">
                                <select id="state" name="state" aria-label="State" onchange="getDistricts(this.value)">
                                    <div class="form-field col-md-5" style="margin-top: 25px; margin-left: 65px;">
                                        <option value="">Select Your State</option>

                                        <?php
                                        foreach ($states as $state) {
                                            echo '<option value="' . $state->state_id . '">' . $state->state_name . '</option>';
                                        }

                                        ?>
                                    </div>
                                </select>


                                <select id="district" name="district" aria-label="district" required>
                                    <div class="form-field col-md-5" style="margin-top: 25px; margin-left: 10px;">

                                        <option value="">Select Your District</option>
                                        <?php
                                        $data = $_COOKIE['selectedState'];
                                        $distResp = file_get_contents('https://cdn-api.co-vin.in/api/v2/admin/location/districts/' . $data);
                                        $distArray = json_decode($distResp, false);
                                        $districts = $distArray->districts;
                                        

                                        foreach ($districts as $district) {
                                            echo '<option value="' . $district->district_id . '">' . $district->district_name . '</option>';
                                        }

                                        ?>
                                    </div>
                                </select>
                            </div>


                            <div class="col-md-12  font-weight-bolder" style="text-align: center; margin-top: 25px;">
                                <input type="submit" class="btn btn-success" value="submit">
                            </div>
                        </form>

                    </div>


                </div>
            </div>



        </div>

        <div class="container-fluid pad2 jumbotron">
            <p style="font-size: smaller;"><b>Note:</b>The slots availability displayed in the search is provided by the state govt and private hospitals.
                The total availability slots includes Dose-1 and Dose-2 allotted slots.
                While we have real-time data, slot availability on the portal changes rapidly.
            </p>
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">

                    <tr>
                        <th>Age Limit</th>
                        <th>Center Name</th>
                        <th>Block Name</th>
                        <th>Available Dose 1</th>
                        <th>Available Dose 2</th>
                        <th>Slot</th>
                        <th>Date</th>
                        <th>Fee Type</th>
                        <th>Vaccine</th>

                    </tr>


                    <?php
                    error_reporting(0);
                    if($_POST['district'])
                    {
                        $pinc = $_POST["district"];
                    $currentDate = date('d/m/Y');
                    $data = file_get_contents('https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/findByDistrict?district_id='.$pinc.'&date='.$currentDate);
                    $vacclive = json_decode($data, true); //to converte json file to php

                    }
                    else
                    {
                    $pinc = $_POST["pin"];
                    $currentDate = date('d/m/Y');
                    $data = file_get_contents('https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/findByPin?pincode=' . $pinc . '&date='.$currentDate);
                    $vacclive = json_decode($data, true); //to converte json file to php
                    }
                    if (empty($vacclive['sessions'])) {
                    } else {
                        $sessioncount = count($vacclive['sessions']);
                    }


                    //$sessioncount = count($vacclive['sessions']);

                    $i = 0;
                    while ($i < $sessioncount) {
                    ?>

                        <tr>
                            <td><?php echo $vacclive['sessions'][$i]['min_age_limit'] ?></td>
                            <td><?php echo $vacclive['sessions'][$i]['name'] ?></td>
                            <td><?php echo $vacclive['sessions'][$i]['block_name'] ?></td>
                            <td><?php echo $vacclive['sessions'][$i]['available_capacity_dose1'] ?></td>
                            <td><?php echo $vacclive['sessions'][$i]['available_capacity_dose2'] ?></td>
                            <td><?php echo $vacclive['sessions'][$i]['from'] ?></td>
                            <td><?php echo $vacclive['sessions'][$i]['date'] ?></td>
                            <td><?php echo $vacclive['sessions'][$i]['fee_type'] ?></td>
                            <td><?php echo $vacclive['sessions'][$i]['vaccine'] ?></td>

                        </tr>

                    <?php
                        $i++;
                    }


                    ?>





                </table>
            </div>
        </div>












        <!--*****************header part ends*********************-->




        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>