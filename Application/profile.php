<!--
 * File : profile.php
 * Developer : Mouhcine MESMOUKI and Omar ABDELMOUJIB
 -->

<?php
include('session.php');
?>

<!DOCTYPE html>

<head>
    <title>User Search</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="index.php" class="brand-logo">Web App</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="index.php">Home</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="search.php">Search</a></li>
            </ul>
            <ul id="nav-mobile" class="side-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="search.php">Search</a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 center">
                    <h3><i class="mdi-content-send brown-text"></i></h3>
                    <h4>Welcome!</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="col s12 m8">
                                <div class="card blue-grey darken-1">
                                    <div class="card-content white-text">
                                        <span class="card-title">User Details | <a href="logout.php">Logout</a></span>
                                        <br>
                                        <?php
                                          $link = mysqli_connect("192.168.188.140", "crushoverride007", "mouhcine", "WebDBApp");
                                          if (!empty($_REQUEST['email'])) {
                                              $email     = mysqli_real_escape_string($link, $_REQUEST['email']);
                                              $sql       = "SELECT * FROM userdata WHERE email LIKE '%" . $email . "%'";
                                              $r_query   = mysqli_query($link, $sql);
                                              while ($row = mysqli_fetch_array($r_query)) {
                                                  echo 'First Name: ' . $row['firstname'];
                                                  echo '<br /> Last Name: ' . $row['lastname'];
                                                  echo '<br /> Age: ' . $row['age'];
                                                  echo '<br /> Phone: ' . $row['phone'];
                                                  echo '<br /> Gender: ' . $row['gender'];
                                              }
                                          }
                                          mysqli_close($link);
                                        echo "This is your dashboard";
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="page-footer teal">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">About</h5>
                    <p class="grey-text text-lighten-4">This Web App is developped using PHP, Mysql, HTML, CSS, JS and Bootstrap (For Templates) to test our CICD Pipeline, with a potentian inclusion of DevSecOps later</p>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Tech Specs</h5>
                    <ul>
                      <li><a class="white-text">HTML : 5</a></li>
                      <li><a class="white-text">CSS : 3</a></li>
                      <li><a class="white-text">Javascript : 1.7</a></li>
                      <li><a class="white-text">PHP : 7.0.8</a></li>
                      <li><a class="white-text">MySQL : 5.5.42</a></li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">At a glance</h5>
                    <ul>
                        <li><a class="white-text">Web Page desgined with php</a></li>
                        <li><a class="white-text">Dynamic web site</a></li>
                        <li><a class="white-text">Responsive Design (Template used from quora)</a></li>
                        <li><a class="white-text">Built on Macintosh and ubuntu (On a virtual Machine {Parralels Desktop})</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Made by <a class="brown-text text-lighten-3" href="http://github.com/crushoverride007" target="blank">Mouhcine MESMOUKI and Omar ABDELMOUJIB</a>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
</body>

</html>
