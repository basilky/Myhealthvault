<?php
session_start();

if (!isset($_SESSION['username']) || empty($_SESSION['username']))
{

    header("location: https://myhealthvault.dx.am");

    exit;

}
?>
<!DOCTYPE html>
<html>


<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles/style.css">
<script type="text/javascript" >
    var user='<?php echo $_SESSION['username']; ?>';
    //alert(user);
</script>
<script>
/*
function fopen(x)
{
var obj = document.getElementById(x);
obj.style.WebkitTransition = 'width 0.4s';
obj.style.MozTransition = 'width 0.4s';
obj.style.border = '1px solid rgb(0,130,240)';
obj.style.width = "100%";
}

function fclose(x)
{
var obj = document.getElementById(x);
obj.style.border = '0px solid rgb(0,130,240)';
obj.style.width = "0";
}
*/

function loaddoc() {

    var r=document.getElementById('share_r').value;
    var f=document.getElementById('share_f').value;
        // alert(r+f);
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "sharefile.php?email="+r+"&file="+f, true);
  xhttp.send();

}





</script>

</head>






<body style="background-image:url('images/bk/23.jpg');background-size:cover;background-position:center;background-attachment:fixed;">







<!-- ________MENU________ -->
<div id="menu">
<div id="logo"></div>
<p>HealthVault</p>
<div id="signout_btn"></div>
</div>
<!-- ________END OF MENU________ -->










<!-- ________HOME________ -->
<div id="home">
<div id="panel">

<h1 style="padding:20px;color:rgb(100,0,100);text-shadow:0 0 5px white;">Welcome to HealthVault</h1>



<div class="micon" onclick="show('mailer');">
<div style="background-image:url('images/inbox.png');">
</div>
<p>Mailer</p>
</div>

<div class="micon" onclick="show('file_manager');">
<div style="background-image:url('images/filemanager.png');">
</div>
<p>File Manager</p>
</div>

<div class="micon" onclick="show('user_profile');">
<div style="background-image:url('images/userinfo.png');">
</div>
<p>User Profile</p>
</div>

<div class="micon" onclick="show('health_data');">
<div style="background-image:url('images/healthinfo.png');">
</div>
<p>Health Data</p>
</div>

<div class="micon" onclick="show('account_settings');">
<div style="background-image:url('images/accountsettings.png');">
</div>
<p>Account Settings</p>
</div>

<div class="micon" onclick="show('features');">
<div style="background-image:url('images/features.png');">
</div>
<p>Features</p>
</div>

<div class="micon" onclick="show('contacts');">
<div style="background-image:url('images/contacts.png');">
</div>
<p>Contacts</p>
</div>

<div class="micon">
<div style="background-image:url('images/permissions.png');">
</div>
<p>Permissions</p>
</div>

<div class="micon" onclick="show('connect');">
<div style="background-image:url('images/manageaccounts.png');">
</div>
<p>Connect</p>
</div>

<div class="micon" onclick="show('help');">
<div style="background-image:url('images/help.png');">
</div>
<p>Help</p>
</div>



</div>
</div>


<!-- ________END OF HOME________ -->


















<!-- ________MAILER________ -->
<div id="mailer" style="display:none;width:100%;text-align:center;font-size:0;padding-top:100px;">

<div class="back_btn" style="position:fixed;left:10px;top:30px;width:30px;height:30px;border-radius:50%;z-index:100;" onclick="show('home');"></div>










<div style="display:inline-block;width:95%;background:rgb(255,255,255);text-align:left;box-shadow:0 0 15px black;">







<div class="flex-container">


<div id="mailer-sidebar" onclick="hidemenu();">
<div class="mailer-sidebar-btn" >Inbox</div>
<div class="mailer-sidebar-btn" >Sent</div>
<div class="mailer-sidebar-btn" >Drafts</div>
<div class="mailer-sidebar-btn" >Trash</div>
</div>


<div style="background:white;font-size:12px;color:black;font-weight:300;">





<div style="width:100%;padding:7px;background:rgb(20,50,100);text-align:right;">

<div id="mailer-menu" style="width:35px;height:30px;margin:5px;background-image:url('images/menu.png');float:left;background-size:cover;display:inline-block;" onclick="showmenu();"></div>

<div style="width:30px;height:30px;margin:5px;border-radius:50%;background-image:url('images/new.png');background-size:cover;display:inline-block;" onclick="show('compose');"></div>

</div>


<script>

function showmenu()
{
document.getElementById('mailer-sidebar').style.left=0;
}

function hidemenu()
{

document.getElementById('mailer-sidebar').style.left="-100%";
}

</script>


<div style="width:100%;border:2px solid red;overflow-y:scroll;height:400px;">
<div class="mailer-mail-item" ><p style="float:left;">no subject</p><p style="float:right;">18 Jan 2018</p></div>
<div class="mailer-mail-item" ><p style="float:left;">no subject</p><p style="float:right;">18 Jan 2018</p></div>
<div class="mailer-mail-item" ><p style="float:left;">no subject</p><p style="float:right;">18 Jan 2018</p></div>
<div class="mailer-mail-item" ><p style="float:left;">no subject</p><p style="float:right;">18 Jan 2018</p></div>
<div class="mailer-mail-item" ><p style="float:left;">no subject</p><p style="float:right;">18 Jan 2018</p></div>
<div class="mailer-mail-item" ><p style="float:left;">no subject</p><p style="float:right;">18 Jan 2018</p></div>
<div class="mailer-mail-item" ><p style="float:left;">no subject</p><p style="float:right;">18 Jan 2018</p></div>
<div class="mailer-mail-item" ><p style="float:left;">no subject</p><p style="float:right;">18 Jan 2018</p></div>
<div class="mailer-mail-item" ><p style="float:left;">no subject</p><p style="float:right;">18 Jan 2018</p></div>
<div class="mailer-mail-item" ><p style="float:left;">no subject</p><p style="float:right;">18 Jan 2018</p></div>
<div class="mailer-mail-item" ><p style="float:left;">no subject</p><p style="float:right;">18 Jan 2018</p></div>
</div>

</div>


</div>

</div>



<style>

.mailer-mail-item{
display:inline-block;
width:100%;
padding:10px;
height:50px;
margin:2px;
font-size:12px; font-weight:bold;
background:rgb(250,250,255);
border-bottom:1px solid cyan;
}
.mailer-mail-item:hover{
background:rgba(0,0,0,0.1);
}

@media only screen and (min-width:0px)
{
#mailer-sidebar
{
position:absolute;
z-index:2;
left:-50%;
top:0;
overflow:hidden;
width:50%;
height:100%;
color:white;
background:rgb(0,170,210);
font-size:12px;
cursor:pointer;
transition:all 0.3s ease-out;
box-shadow:0 0 5px black;
padding:2%;
}
}

@media only screen and (min-width:400px)
{
#mailer-sidebar{
position:absolute;
z-index:2;
left:-15%;
top:0;
overflow:hidden;
width:15%;
height:100%;
color:white;
background:rgb(0,170,210);
font-size:12px;
cursor:pointer;
transition:all 0.3s ease-out;
box-shadow:0 0 5px black;
padding:2%;
}
}




.mailer-sidebar-btn{
width:100%;
padding:5px;
background:rgba(0,0,0,0);
font-weight:bold;
}


.mailer-sidebar-btn:hover
{
background:rgb(0,200,240);
}



.flex-container {
  //display: flex;
  //align-items: stretch;
position:relative;
  background-color: #f1f1f1;
overflow:hidden;
}

.flex-container > div {
  color: white;
  text-align: center;
}
</style>







</div>
<!-- ________END OF MAILER________ -->



















<!-- ________COMPOSE MAIL________ -->
<div id="compose" style="display:none;width:100%;text-align:center;padding:2%;padding-top:100px;">

<div class="back_btn" style="position:fixed;left:10px;top:30px;width:30px;height:30px;border-radius:50%;z-index:100;" onclick="show('mailer');"></div>




<div style="display:inline-block;width:95%;background:rgb(255,255,255);padding:2%;">

















<style>

#compose-form input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

#compose-form input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

#compose-form input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
text-align:left;
}
</style>





<h3>Contact Form</h3>

<div class="container">
  <form id="compose-form"action="/action_page.php">
    <label for="fname">To</label>
    <input type="text" id="fname" name="firstname" placeholder="Email/HealthVault account">

    <label for="lname">Subject</label>
    <input type="text" id="lname" name="lastname" placeholder="">

    <label for="country">Send to</label>
    <select id="country" name="country">
      <option value="Email">Email account</option>
      <option value="HealthVault">HealthVault Account</option>
    </select>

    <label for="subject"></label>
    <textarea id="subject" name="subject" placeholder="You mail" style="height:200px"></textarea>

<input type="submit" value="Send">
<input type="submit" value="Save as draft">

  </form>
</div>













</div>





</div>
<!-- ________END OF COMPOSE MAIL________ -->












<!-- ________FILE MANAGER________ -->
<div id="file_manager" style="display:none;width:100%;text-align:center;padding-top:100px;">


<div class="back_btn" style="position:fixed;left:10px;top:30px;width:30px;height:30px;border-radius:50%;z-index:100;" onclick="show('home');"></div>





<div id="overlay" style="position:fixed;left:0;top:0;width:100%;height:100%;display:none;background:rgba(0,0,0,0.3);z-index:1000;text-align:center;">


<div style="padding:2%;display:inline-block;background:white;margin-top:15%;">


<p style="color:rgb(44,181,232);font-weight:bold;font-size:20px;">Share files</p>

<form id="shareform">

<div class="block">
<input id="share_r" type="text" placeholder="Recipient" >
</div>

<div class="block">
<input id="share_f" type="text"  placeholder="filename">
</div>


<div class="block">
<button onclick="loaddoc();">Share</button>
</div>


</form>

</div>

</div>


<style>

#shareform .block{
padding:2%;
}
#shareform input{
padding:5px;
font-size:12px;
font-weight:bold;
border:1px solid cyan;
}


</style>






<div style="display:inline-block;width:95%;background:rgb(255,255,255);text-align:left;box-shadow:0 0 15px black;">



<div style="background:rgb(210,230,255);padding:10px;">
<h1 style="display:inline-block;color:rgb(120,0,200);">All files</h1>


<div style="display:inline-block;margin:10px;background:orange;width:30px;height:30px;z-index:100;background-image:url('images/share.png');background-size:cover;float:right;" onclick="document.getElementById('overlay').style.display='block';"></div>
<div style="display:inline-block;margin:10px;background:orange;width:30px;height:30px;z-index:100;background-image:url('images/remove.png');background-size:cover;float:right;"></div>
<div style="display:inline-block;margin:10px;background:orange;width:30px;height:30px;z-index:100;background-image:url('images/upload.png');background-size:cover;float:right;" onClick="window.open('http://myhealthvault.dx.am/uploadfiles');"></div>
<div style="display:inline-block;margin:10px;background:orange;width:30px;height:30px;z-index:100;background-image:url('images/download.png');background-size:cover;float:right;"></div>

</div>


<hr>
<div id="folder" style="height:400px;padding:1%;overflow-y:scroll;"></div>
<hr>

</div>
</div>
<!-- ________END OF FILE MANAGER________-->


















<!-- ________USER PROFILE________ -->
<div id="user_profile" style="display:none;width:100%;text-align:center;padding:3%;padding-top:100px;">


<div class="back_btn" style="position:fixed;left:10px;top:30px;width:30px;height:30px;border-radius:50%;z-index:100;" onclick="show('home');"></div>


<div class="user_profile_pane">

<div style="display:inline-block;width:100px;border-radius:50%;padding-bottom:100px;margin:2%;background-image:url('images/profilepic.png');background-size:cover;">
</div>

<p style="color:rgb(250,181,0);font-weight:bold;font-size:20px;margin-top:30px;">Personal info</p>


<div class="user_profile_pane_block">
<p>Name : </p>
<p id="HVUD_profile_name"></p>
</div>

<div class="user_profile_pane_block">
<p>Date of Birth : </p>
<p id="HVUD_profile_DOB"></p>
</div>

<div class="user_profile_pane_block">
<p>Gender : </p>
<p id="HVUD_profile_gender"></p>
</div>

<div class="user_profile_pane_block">
<p>Identification mark : </p>
<p id="HVUD_profile_ID_mark"></p>
</div>


<p style="color:rgb(250,181,0);font-weight:bold;font-size:20px;margin-top:30px;">Family details</p>

<div class="user_profile_pane_block">
<p>Father : </p>
<p id="HVUD_profile_father"></p>
</div>

<div class="user_profile_pane_block">
<p>Mother : </p>
<p id="HVUD_profile_mother"></p>
</div>

<div class="user_profile_pane_block">
<p>Siblings : </p>
<p id="HVUD_profile_siblings"></p>
</div>

<div class="user_profile_pane_block">
<p>Spouse : </p>
<p id="HVUD_profile_spouse"></p>
</div>

<div class="user_profile_pane_block">
<p>Children : </p>
<p id="HVUD_profile_children"></p>
</div>


<p style="color:rgb(250,181,0);font-weight:bold;font-size:20px;margin-top:30px;">Contact Info</p>

<div class="user_profile_pane_block">
<p>Home Address : </p>
<p id="HVUD_profile_home_address"></p>
</div>

<div class="user_profile_pane_block">
<p>Country : </p>
<p id="HVUD_profile_country"></p>
</div>

<div class="user_profile_pane_block">
<p>Email id : </p>
<p id="HVUD_profile_email"></p>
</div>

<div class="user_profile_pane_block">
<p>Phone : </p>
<p id="HVUD_profile_phone"></p>
</div>

<div class="user_profile_pane_block">
<button onclick="show('user_profile_editor');">Edit</button>
</div>







</div>
</div>
<!-- ________END OF USER PROFILE________ -->




















<!-- ________USER PROFILE EDITOR________ -->
<div id="user_profile_editor" style="display:none;width:100%;text-align:center;padding:2%;padding-top:100px;">


<div class="back_btn" style="position:fixed;left:10px;top:30px;width:30px;height:30px;border-radius:50%;z-index:100;" onclick="show('user_profile');"></div>


<div class="user_profile_editpane">

<div style="display:inline-block;width:100px;padding-bottom:100px;border-radius:50%;margin:8%;background-image:url('images/logo.png');background-size:cover;">
</div>

<p style="color:rgb(44,181,232);font-weight:bold;font-size:20px;">Personal info</p>

<form>

<div class="user_profile_editpane_block">
<p>Name</p>
<input type="text">
</div>

<div class="user_profile_editpane_block">
<p>Date of Birth</p>
<input type="text">
</div>

<div class="user_profile_editpane_block">
<p>Gender</p>
<input type="text">
</div>

<div class="user_profile_editpane_block">
<p>Identification mark</p>
<input type="text">
</div>

<div class="user_profile_editpane_block">
<button>Update</button>
</div>



</form>

</div>












<div class="user_profile_editpane">
<p style="color:rgb(44,181,232);font-weight:bold;font-size:20px;">Family</p>


<form>

<div class="user_profile_editpane_block">
<p>Father</p>
<input type="text">
</div>

<div class="user_profile_editpane_block">
<p>Mother</p>
<input type="text">
</div>

<div class="user_profile_editpane_block">
<p>Siblings</p>
<input type="text">
</div>

<div class="user_profile_editpane_block">
<p>Spouse</p>
<input type="text">
</div>

<div class="user_profile_editpane_block">
<p>Children</p>
<input type="text">
</div>

<div class="user_profile_editpane_block">
<button>Update</button>
</div>



</form>

</div>












<div class="user_profile_editpane">
<p style="color:rgb(44,181,232);font-weight:bold;font-size:20px;">Contact</p>


<form>

<div class="user_profile_editpane_block">
<p>Home Address</p>
<input type="text">
</div>

<div class="user_profile_editpane_block">
<p>Email id</p>
<input type="text">
</div>

<div class="user_profile_editpane_block">
<p>Phone</p>
<input type="text">
</div>

<div class="user_profile_editpane_block">
<button>Update</button>
</div>



</form>

</div>





</div>
<!-- ________END OF USER PROFILE EDITOR________ -->



















<!-- ________HEALTH DATA________ -->
<div id="health_data" style="display:none;width:100%;text-align:center;padding:2%;padding-top:100px;">

<div class="back_btn" style="position:fixed;left:10px;top:30px;width:30px;height:30px;border-radius:50%;z-index:100;" onclick="show('home');"></div>




<div style="display:inline-block;width:95%;background:rgb(255,255,255);">















<div class="editpane">

<div style="display:inline-block;width:100px;padding-bottom:100px;border-radius:50%;margin:8%;background-image:url('images/logo.png');background-size:cover;">
</div>

<p style="color:rgb(44,181,232);font-weight:bold;font-size:20px;">Personal info</p>

<form>

<div class="block">
<p>Name</p>
<input type="text">
</div>



<div class="block">
<button>Update</button>
</div>



</form>

</div>













<div class="editpane">
<p style="color:rgb(44,181,232);font-weight:bold;font-size:20px;">Monitored Data</p>

<div class="hr_section_3">
<div class="icon" onclick="show('graph');">Height</div>
<div class="icon" onclick="show('graph');">Weight</div>
<div class="icon">Eye sight</div>
<div class="icon">Blood glucose level</div>
<div class="icon">Cholestrol</div>
<div class="icon">Blood pressure</div>
<div class="icon">Blood count</div>
</div>


</div>










<div class="editpane">
<p style="color:rgb(44,181,232);font-weight:bold;font-size:20px;">Family History</p>

<div class="hr_section_2">
<div class="icon">Blood glucose level</div>
<div class="icon">Cholestrol</div>
<div class="icon">Blood pressure</div>
<div class="icon">Body weight</div>
<div class="icon">opt</div>
<div class="icon">opt</div>
</div>


</div>





















</div>





</div>
<!-- ________END OF HEALTH DATA________ -->


















<!-- ________GRAPH________ -->
<div id="graph" style="display:none;width:100%;background:linear-gradient(135deg,rgb(15,250,173),rgb(31,200,219),rgb(44,151,232));text-align:center;padding:2%;padding-top:100px;">

<div class="back_btn" style="position:fixed;left:10px;top:30px;width:30px;height:30px;border-radius:50%;z-index:100;" onclick="show('home');"></div>




<div style="display:inline-block;width:95%;background:rgb(255,255,255);">


















<div style="text-align:center;width:100%;">


<div id="monitor_datatype" style="padding:30px;color:white;font-weight:bold;font-size:30px;background:linear-gradient(135deg,rgb(230,230,0),rgb(250,160,0));"></div>


<div id="container" style="display:inline-block;width:90%;border:0 solid blue;margin:0;box-sizing:border-box;margin:2%;">
<canvas id="canvas"  width=90% height=45% style="border:2px solid rgba(0,170,210,1);">
Your browser does not support the HTML5 canvas tag.</canvas>
</div>


</div>




<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}


</style>


<div style="width:100%;padding:2%;">
<table>
  <tr>
    <th>Measurement</th>
    <th>Date</th>
    <th>Time</th>
  </tr>
  <tr>
    <td>160</td>
    <td>25/12/2017</td>
    <td>02:55pm</td>
  </tr>
  <tr>
    <td>160</td>
    <td>25/12/2017</td>
    <td>02:55pm</td>
  </tr>
  <tr>
    <td>160</td>
    <td>25/12/2017</td>
    <td>02:55pm</td>
  </tr>

</table>

</div>



































</div>





</div>
<!-- ________END OF GRAPH________ -->































<!-- ________ACCOUNT SETTINGS________ -->
<div id="account_settings" style="display:none;width:100%;text-align:center;padding:2%;padding-top:100px;">

<div class="back_btn" style="position:fixed;left:10px;top:30px;width:30px;height:30px;border-radius:50%;z-index:100;" onclick="show('home');"></div>











<div style="display:inline-block;width:95%;padding:2%;background:rgba(255,255,255,0.4);">



<div class="micon">
<div style="background-image:url('images/permissions.png');">
</div>
<p>Change Password</p>
</div>

<div class="micon" onclick="show('ui_settings');">
<div style="background-image:url('images/ui.png');">
</div>
<p>Look and Feel</p>
</div>

<div class="micon">
<div style="background-image:url('images/lang.png');">
</div>
<p>Language</p>
</div>

<div class="micon">
<div style="background-image:url('images/notification.png');">
</div>
<p>Device Notifications</p>
</div>

<div class="micon">
<div style="background-image:url('images/import.png');">
</div>
<p>Import Data</p>
</div>

<div class="micon">
<div style="background-image:url('images/backup.png');">
</div>
<p>Backup</p>
</div>

<div class="micon">
<div style="background-image:url('images/delete.png');">
</div>
<p>Delete Account</p>
</div>

</div>



</div>
<!-- ________END OF ACCOUNT SETTINGS________ -->



















<!-- ________LOOK AND FEEL________ -->
<div id="ui_settings" style="display:none;width:100%;text-align:center;padding:2%;padding-top:100px;">

<div class="back_btn" style="position:fixed;left:10px;top:30px;width:30px;height:30px;border-radius:50%;z-index:100;" onclick="show('account_settings');"></div>




<div style="display:inline-block;width:95%;background:rgb(255,255,255);padding:2%;">





<hr>

<h1>Select Theme</h1>


<div class="theme-icon"></div>
<div class="theme-icon"></div>
<div class="theme-icon"></div>
<div class="theme-icon"></div>
<div class="theme-icon"></div>
<div class="theme-icon"></div>
<div class="theme-icon"></div>
<div class="theme-icon"></div>


<hr>

<h1>Select additional items to be shown on welcome page </h1>

<form>

<div class="block">
  <p>Health monitor data</p>
  <input type="checkbox" name="vehicle" value="Car">
</div>

<div class="block">
  <p>My Apps</p>
  <input type="checkbox" name="vehicle" value="Car">
</div>

<div class="block">
  <p>Contacts</p>
  <input type="checkbox" name="vehicle" value="Car">
</div>

<div class="block">
  <p>Contacts</p>
  <input type="checkbox" name="vehicle" value="Car">
</div>

  <input type="submit" value="Save">
</form>






<style>

#ui_settings .block{
color:black;
font-weight:bold;
}
#ui_settings .block p{
display:inline-block;
width:60%;
}
#ui_settings .block input{
display:inline-block;
}

.theme-icon{
border:2px solid green;
display:inline-block;
margin:10px;
width:200px;
height:100px;
background:red;
}

</style>













</div>





</div>
<!-- ________END OF LOOK AND FEEL________ -->

















<!-- ________FEATURES________ -->
<div id="features" style="display:none;width:100%;text-align:center;padding:2%;padding-top:100px;">

<div class="back_btn" style="position:fixed;left:10px;top:30px;width:30px;height:30px;border-radius:50%;z-index:100;" onclick="show('home');"></div>











<div style="display:inline-block;width:95%;padding:2%;background:rgba(255,255,255,0.4);">



<div class="micon" onclick="show('tasks');">
<div style="background-image:url('images/calender.png');">
</div>
<p>Tasks</p>
</div>

<div class="micon" onclick="show('apps');">
<div style="background-image:url('images/apps.png');">
</div>
<p>Apps</p>
</div>

<div class="micon" onclick="show('devices');">
<div style="background-image:url('images/devices.png');">
</div>
<p>Health Devices</p>
</div>

<div class="micon" onclick="show('services');">
<div style="background-image:url('images/services.png');">
</div>
<p>Services</p>
</div>

<div class="micon" onclick="show('print');">
<div style="background-image:url('images/print.png');">
</div>
<p>Print</p>
</div>


</div>



</div>
<!-- ________END OF FEATURES________ -->






















<!-- ________TASKS________ -->
<div id="tasks" style="display:none;width:100%;text-align:center;padding:2%;padding-top:100px;">

<div class="back_btn" style="position:fixed;left:10px;top:30px;width:30px;height:30px;border-radius:50%;z-index:100;" onclick="show('features');"></div>

<div style="display:inline-block;width:95%;background:rgb(255,255,255);border-radius:7px;overflow:hidden;">

















<style>

ul {list-style-type: none;}

.month {
    padding: 70px 25px;
    width: 100%;
    background: #1abc9c;
    text-align: center;
}

.month ul {
    margin: 0;
    padding: 0;
}

.month ul li {
    color: white;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
}

.month .prev {
    float: left;
    padding-top: 10px;
}

.month .next {
    float: right;
    padding-top: 10px;
}

.task-calender{
width:100%;
}
.task-calender th{
width:14.28%;
height:60px;
border-top:4px solid rgb(0,171,231);
border-bottom:4px solid rgb(0,171,231);
font-size:20px;
font-weight:bold;
}
.task-calender td{
width:14.28%;
height:60px;
border:1px solid black;
font-size:20px;
font-weight:bold;
}
.task-calender td:hover{
background:rgba(0,200,250,0.2);
color:rgba(0,120,200,1);
}

</style>







<div class="month">
  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li>
      August<br>
      <span style="font-size:18px">2017</span>
    </li>
  </ul>
</div>








<table class="task-calender">
  <tr>
    <th>Sun</th>
    <th>Mon</th>
    <th>Tue</th>
    <th>Wed</th>
    <th>Thu</th>
    <th>Fri</th>
	<th>Sat</th>
  </tr>
  <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
	<td>7</td>
  </tr>
  <tr>
    <td>8</td>
    <td>9</td>
    <td>10</td>
    <td>11</td>
    <td>12</td>
    <td>13</td>
	<td>14</td>
  </tr>
  <tr>
    <td>15</td>
    <td>16</td>
    <td>17</td>
    <td>18</td>
    <td>19</td>
    <td>20</td>
	<td>21</td>
  </tr>
  <tr>
    <td>22</td>
    <td>23</td>
    <td>24</td>
    <td>25</td>
    <td>26</td>
    <td>27</td>
	<td>28</td>
  </tr>
  <tr>
    <td>29</td>
    <td>30</td>
    <td>31</td>
    <td></td>
    <td></td>
    <td></td>
	<td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
	<td></td>
  </tr>
</table>









</div>
</div>
<!-- ________END OF TASKS________ -->
















<!-- ________APPS________ -->
<div id="apps" style="display:none;width:100%;text-align:center;padding:2%;padding-top:100px;">

<div class="back_btn" style="position:fixed;left:10px;top:30px;width:30px;height:30px;border-radius:50%;z-index:100;" onclick="show('features');"></div>

<div style="display:inline-block;width:95%;background:rgba(255,255,255,0.4);">










<style>

.appicon{
width:100px;
height:100px;
display:inline-block;
background:size:contain;
background-repeat:no-repeat;
margin:20px;
cursor:pointer;
}

</style>

<div class="appicon" style="background-image:url('images/apps/1.png');"></div>
<div class="appicon" style="background-image:url('images/apps/2.png');"></div>
<div class="appicon" style="background-image:url('images/apps/3.png');"></div>
<div class="appicon" style="background-image:url('images/apps/4.png');"></div>
<div class="appicon" style="background-image:url('images/apps/5.png');"></div>
<div class="appicon" style="background-image:url('images/apps/6.png');"></div>
<div class="appicon" style="background-image:url('images/apps/7.png');"></div>
<div class="appicon" style="background-image:url('images/apps/8.png');"></div>
<div class="appicon" style="background-image:url('images/apps/9.png');"></div>
<div class="appicon" style="background-image:url('images/apps/10.png');"></div>
<div class="appicon" style="background-image:url('images/apps/11.png');"></div>
<div class="appicon" style="background-image:url('images/apps/12.png');"></div>
















</div>
</div>
<!-- ________END OF APPS________ -->



















<!-- ________DEVICES________ -->
<div id="devices" style="display:none;width:100%;text-align:center;padding:2%;padding-top:100px;">

<div class="back_btn" style="position:fixed;left:10px;top:30px;width:30px;height:30px;border-radius:50%;z-index:100;" onclick="show('features');"></div>

<div style="display:inline-block;width:95%;background:rgba(250,250,250,0.5);">










<style>

.deviceicon{
width:100px;
height:100px;
display:inline-block;
background:size:contain;
background-repeat:no-repeat;
border:2px solid rgb(0,170,200);
border-radius:3px;
margin:20px;
cursor:pointer;
}

</style>

<div class="deviceicon" style="background-image:url('images/devices/1.png');"></div>
<div class="deviceicon" style="background-image:url('images/devices/2.png');"></div>
<div class="deviceicon" style="background-image:url('images/devices/3.png');"></div>
<div class="deviceicon" style="background-image:url('images/devices/4.png');"></div>
<div class="deviceicon" style="background-image:url('images/devices/5.png');"></div>
<div class="deviceicon" style="background-image:url('images/devices/6.png');"></div>
<div class="deviceicon" style="background-image:url('images/devices/7.png');"></div>
<div class="deviceicon" style="background-image:url('images/devices/8.png');"></div>
<div class="deviceicon" style="background-image:url('images/devices/9.png');"></div>
<div class="deviceicon" style="background-image:url('images/devices/10.png');"></div>
<div class="deviceicon" style="background-image:url('images/devices/11.png');"></div>
<div class="deviceicon" style="background-image:url('images/devices/12.png');"></div>
















</div>
</div>
<!-- ________END OF DEVICES________ -->



















<!-- ________SERVICES________ -->
<div id="services" style="display:none;width:100%;text-align:center;padding:2%;text-align:center;padding-top:100px;font-size:0;">

<div class="back_btn" style="position:fixed;left:10px;top:30px;width:30px;height:30px;border-radius:50%;z-index:100;" onclick="show('features');"></div>










<div style="display:inline-block;width:95%;background:rgb(255,255,255);text-align:left;box-shadow:0 0 15px black;">







<div class="services-container">






<div id="services-sidebar">

<div class="sicon">Private Hospitals</div>
<div class="sicon">Public Hospitals</div>
<div class="sicon">Ophthalmologists</div>
<div class="sicon">Eye Hospitals</div>
<div class="sicon">Children Hospitals</div>
<div class="sicon">ENT Hospitals</div>
<div class="sicon">Orthopaedic Hospitals</div>
<div class="sicon">Mental Hospitals</div>
<div class="sicon">Veterinary Hospitals</div>
<div class="sicon">Dental Hospitals</div>
<div class="sicon">Cancer Hospitals</div>
<div class="sicon">Ayurvedic Hospitals</div>
<div class="sicon">Multispeciality Hospitals</div>
<div class="sicon">Esis Hospitals</div>
<div class="sicon">Nursing Homes</div>
<div class="sicon">Cardiac Hospitals</div>
<div class="sicon">Kidney Hospitals</div>
<div class="sicon">Maternity Hospitals</div>
<div class="sicon">Paediatric Hospitals</div>
<div class="sicon">Skin Hospitals</div>
<div class="sicon">Public Veterinary Hospitals</div>
<div class="sicon">Charitable Hospitals</div>
<div class="sicon">Tuberculosis Hospitals</div>
<div class="sicon">Diabetic Centres</div>
<div class="sicon">Homeopathic Hospitals</div>
<div class="sicon">Neurological Hospitals</div>
<div class="sicon">Super Speciality Hospitals</div>
<div class="sicon">Hospitals For Burns</div>



</div>






<div style="background:white;font-size:12px;color:black;font-weight:300;text-align:center;overflow-y:scroll;height:100%;">


<div style="width:100%;padding-bottom:70px;background:rgb(20,50,100);text-align:right;">
</div>






<div class="services-item">

<div class="services-item-image" style="min-width:200px;max-width:210px;padding-bottom:150px;background:red"></div>
<div class="services-item-info" style="background:blue;color:white;overflow:auto;">
Address<br>
phone<br>
</div>


</div>











</div>







</div>

</div>



<style>



@media only screen and (max-width:600px)
{
.services-item{
display:flex;
flex-wrap:wrap;
width:70%;
border:1px solid black;
margin:2% auto;
}
.services-item-image
{
flex-grow:1;
width:600px;
padding-bottom:60%;
background-size:cover;"
}
.services-item-info
{
flex-grow:1;
display:inline-block;
width:600px;
padding:2%;
}
}

@media only screen and (min-width:600px)
{
.services-item{
display:flex;
flex-wrap:wrap;
margin:auto;
width:70%;
border:1px solid black;
margin:2% auto;
}
.services-item-image
{
flex-grow:1;
width:300px;
padding-bottom:140px;
background-size:cover;"
}
.services-item-info
{
flex-grow:10;
width:300px;
padding:2%;
}
}

#services-sidebar
{
position:absolute;
z-index:2;
left:-50%;
top:0;
width:60%;
height:100%;
color:white;
background:rgba(0,170,210,1);
font-size:12px;
cursor:pointer;
transition:all 0.3s ease-out;
box-shadow:0 0 5px black;
padding:2%;
overflow-y:scroll;
text-align:left;
}

#services-sidebar:hover
{
left:0;
}

.sicon{
width:100%;
padding:5px;
background:rgba(0,0,0,0);
font-weight:bold;
}


.sicon:hover
{
background:rgb(0,200,240);
}



.services-container {
  //display: flex;
  //align-items: stretch;
position:relative;
  background-color: #f1f1f1;
overflow:hidden;
height:500px;
}

.services-container > div {
  color: white;
  text-align: center;
}






#services-sidebar::-webkit-scrollbar{
width: 4px;
background-color: black;
}



#services-sidebar::-webkit-scrollbar-thumb{
border-radius: 10px;
box-shadow: inset 0 0 6px cyan;
background-color: cyan;
}







</style>







</div>
<!-- ________END OF SERVICES________ -->













<!-- ________PRINT________ -->
<div id="print" style="display:none;width:100%;text-align:center;padding:2%;padding-top:100px;">

<div class="back_btn" style="position:fixed;left:10px;top:30px;width:30px;height:30px;border-radius:50%;z-index:100;" onclick="show('features');"></div>

<div style="display:inline-block;width:95%;background:rgb(255,255,255);padding-bottom:500px;">






</div>
</div>
<!-- ________END OF PRINT________ -->










<!-- ________CONTACTS________ -->
<div id="contacts" style="display:none;width:100%;text-align:center;padding:2%;padding-top:100px;">

<div class="back_btn" style="position:fixed;left:10px;top:30px;width:30px;height:30px;border-radius:50%;z-index:100;" onclick="show('features');"></div>


<div id="contacts_page" style="display:inline-block;width:95%;background:rgb(255,255,255);padding:2%;">


</div>
</div>
<!-- ________END OF CONTACTS________ -->










<!-- ________CONNECT________ -->
<div id="connect" style="display:none;width:100%;text-align:center;padding:2%;padding-top:100px;">

<div class="back_btn" style="position:fixed;left:10px;top:30px;width:30px;height:30px;border-radius:50%;z-index:100;" onclick="show('home');"></div>

<div style="display:inline-block;width:95%;background:rgb(255,255,255);padding:2%;">



<h1>Select your role</h1>

<div class="micon">
<div style="background-image:url('images/personal.png');">
</div>
<p>Personal</p>
</div>

<div class="micon">
<div style="background-image:url('images/doctor.png');">
</div>
<p>Doctor</p>
</div>

<div class="micon">
<div style="background-image:url('images/hospital.png');">
</div>
<p>Hospital</p>
</div>


<h1 style="padding:40px;">Shared with you</h1>

<div id="HVUD_connect_shared_with" style="text-align:center;padding-top:70px;">

</div>



<h1 style="padding:40px;">Shared by you</h1>

<div id="HVUD_connect_shared_by" style="text-align:center;padding-top:70px;">

</div>







<style>
.picon{
width:100px;

}

</style>












</div>
</div>
<!-- ________END OF CONNECT________ -->














<!-- ________PEOPLE________ -->
<div id="people" style="display:none;width:100%;text-align:center;padding:2%;padding-top:100px;">

<div class="back_btn" style="position:fixed;left:10px;top:30px;width:30px;height:30px;border-radius:50%;z-index:100;" onclick="show('connect');"></div>

<div style="display:inline-block;width:95%;background:rgb(255,255,255);">



<h1>Privileges</h1>
<h3>Admin</h3>

<h1 Shared files</h1>
<div id="HVUD_people_shared_files"></div>


</div>
</div>
<!-- ________END OF PEOPLE________ -->






















<!-- ________HELP________ -->
<div id="help" style="display:none;width:100%;text-align:center;padding:2%;padding-top:100px;">

<div class="back_btn" style="position:fixed;left:10px;top:30px;width:30px;height:30px;border-radius:50%;z-index:100;" onclick="show('home');"></div>







<div style="display:inline-block;width:95%;padding:2%;background:rgb(255,255,255);">
<h1> Get Started </h1>
<img src="images\helpdoc.png" width=100%>
</div>







</div>
<!-- ________END OF HELP________ -->





















<!-- ________SCRIPT________ -->
<script>





function show(x)
{
var d = document.getElementById(x);
document.getElementById("home").style.display = "none";
document.getElementById("mailer").style.display = "none";
document.getElementById("compose").style.display = "none";
document.getElementById("file_manager").style.display = "none";
document.getElementById("user_profile").style.display = "none";
document.getElementById("user_profile_editor").style.display = "none";
document.getElementById("health_data").style.display = "none";
document.getElementById("account_settings").style.display = "none";
document.getElementById("ui_settings").style.display = "none";
document.getElementById("features").style.display = "none";
document.getElementById("tasks").style.display = "none";
document.getElementById("apps").style.display = "none";
document.getElementById("devices").style.display = "none";
document.getElementById("services").style.display = "none";
document.getElementById("print").style.display = "none";
document.getElementById("graph").style.display = "none";
document.getElementById("services").style.display = "none";
document.getElementById("contacts").style.display = "none";
document.getElementById("connect").style.display = "none";
document.getElementById("people").style.display = "none";
document.getElementById("help").style.display = "none";
d.style.display = "block";
}






var obj =
[
{
"datatype":"blood pressure",
"value":[ 80, 170, 110, 90, 140 ],
"hour":[ 8, 17, 13, 20, 22 ],
"day":[ 8, 17, 13, 20, 22 ],
"month":[ 1,2,3,4,5 ],
"year":[ 2017, 2017, 2017, 2017, 2017 ],
},
{
"datatype":"blood pressure",
"value":[ 80, 170, 110, 90, 140 ],
"hour":[ 8, 17, 13, 20, 22 ],
"day":[ 8, 17, 13, 20, 22 ],
"month":[ 1,2,3,4,5 ],
"year":[ 2017, 2017, 2017, 2017, 2017 ],
}
]

document.getElementById("monitor_datatype").innerHTML = obj[0].datatype;
















var x="";

x += "<h2>" + obj[0].datatype + "</h2>";

for (i = 0; i < obj[0].value.length; i++)
{
x += obj[0].value[i] + "<br>";
}








var w,h;
var c = document.getElementById("canvas");
var v = document.getElementById("container");
var ctx = c.getContext("2d");
window.addEventListener('resize', resizeCanvas, false);
resizeCanvas();



function resizeCanvas()
{
w = v.offsetWidth;
h = v.offsetWidth/2;
draw();
}




function draw()
{

ctx.canvas.width  = w;
ctx.canvas.height = h;
ctx.clearRect(0, 0, canvas.width, canvas.height);


//_________________________________________

//columns
ctx.fillStyle = 'rgba(210,250,240,0.5)';
for(var i=0;i<12;i+=2)
{ctx.fillRect(w*i/12,0,w/12,h);}


//lines
ctx.strokeStyle = 'rgba(0,190,210,0.2)';
for(var i=0;i<h;i+=h/10)
{
ctx.moveTo(0,i);
ctx.lineTo(w,i);
}
ctx.stroke();
ctx.closePath();


// axis
ctx.beginPath();
ctx.strokeStyle = 'rgba(0,170,200,1)';
ctx.moveTo(0,h/2);
ctx.lineTo(w,h/2);
ctx.stroke();
ctx.closePath();
//_________________________________________





// plot
ctx.beginPath();
ctx.strokeStyle= 'rgba(250,0,0,1)';
ctx.moveTo(obj[0].month[0],obj[0].value[0]);



for (i = 0; i < obj[0].value.length; i++)
{
ctx.lineTo(obj[0].month[i]*w/12,obj[0].value[i]);
ctx.arc(obj[0].month[i]*w/12, obj[0].value[i],2, 0, 2 * Math.PI);
ctx.moveTo(obj[0].month[i]*w/12,obj[0].value[i]);
//ctx.fill();
}

ctx.stroke();
ctx.closePath();

}










/*///////////////////////////////////////////////////////////*/
/*////////////////////------DATA-------//////////////////////*/
/*///////////////////////////////////////////////////////////*/




/*__________________USER_profile_________________*/

USER_profile=
{
"name":"John Prince",
"DOB_day":1,
"DOB_month":1,
"DOB_year":2000,
"gender":"male",
"ID_mark":"",
"father":"Prince",
"mother":"Jessy",
"siblings":"Jacob",
"spouse":"",
"children":"",
"home_address":"kallappurackal [h]",
"country":"India",
"email":"john@gmail.com",
"phone":"+91 88000 96987"
}


document.getElementById("HVUD_profile_name").innerHTML = USER_profile.name;
document.getElementById("HVUD_profile_DOB").innerHTML = USER_profile.DOB_year;
document.getElementById("HVUD_profile_gender").innerHTML = USER_profile.gender;
document.getElementById("HVUD_profile_ID_mark").innerHTML = USER_profile.ID_mark;
document.getElementById("HVUD_profile_father").innerHTML = USER_profile.father;
document.getElementById("HVUD_profile_mother").innerHTML = USER_profile.mother;
document.getElementById("HVUD_profile_siblings").innerHTML = USER_profile.siblings;
document.getElementById("HVUD_profile_spouse").innerHTML = USER_profile.spouse;
document.getElementById("HVUD_profile_children").innerHTML = USER_profile.children;
document.getElementById("HVUD_profile_home_address").innerHTML = USER_profile.home_address;
document.getElementById("HVUD_profile_country").innerHTML = USER_profile.country;
document.getElementById("HVUD_profile_email").innerHTML = USER_profile.email;
document.getElementById("HVUD_profile_phone").innerHTML = USER_profile.phone;

/*__________________END OF USER_profile_________________*/






/*__________________USER_files_________________*/

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function()
{
if (this.readyState == 4 && this.status == 200)
{
	USER_files = JSON.parse(this.responseText);
	initfiles();
}
};
xmlhttp.open("GET", "filelist.php?id="+user, true);
xmlhttp.send();


function initfiles()
{
var x1="";

for(var i=0;i<USER_files.length;i++)
{
x1 = x1+
'<div class="file_icon" >\
<img src="images\\pdf.png" width=100>\
<div style="padding:5px;text-align:center;font-weight:bold;">'+USER_files[i].name+'</div>\
</div>';
}

document.getElementById("folder").innerHTML = x1;
}


/*__________________END OF USER_files_________________*/







/*__________________USER_contacts_________________*/




var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function()
{
if (this.readyState == 4 && this.status == 200)
{
	USER_files = JSON.parse(this.responseText);
	initfiles();
}
};
xmlhttp.open("GET", "filelist.php?id="+user, true);
xmlhttp.send();


function initfiles()
{
var x1="";

for(var i=0;i<USER_files.length;i++)
{
x1 = x1+
'<div class="file_icon" >\
<img src="images\\pdf.png" width=100>\
<div style="padding:5px;text-align:center;font-weight:bold;">'+USER_files[i].name+'</div>\
</div>';
}

document.getElementById("folder").innerHTML = x1;
}






USER_contacts=
[

{
"name":"user1",
"email":"abcde@gmail.com",
"phone":"+91 00000 98765",
},

{
"name":"user2",
"email":"abcde@gmail.com",
"phone":"+91 00000 98765",
},

{
"name":"user3",
"email":"abcde@gmail.com",
"phone":"+91 00000 98765",
},

{
"name":"user4",
"email":"abcde@gmail.com",
"phone":"+91 00000 98765",
},

{
"name":"user5",
"email":"abcde@gmail.com",
"phone":"+91 00000 98765",
},

{
"name":"user6",
"email":"abcde@gmail.com",
"phone":"+91 00000 98765",
}

]








var x2="";

for(var i=0;i<USER_contacts.length;i++)
{
x2 = x2+
'<div style="display:inline-block;width:96%;padding:1%;font-weight:bold;">\
<div style="display:inline-block;width:40px;height:40px;background:rgb(250,50,50);border-radius:50%;color:white;"></div>\
<p style="display:inline-block;padding:2%;width:200px;">'+USER_contacts[i].name+'</p>\
<p style="display:inline-block;padding:2%;width:200px;">'+USER_contacts[i].email+'</p>\
<p style="display:inline-block;padding:2%;width:200px;">'+USER_contacts[i].phone+'</p>\
</div>';
}

document.getElementById("contacts_page").innerHTML = x2;





/*__________________END OF USER_contacts_________________*/












/*__________________USER_shared_by_you__________________*/




var xmlhttp5 = new XMLHttpRequest();
xmlhttp5.onreadystatechange = function()
{
if (this.readyState == 4 && this.status == 200)
{
	USER_shared_by = JSON.parse(this.responseText);
	initsharedby();
}
};
xmlhttp5.open("GET", "getsharedby.php?email="+user, true);
xmlhttp5.send();





function initsharedby()
{
var x4="";

for(var i=0;i<USER_shared_by.length;i++)
{
x4 = x4+
'<div class="file_icon" onclick="show(\'people\');acc1('+i+');">\
<img src="images\\profilepic.png" width=100>\
<div style="padding:5px;text-align:center;font-weight:bold;">'+USER_shared_by[i].email+'</div>\
</div>';
}
document.getElementById("HVUD_connect_shared_by").innerHTML = x4;
}


function acc1(x)
{
var x5="";

for(var i=0;i<USER_shared_by[x].share_files.length;i++)
{
x5 = x5+

'<div class="file_icon" >\
<img src="images\\pdf.png" width=100>\
<div style="padding:5px;text-align:center;font-weight:bold;">'+USER_shared_by[x].share_files[i]+'</div>\
</div>';
}


document.getElementById("HVUD_people_shared_files").innerHTML = x5;


}



/*__________________END OF USER_shared_by_you_________________*/














/*__________________USER_shared_with_you__________________*/




var xmlhttp6 = new XMLHttpRequest();
xmlhttp6.onreadystatechange = function()
{
if (this.readyState == 4 && this.status == 200)
{
	USER_shared_with = JSON.parse(this.responseText);
	initsharedwith();
}
};
xmlhttp6.open("GET", "getsharedwith.php?email="+user, true);
xmlhttp6.send();





function initsharedwith()
{
var x12="";

for(var i=0;i<USER_shared_with.length;i++)
{
x12 = x12+
'<div class="file_icon" onclick="show(\'people\');acc2('+i+');">\
<img src="images\\profilepic.png" width=100>\
<div style="padding:5px;text-align:center;font-weight:bold;">'+USER_shared_with[i].email+'</div>\
</div>';
}
document.getElementById("HVUD_connect_shared_with").innerHTML = x12;
}


function acc2(x)
{

var x13="";
for(var i=0;i<USER_shared_with[x].share_files.length;i++)
{
x13 = x13+

'<div class="file_icon" onclick="preview('+x+','+i+');">\
<img src="images\\pdf.png" width=100>\
<div style="padding:5px;text-align:center;font-weight:bold;">'+USER_shared_with[x].share_files[i]+'</div>\
</div>';
}

document.getElementById("HVUD_people_shared_files").innerHTML = x13;



}



/*__________________END OF USER_shared_with_you_________________*/






function preview(x,i)
{

    window.open("http://myhealthvault.dx.am/download.php?email="+USER_shared_with[x].email+"&file="+USER_shared_with[x].share_files[i]);

}











/*///////////////////////////////////////////////////////////*/
/*////////////////------END OF DATA-------///////////////////*/
/*///////////////////////////////////////////////////////////*/


</script>

<!-- ________END OF SCRIPT________ -->











</body>
</html>