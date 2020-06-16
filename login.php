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
<!--style = "background-image: url('https://p1.pxfuel.com/preview/317/296/35/background-sunlight-abstract-blur.jpg'); background-size: 100% 100%;"-->
<body>
<center><a href = "index.php"><img src = "https://www.freelogoservices.com/api/main/images/1j+ojFVDOMkX9Wytexe43D6kifSDpRRGmR7NwXs1M3EMoAJtlSksjvNo8f88" alt = "Logo" style = "width:140px; height: 70px;"></a></center>
<br><br><br>
<center>
<div style = "border: 1px solid #cacaca; width: 700px; background-color: #fbfbfb; border-radius: 15px 15px 15px 15px;">
<form action = "checkLog.php" method = "post" onsubmit = "return checkforblankT();">
<h1 style = "margin-right: 330px; font-weight: 500;">Login</h1><br>
<p id = "error2" style = "color: red; width: 300px; background-color: #F9E1E1; border-radius: 10px 10px 10px 10px;"></p>
<label for = "email" class = "lab" style = "margin-left: 150px;">Email</label><br><br>
<input type = "text" name = "email" id = "email" class = "big"><br><br>
<label for = "password" class = "lab" style = "margin-left: 150px;">Password</label><br><br>
<input type = "password" id = "password" class = "big" name = "password"><br><br><br>
<input type = "submit" class = "buh" value = "Join Now">
</form>
<p>Do not have an account? <a href = "join.php">Join</a>!</p>
<br>
</div>
</center>
<script>
function checkforblankT(){
  var errormessaget = "";
    if (document.getElementById("email").value == ""){
      errormessaget += "No email entered <br>";
      document.getElementById("email").style.borderColor = "red";
    }else{
      document.getElementById("email").style.borderColor = "lightgray";
    }
    if (document.getElementById("password").value == ""){
      errormessaget += "No password entered";
      document.getElementById("password").style.borderColor = "red";
    }else{
      document.getElementById("password").style.borderColor = "lightgray";
    }
    if (errormessaget != ""){
      document.getElementById("error2").innerHTML = errormessaget;
      document.getElementById("error2").style.border = "1px solid red";
      return false;
    }
}

</script>
</body>

</html>
