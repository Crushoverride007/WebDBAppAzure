<!--
 * File : login.php (Login)
 * Developer : Mouhcine MESMOUKI + Omar ABDELMOUJIB
 -->

<?php

include('loginchk.php');
if(isset($_SESSION['login_user'])){
}

?>

<!DOCTYPE html>

<head>
    <title>User Search</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />

    <script language="javascript" type="text/javascript">
        function validateForm() {
            var email = document.forms["Form"]["email"].value;
            var password = document.forms["Form"]["password"].value;
            if (email == "") {
                alert("Email Required");
                return false;
            }
            else
            if(password == ""){
                alert("Password Required");
                return false;
            }
        }
    </script>
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
                    <h4>User Login</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="row">
                    <form class="col s12" name="Form" action="" onsubmit="return validateForm()" method="POST">
                        <div class="row">
                            <div class="input-field col s4">
                                <i class="material-icons prefix">email</i>
                                <input name="email" type="email">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field col s4">
                                <i class="material-icons prefix">lock</i>
                                <input name="password" type="password">
                                <label for="password">Password</label>
                            </div>
                            <button class="btn waves-effect waves-light" type="submit" name="submit">Login
                                <i class="material-icons right">send</i>
                            </button>

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
                    <p class="grey-text text-lighten-4">This Web App is developped using PHP, MySQL, HTML, CSS, JS and Bootstrap (For Templates)  to test our CICD Pipeline, with a potential inclusion of DevSecOps later</p>
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
                        <li><a class="white-text">Web Page Designed with php</a></li>
                        <li><a class="white-text">Dynamic web site</a></li>
                        <li><a class="white-text">Responsive Design (Template used from qquora)</a></li>
                        <li><a class="white-text">Built on Macintosh and ubuntu (On a virtual Machine {parralels Desktop})</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Made by <a class="brown-text text-lighten-3" href="http://github.com/Crushoverride007" target="blank">Mouhcine MESMOUKI and Omar ABDELMOUJIB</a>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
</body>

</html>
