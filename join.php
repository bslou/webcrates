<html>
<head>
<title>Webcrates - Join</title>
<style>
.big{
  height: 30px;
  width: 400px;
  padding: 10px;
}
.lab{
  font-size: 20pt;
  float: left;
}
.buh{
  width: auto;
  padding: 10px;
  font-size: 12pt;
  border-radius: 15px 15px 15px 15px;
  border: 0.5px solid black;
  
}
.buh:hover{
  cursor: pointer;
  opacity: 0.8;
}
.buh:focus{
  outline: none;
  border: 2px solid orange;
}
.big:focus{
  outline-color: orange;
}
a{
  text-decoration: none;
  color: blue;
  font-size: auto;
}
a:focus{
  outline-color: orange;
}
a:hover{
  text-decoration: underline;
}

</style>
</head>
<!-- style = "background-image: url('https://p1.pxfuel.com/preview/879/263/757/wall-light-course-color.jpg'); background-size: 100% 100%;"-->
<body>
<center><a href = "index.php"><img src = "https://www.freelogoservices.com/api/main/images/1j+ojFVDOMkX9Wytexe43D6kifSDpRRGmR7NwXs1M3EMoAJtlSksjvNo8f88" alt = "Logo" style = "width:140px; height: 70px;"></a></center>
<br><br><br>
<center>
<div style = "border: 1px solid #cacaca; width: 700px; background-color: #fbfbfb; border-radius: 15px 15px 15px 15px;">
<form action = "storeReg.php" method = "post" onsubmit = "return checkforblank();">
<h1 style = "margin-right: 200px; font-weight: 500;">Create Account</h1><br><p id = "error" style = "color: red; width: 300px; background-color: #F9E1E1; border-radius: 10px 10px 10px 10px;"></p>
<label for = "name" class = "lab" style = "margin-left: 150px;">Name</label><br><br>
<input type = "text" id = "name" class = "big" name = "name" placeholder = "First name..."><br><br>
<label for = "email" class = "lab" style = "margin-left: 150px;">Email</label><br><br>
<input type = "text" name = "email" id = "email" class = "big"><br><br>
<label for = "password" class = "lab" style = "margin-left: 150px;">Password</label><br><br>
<input type = "password" id = "pass" class = "big" name = "password" placeholder = "At least 6 digits..."><br><br><br>
<input type = "submit" class = "buh" value = "Join Now">
</form>
<p>Have an account? <a href = "login.php">Log-in</a>!</p>
<br>
</div>
</center>
<script>
function checkforblank(){
var errormessage = "";
    if (document.getElementById("name").value == ""){
      errormessage += "No username entered <br>";
      document.getElementById("name").style.borderColor = "red";
    }else if (document.getElementById("name").value.length < 2){
      errormessage += "Name must be at least 2 characters <br>";
      document.getElementById("name").style.borderColor = "red";
    }else if(/\s/g.test(document.getElementById("name").value) || /[,\-]/.test(document.getElementById("uname").value)){
      errormessage += "No spaces or commas allowed <br>";
      document.getElementById("name").style.borderColor = "red";
    }else{
      document.getElementById("name").style.borderColor = "lightgray";
    }
    if (document.getElementById("email").value == ""){
      errormessage += "No email entered <br>";
      document.getElementById("email").style.borderColor = "red";
    }else if (!(/\S+@\S+\.\S+/.test(document.getElementById("email").value))){
      errormessage += "Not an email <br>";
      document.getElementById("email").style.borderColor = "red";
    }else{
      document.getElementById("email").style.borderColor = "lightgray";
    }
    if (document.getElementById("pass").value == ""){
      errormessage += "No password entered";
      document.getElementById("pass").style.borderColor = "red";
    }else if (document.getElementById("pass").value.length < 6){
      errormessage += "Password must be at least 6 characters";
      document.getElementById("pass").style.borderColor = "red";
    }else{
      document.getElementById("pass").style.borderColor = "lightgray";
    }
    
    if (errormessage != ""){
      document.getElementById("error").innerHTML = errormessage;
      document.getElementById("error").style.border = "1px solid red";
      return false;
    }
}


</script>
</body>

</html>
