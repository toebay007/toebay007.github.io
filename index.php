<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>DevPlacement Assessment</title>
        <!-- custom css -->
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- bootstrap 5.0.0 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <!-- font awesome link -->
        <link href="FA/css/all.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row rowBd">
            <div class="col-md-1"></div>
                <div class="col-md-5 firstDiv">
                    <div class="col-md-12 firstDivs"></div>
                    <div class="col-md-12 firstDivs">
                        <h3>HELLO, <strong>EMERALD</strong></h3>
                        <p>
                            Welcome to your dashboard, Kindly sort through the user base
                        </p>
                        <div class="col-md-8 offset-md-2 boxs">
                            <a href="#"><i class="bi bi-search"></i></a>
                            <input type="text" id="specificSizeInputName" placeholder="Find a User">
                        </div>
                    </div>
                    <div class="col-md-12 firstDivs">
                        <p>Show users</p>
                        <div class="row">
                            <div class="col-md-4 userStyle">
                                <a href="#">
                                    <div class="col-12 text-center hoves" id="usersStyle">
                                        <i class="fas fa-users fa-3x"></i>
                                    </div>
                                </a>
                                <p class="userP">All Users</p>
                               </div>
                            <div class="col-md-4 userStyle">
                                <a href="#">
                                    <div class="col-12 text-center hoves" id="maleStyle">
                                    <i class="fas fa-male fa-3x"></i>
                                    </div>
                                      </a>
                                <p class="userP">Male Users</p>
                              </div>
                            <div class="col-md-4 userStyle">
                                <a href="#">
                                    <div class="col-12 text-center hoves" id="femaleStyle">
                                    <i class="fas fa-female fa-3x"></i>
                                    </div>
                                       </a>
                                <p class="userP">Female Users</p>
                             </div>
                        </div>
                    </div>
                </div>






                <div class="col-md-5 firstDiv" id="SecondDiv">
                    <h5 class="mt-2">All Users</h5>

                    <p class="mt-2">Filter by</p>

                    <div class="row">
                        <div class="col-4 mt-2 countrySearch styleSecond">
                            <a href="#"><i class="bi bi-search"></i></a>
                            <input type="text" id="specificSizeInputName" placeholder="Find a User">
                        </div>

                        <div class="col-4 styleSecond">
                            <select class="form-select mt-2" style="background-color: rgb(226,227,236);" aria-label="Default select example">
                                <option selected>Select Country</option>
                                <option value="1">AU</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-4 styleSecond">
                            <div class="form-check mt-3 form-switch">
                                <input class="form-check-input" style="background-color: rgb(48,187,181);" type="checkbox" id="flexSwitchCheckChecked" checked>
                                <label class="form-check-label" for="flexSwitchCheckChecked">Show Country</label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- footer -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
           
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
            <script type="text/javascript" src="style.js"></script>
    </body>
</html>