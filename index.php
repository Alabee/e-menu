<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Complete Bootstrap 4 Website Layout</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="style.css" rel="stylesheet">
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md sticky-top">
    <div class="container-fluid">
        <h1 class="navbar-brand" href="#">e-menu</h1>
    </div>
</nav>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col bg-red">
            <?php if(isset($_GET['message'])){ ?>
            <div class="alert alert-primary" role="alert">
                <?php
                    if(isset($_GET['message'])){
                        echo $_GET['message'];
                    }
                ?>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<form action="save-order.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs">
                    <li class="nav-item active">
                        <a class="nav-link btn btn-success" data-toggle="tab" href="#foods">Foods</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-success" data-toggle="tab" href="#beverages">Beverages</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content body-intro">
                    <div class="tab-pane container active" id="foods">
                        <div class="row padding">
                            <div class="col-md-3">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="img/foods/ugali.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Ugali</h4>
                                        <p class="card-text">
                                            <input type="checkbox" name="foods[]" value="Ugali @ Ksh 40.00"> Ksh 40.00
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="img/foods/chips.png">
                                    <div class="card-body">
                                        <h4 class="card-title">Chips</h4>
                                        <p class="card-text">
                                            <input type="checkbox" name="foods[]" value="Chips @ Ksh 150.00"> Ksh 150.00
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="img/foods/githeri.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Githeri</h4>
                                        <p class="card-text">
                                            <input type="checkbox" name="foods[]" value="Githeri @ Ksh 50.00"> Ksh 50.00
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="img/foods/matoke.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Matoke</h4>
                                        <p class="card-text">
                                            <input type="checkbox" name="foods[]" value="Matoke @ Ksh 80.00"> Ksh 80.00
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row padding">
                            <div class="col-md-3">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="img/foods/fish.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Fish</h4>
                                        <p class="card-text">
                                            <input type="checkbox" name="foods[]" value="Fish @ Ksh 200.00"> Ksh 200.00
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="img/foods/rice.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Rice</h4>
                                        <p class="card-text">
                                            <input type="checkbox" name="foods[]" value="Rice @ Ksh 80.00"> Ksh 80.00
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="img/foods/pilau.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Pilau</h4>
                                        <p class="card-text">
                                            <input type="checkbox" name="foods[]" value="Pilau @ Ksh 70.00"> Ksh 70.00
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="img/foods/chapati.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Chapati</h4>
                                        <p class="card-text">
                                            <input type="checkbox" name="foods[]" value="Chapati @ Ksh 30.00"> Ksh 30.00
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane container" id="beverages">
                        <div class="row padding">
                            <div class="col-md-3">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="img/foods/ugali.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Soda</h4>
                                        <p class="card-text">
                                            <input type="checkbox" name="beverages[]" value="Soda @ Ksh 40.00"> Ksh 40.00
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col">
                <input type="submit" class="btn btn-info pull-right" value="Order Now">
            </div>
        </div>
    </div>
</form>

</body>
</html>













