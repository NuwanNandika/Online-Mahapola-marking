<html>
    <head>
        <title>Register form</title>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet"
              href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/Design.css">
    </head>
    <body>
        <!-- Start of the container-->
        <div class="container-fluid" id="reg_container">
            <?php
            include("Include/header.php");
            ?>
            <div class="row">
                <div class="coi-md-12" id="register_body">

                    <div class="row" id="register">
                        <div class="coi-md-12" >
                            <center><span id="Registration_Form"><h1><b> Registration Form </b></h1></span></center>
                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <!--start of the form-->
                            <div class="col-md-6" id="reg_form">
                                <form action="register_action.php" method="post">
                                    <legend>
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Your Name"><br/>

                                        <label>Account Number</label>
                                        <input type="text" name="acc_no" class="form-control" placeholder="Accoutn Number"><br/>


                                        <label>Department</label>
                                        <input type="text" name="dept" class="form-control" placeholder="Your Depatrment"><br/>

                                        <label>Registration Number</label>
                                        <input type="text" name="reg" class="form-control" placeholder="Your Registraion Number"><br/>

                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email"><br/>

                                        <label>Password</label>
                                        <input type="password" name="pw" class="form-control" placeholder="Password"><br/>

                                        <label>Confirm Password</label>
                                        <input type="password" name="con_pw" class="form-control" placeholder="Confirm Password"><br/>

                                        <label>Photo Upload</label>
                                        <input type="file" name="photo" class="form-control"><br/>

                                        <input type="submit" value="Submit" class="btn btn-success"/>
                                        <input type="reset" value="Reset" class="btn btn-danger"/>
                                    </legend>
                                </form>
                                <!--End of the form-->

                            </div>


                            <div class="col-md-3"></div>
                        </div>
                    </div>


                </div>
            </div>
            <br/>
            <?php
            include ("Include/footer.php");
            ?>
            <!-- End of the container-->
        </div>

        <script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>