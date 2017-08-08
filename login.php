<html>
    <head>
        <title>Login your account</title>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet"
              href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/Design.css">
    </head>
    <body background="images/001.jpg" >
        <!-- Start of the container-->
        <div class="container-fluid" id="reg_container">
            <?php
            include("Include/header.php");
            ?>
            <div class="row">
                <div class="col-md-12" id="login_body">
                    <!-- start of the page body -->
            <div class="container" style="padding-top: 1em; padding-bottom: 1em;">

                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6" id="login_form"><br/>
                        <div class="col-md-12" id="login" class="jumbotron">
                            <center> <span id="login_a">Please Login Your Account</span></center>
                            <hr>
                        </div>
                        <form action="login_action.php" method="post">
                            <label class="lable_login">Registration Number</label>
                            <input type="text" name="reg" class="form-control" placeholder="Your Registraion Number"><br/>

                            <label class="lable_login">Password</label>
                            <input type="password" name="pw" class="form-control" placeholder="Password">
                            <div class="col-md-12" id="btn">
                            <input type="submit" value="Login" class="btn btn-success pull-right" />
                            <input type="button" value="Cancel" class="btn btn-danger pull-right"/>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
                    <!-- end of the page body -->
            </div>
            </div>
            

            <?php
            include ("Include/footer.php");
            ?>
            <!-- End of the container-->
        </div>


        <script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>

