<html>
    <head>
        <title>Login your account</title>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/Design.css">
    </head>
    <body>
        <!-- Start of the container-->
        <div class="container-fluid " id="reg_container">
            <?php
            include("Include/header.php");
            ?>
            <div class="row" id="contact_body">
                <div class="container" >
                    <div class="row">
                        <div class="col-md-12" id="body_top">
                            <span> If you have any question you can contact us and send a message from filling this form. </span>
                        </div>
                        <div class="col-md-12">
                            <form action="contactUs_action.php" method="post">
                                <legend>
                                    <lable class="lable">Name</lable>
                                    <input type="text" name="name" class="form-control"><br/>

                                    <lable class="lable">Email</lable>
                                    <input type="email" name="email" class="form-control"><br/>

                                    <lable class="lable">Phone</lable>
                                    <input type="text" name="tele" class="form-control"><br/>

                                    <lable class="lable">Message</lable>
                                    <textarea name="message" cols="20" class="form-control"></textarea>
                                </legend>
                                <input type="reset" value="Reset" class="btn btn-danger pull-right">
                                <input type="submit" value="Send" class="btn btn-success pull-right">


                            </form>
                        </div>
                    </div>
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

