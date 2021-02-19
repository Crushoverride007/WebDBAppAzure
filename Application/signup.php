<!--
 * File : signup.php (Sign Up)
 * Developer : Mouhcine MESMOUKI + Omar ABDELMOUJIB
 -->

<!DOCTYPE html>
<head>
   <title>Home</title>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
   <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
   <script language="javascript" type="text/javascript">
      function validateForm() {
          var firstname = document.forms["myForm"]["firstname"].value;
          var lastname = document.forms["myForm"]["lastname"].value;
          var email = document.forms["myForm"]["email"].value;
          var password= document.forms["myForm"]["password"].value;
          var age = document.forms["myForm"]["age"].value;
          var phone = document.forms["myForm"]["phone"].value;
          var phone = document.getElementById("phone");
          var phnchk = /^\d{10}$/;
          var gender = document.forms["myForm"]["gender"].value;
          var dob = document.forms["myForm"]["dob"].value;
          var comment = document.forms["myForm"]["comment"].value;

          if (firstname == "") {
              alert("First Name must be filled");
              return false;
          }
          else
          if (lastname == "") {
              alert("Last Name must be filled");
              return false;

          }
          else
          if (email == "") {
              alert("Email must be filled");
              return false;

          }
          else
          if (password == "") {
              alert("Password must be filled");
              return false;

          }
          else
          if (age == "") {
              alert("Age must be filled");
              return false;

          }
          else
          if (phone == "") {
              alert("Phone must be filled");
              return false;

          }
          if(!phnchk.test(phone.value)){
              alert("Enter 10 digit mobile number");
              return false;
          }
          else
          if (gender == "") {
              alert("Gender must be filled");
              return false;

          }
          else
          if (dob == "") {
              alert("Birthdate must be filled");
              return false;

          }
          else
          if (comment == "") {
              alert("Comment must be filled");
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
               <h4>Sign Up</h4>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="section">
         <div class="row">
            <div class="row">
               <form class="col s12" name="myForm" action="data.php" onsubmit="return validateForm()" method="POST">
                  <div class="row">
                    <div class="input-field col s4">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="firstname" type="text">
                        <label for="firstname">First Name</label>
                     </div>
                     <div class="input-field col s4">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="lastname" type="text">
                        <label for="lastname">Last Name</label>
                     </div>
                     <div class="input-field col s4">
                        <i class="material-icons prefix">email</i>
                        <input name="email" type="email">
                        <label for="email">Email</label>
                     </div>
                  </div>
                  <div class="row">
                     <div class="input-field col s4">
                        <i class="material-icons prefix">lock</i>
                        <input name="password" type="password">
                        <label for="password">Password</label>
                     </div>
                     <div class="input-field col s4">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="age" type="text">
                        <label for="age">Age</label>
                     </div>
                     <div class="input-field col s4">
                        <i class="material-icons prefix">phone</i>
                        <input name="phone" id="phone" type="text" length="10">
                        <label for="phone">Phone</label>
                     </div>
                  </div>
                  <div class="row">
                     <div class="input-field col s4">
                        <select name="gender" id="gender" class="browser-default">
                           <option value="" disabled selected>Gender</option>
                           <option value="Male">Male</option>
                           <option value="Female">Female</option>
                        </select>
                     </div>
                     <div class="input-field col s4">
                        <i class="material-icons prefix">star</i>
                        <input name="dob" type="date" class="datepicker">
                     </div>
                     <div class="input-field col s4">
                        <i class="material-icons prefix">chat_bubble_outline</i>
                        <input name="comment" type="text" length="100">
                        <label for="comment">Comments</label>
                     </div>
                  </div>
            </div>
            <center>
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
            </button>
            </center>
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
               <p class="grey-text text-lighten-4">This Web Appp is developped using PHP, MySQL, HTML, CSS, JS and Bootstrap (For Templates) to test our CICD Pipeline, with a potential inclusion of DevSecOps later</p>
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
                  <li><a class="white-text">Web Page designed with php</a></li>
                  <li><a class="white-text">Dynamic web site</a></li>
                  <li><a class="white-text">Responsive Design (Template used from quora)</a></li>
                  <li><a class="white-text">Built on Macintosh and ubuntu on a virtual Machine {parralels Desktop}</a></li>
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
