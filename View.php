<html>
    <head>
        <title>Mark the Mahapola</title>

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
                    <span></span>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                    echo "<h1 class='text-center'>"."Hello ".$_SESSION["PHOTO"]."</h1>";
                                    ?>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"><?php
                                    echo "<h1 class='text-center'>"."Hello ".$_SESSION["NAME"]."</h1>";
                                    ?>
                                    <form action="View_action.php" method="post">
                                        <legend>
                                            <label>Registration Number</label>
                                            <input type="text" name="reg" placeholder="Enter the Reg No." class="form-control"><br/>
                                            
                                            <label>Mahapola installment</label>
                                            <input type="checkbox" name="mahapola"><br/>
                                            
                                            <input type="submit" value="sumbit your selection" class="btn btn-success">
                                            <input type="button" value="Cancel" class="btn btn-danger">
                                            <a href="logout.php" class="btn btn-success"> Logout </a>
                                        </legend>
                                    </form>
                                </div>
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
