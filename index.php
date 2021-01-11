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
        <!-- google fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Xanh+Mono&display=swap" rel="stylesheet">    </head>
    <body>
        <div class="container-fluid">
            <div class="row rowBd">
                <div class="col-md-1"></div>
                <div class="col-md-4 firstDiv">
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
                                    <p>
                                        <div class="col-12 text-center hoves" id="usersStyle">
                                            <i class="fas fa-users fa-3x"></i>
                                        </div>
                                    </p>
                                </a>
                                <p class="userP">All Users</p>
                               </div>
                            <div class="col-md-4 userStyle">
                                <a href="#">
                                    <p>
                                        <div class="col-12 text-center hoves" id="maleStyle">
                                            <i class="fas fa-male fa-3x"></i>
                                        </div>
                                    </p>
                                </a>
                                <p class="userP">Male Users</p>
                              </div>
                            <div class="col-md-4 userStyle">
                                <a href="#">
                                    <p>
                                        <div class="col-12 text-center hoves" id="femaleStyle">
                                            <i class="fas fa-female fa-3x"></i>
                                        </div>
                                    </p>
                                </a>
                                <p class="userP">Female Users</p>
                             </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-2"></div>



                <div class="col-md-5 firstDiv" id="SecondDiv">
                    <h5 class="mt-2">All Users</h5>

                    <p class="mt-2">Filter by</p>

                    <div class="row">
                        <div class="col-4 mt-2 countrySearch">
                            <a href="#"><i class="bi bi-search"></i></a>
                            <input type="text" id="specificSizeInputNamehk" placeholder="Find a User">
                        </div>

                        <div class="col-4">
                            <select class="form-select mt-2" style="background-color: rgb(226,227,236);" aria-label="Default select example">
                                <option selected>Select Country</option>
                                <option value="1">AU</option>
                                <option value="1">BR</option>
                                <option value="1">CA</option>
                                <option value="1">CH</option> 
                                <option value="1">DE</option>
                                <option value="1">DK</option>
                                <option value="1">ES</option>
                                <option value="1">FI</option> 
                                <option value="1">FR</option>
                                <option value="1">GB</option>
                                <option value="1">IE</option>
                                <option value="1">IR</option> 
                                <option value="1">NO</option>
                                <option value="1">NL</option>
                                <option value="1">NZ</option>
                                <option value="1">TR</option> 
                                <option value="1">US</option>  
                            </select>
                        </div>
                        <div class="col-4 styleSecond">
                            <div class="form-check mt-3 form-switch">
                                <input class="form-check-input" style="background-color: rgb(48,187,181);" type="checkbox" id="flexSwitchCheckChecked" checked>
                                <label class="form-check-label" for="flexSwitchCheckChecked">Show Country</label>
                            </div>
                        </div>
                    </div>
                    <div id="resultss">
                        
                    </div>
                    <div id="resulties">
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
          <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
            <script type="text/javascript" src="style.js"></script>
    </body>
</html>