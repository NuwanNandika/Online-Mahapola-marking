<!--Start of the header-->
<div class="row"id="header">
    <div class="col-md-2" >
        <img src="images/logo eka.png" class="center-block">
    </div>
    <div class="col-md-8" id="topics" >
        <center>     <span id="topic_1">Mahapola Online Signing</span><br/></center>
        <center> <span id="topic_2">Student affiar Branch</span><br/></center>
        <center> <span id="topic_3">Sabaragamuwa University of sri lanka</span></center>
    </div>
    <div class="col-md-2" >
        <img src="images/campus.png"class="center-block">
    </div>
    <!--End of the header-->
</div>

<!--Start of the details-->
<div class="row">
    <div class="col-md-12">

    </div>
    <!--End of the details-->
</div>



<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["UID"])) {
    //echo "UID=".$_SESSION["UID"];
    //Login Wechha Aya
    //echo "<h1 class='text-center'>"."Hello ".$_SESSION["NAME"]."</h1>";
    if ($_SESSION["ROLE"] == "a") {
        ?>
        <!-- Start of the navigation bar-->
        <div class="row">
            <div class="col-md-12" id="nbar">

                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <div class="navbar-header">

                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>
                    </div>

                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="">
                                <a href="iindex.php"> Home</a></li>

                            <li><a href="register.php"> Registration</a></li>
                            <li><a href="login.php"> Login</a></li>
                            <li><a href="addStudent.php"> Add Students</a></li>
                            <li><a href="member_list.php"> holders</a></li>
                            <li><a href="comment_list.php"> Comments</a></li>
                            <li><a href="contactUs.php"> Contact us</a></li>
                            <li><a href="addStudent.php"> About us</a></li>
                        </ul>
                        <a href="logout.php" class="btn btn-success"> Logout </a>
                        <form class="navbar-form navbar-right" >
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit" id="gly" width="40px" height="34px">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </nav>

            </div>
            <!-- End of the navigation bar--> 
        </div>

        <?php
    }
    if ($_SESSION["ROLE"] == "m") {
        ?>
        <!-- Start of the navigation bar-->
        <div class="row">
            <div class="col-md-12" id="nbar">

                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <div class="navbar-header">

                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>
                    </div>

                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="">
                                <a href="iindex.php"> Home</a></li>

                            <li><a href="register.php"> Registration</a></li>

                            <li><a href="member_list.php"> holders</a></li>

                            <li><a href="contactUs.php"> Contact us</a></li>

                            <li><a href="##"> About us</a></li>
                        </ul>
                        <a href="logout.php" class="btn btn-success"> Logout </a>
                        <form class="navbar-form navbar-right" >
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit" id="gly">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </nav>

            </div>
            <!-- End of the navigation bar--> 
        </div>
        <?php
    }
    ?>

    <?php
} else {




    //echo "ELSE";
    //Login Nowechha Aya
    ?>

    <!-- Start of the navigation bar-->
    <div class="row" id="nbar_row">
        <div class="col-md-12" id="nbar">

            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>
                </div>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="">
                            <a href="iindex.php"> Home</a></li>

                        <li><a href="register.php"> Registration</a></li>
                        <li><a href="login.php"> Login</a></li>
                        <li><a href="contactUs.php"> Contact us</a></li>
                        

                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">About Us <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="contactUs.php"> Contact us</a></li>
                                <li><a href="Mission.html">Vision And Mission</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-right" >
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit" id="gly">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </nav>

        </div>
        <!-- End of the navigation bar--> 
    </div>
    <?php
}
?>