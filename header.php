<style type="text/css">
<!--
.top-bar{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 5050;
    background-color: #fafafb;
    transition: box-shadow 0px 8px 16px 0px rgba(0,0,0,0.2);
    height: 50px;
    box-sizing: border-box;
    font-family: Arial,"Helvetica Neue",Helvetica,sans-serif;
    border-top: 3px solid #1DB954;
    border-bottom: 1px solid lightgrey;
}
.dropbtn {
  background-color: #833AB4;
  color: white;
  padding: 11px;
  font-size: 11px;
  border: none;
  cursor: pointer;
  font-weight: light;
        font-family:'Trebuchet MS', sans-serif;
        border-radius: 5%;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #DB4437;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.dropbutton {
  background-color: #1DB954;
  color: white;
  padding: 11px;
  font-size: 11px;
  border: none;
  cursor: pointer;
  font-family:'Trebuchet MS', sans-serif;
        border-radius: 5%;
}

.addq{
  background-color: #1DB954;
  color: white;
  padding: 11px;
  font-size: 11px;
  border: none;
  cursor: pointer;
  font-family:'Trebuchet MS', sans-serif;
        border-radius: 5%;
}

.addq:hover{
background-color: #DB4437;
}
.dropd {
  position: relative;
  display: inline-block;
}

.dropd-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropd-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropd-content a:hover {background-color: #ddd;}

.dropd:hover .dropd-content {display: block;}

.dropd:hover .dropbutton {background-color: #3e8e41;}

.show {display: block;}
-->
</style>
<div class="top-bar">
<div style="position: absolute; top:8%;left:2%;"class="dropd">
  <button class="dropbutton">HOME</button>
  <div class="dropd-content">
    <a href="index.php">About</a>
    <a href="#">Contact Us</a>
    <a href="https://github.com/PriyanshuMay/GNE-Gate-Forum.git">Download</a>
  </div>
</div>
<img style="position: absolute;top:2%;left:7%;" class="img-topbar" src="Topbar.png"  width="290px" height="45px" />
  <?php
  if(isset($_SESSION['login'])){
    echo "<div style=\"position: absolute; top:8%;right:2%;\" class=\"dropdown\">
  <button onclick=\"myFunction()\" class=\"dropbtn\">My Account</button>
  <div id=\"myDropdown\" class=\"dropdown-content\">
    <a href=\"index.php\">Home</a>
    <a href=\"signout.php\">LogOut</a>
    <a href=\"#blocked\">Change Password</a>
  </div>
</div>";}
    else
   {
    echo "<div style=\"position: absolute; top:8%;right:2%;\" class=\"dropdown\">
  <button onclick=\"myFunction()\" class=\"dropbtn\">SignIn/SignUp</button>
  <div id=\"myDropdown\" class=\"dropdown-content\">
    <a href=\"index.php\">SignIn</a>
    <a href=\"signup.php\">SignUp</a>
  </div>
</div>";
   }
    ?>
    <button style="position: absolute;right:10%;top:8%;" class="addq">Add Quesion</button>
</div>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
  <?php @$_SESSION['login']; 
  error_reporting(1);
  ?>  
</table>
