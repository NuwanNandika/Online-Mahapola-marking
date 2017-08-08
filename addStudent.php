<html>
    <head>
        <title>Login your account</title>

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
                <div class="col-md-12">
                    <center><span id="add">Adding Students for the Applying Mahapola</span></center>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="jumbotron" id="adding_form">
                            <form action="addStudent_action.php" method="post">
                                <legend>
                                    <label>Name of the student</label>
                                    <input type="text" name="name" class="form-control" placeholder="Student's Name"> <br/>
                                    
                                    <label>Faculty of the student</label>
                                    <input type="text" name="faculty" class="form-control" placeholder="Student's Faculty"><br/>
                                    
                                     <label>Department of the student</label>
                                    <input type="text" name="dept" class="form-control" placeholder="Student's Name"><br/>
                                    
                                    <label>Reg.No of the student</label>
                                    <input type="text" name="reg" class="form-control" placeholder="Student's registration number"><br/>
                                    
                                    <label>Bank Account Number of the student</label>
                                    <input type="text" name="acc_no" class="form-control" placeholder="Student's Account number"><br/>
                                    
                                    <input type="submit" value="Submit" class="btn btn-success">
                                    <input type="button" value="Reset" class="btn btn-danger">
                                    
                                   
                                </legend>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
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
