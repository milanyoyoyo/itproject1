<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
</style>
</head>
<body>
sorry login failed plz try again with correct username and password 
<ul>
  <li><a href='homebl.html'>Home</a></li>
  <li><a href='login.php'>login</a></li>
  <li><a href='signup.php'>sign up</a></li>
   <li style="float:right"><a class="active" href='how.php'>how we work</a></li> 
  <li style="float:right"><a class="active" href='about.php'>About us</a></li>
</ul>

</body>
</html>