<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}


input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}


button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}


.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}


.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}


.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}


@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<form name = "reg_user" action="inc/server.php" method="post" style="border:1px solid #ccc">
  <div class="container">
    <h1>Admin Login</h1>
   <hr>

    
    <label for="name"><b>Username</b></label>
    <input type="text" placeholder="Enter your name" name="username" required>

    <label for="name"><b>Email</b></label>
    <input type="text" placeholder="Enter your name" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password_1" required>

    <label for="psw"><b>Re-Enter Password</b></label>
    <input type="password" placeholder="Re-Enter Password" name="password_2" required>

   

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" name="login_user" class="signupbtn">Login</button>
    </div>
  </div>
</form>

</body>
</html>
