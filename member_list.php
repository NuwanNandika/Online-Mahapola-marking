<html>
    <head>
        <title>Member List</title>

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


                    <div class="jumbotron">
                        <h2> Member List</h2>
                        <hr/>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th> ID</th>
                                    <th> NAME</th>
                                    <th> DEPARTMENT</th>
                                    <th> REGISTRATION NO.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require("Include/database.php");
                                $sql = "SELECT * FROM student";
                                $result = mysqli_query($con, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    ?>

                                    <tr>
                                        <td> <?= $row["id"] ?> </td>
                                        <td> <?= $row["name"] ?></td>
                                        <td> <?= $row["department"] ?></td>
                                        <td> <?= $row["reg_no"] ?></td>
                                    </tr>

                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>


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