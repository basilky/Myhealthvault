<?php


	$mysqli = new mysqli('fdb13.awardspace.net', '2491663_healthvault', 'Mits@123', '2491663_healthvault');

//$mysqli = new mysqli('localhost', 'mreuser1_mits', 'mits@123','mreuser1_healthvault');
if ($mysqli->connect_errno) {
    echo "Sorry, this website is experiencing problems.";
    echo "Error: Failed to make a MySQL connection, here is why: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    exit;
    
}
$username = $password = "";

$username_err = $password_err = "";

 

// Processing form data when form is submitted

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
 


    // Check if username is empty

    if(empty(trim($_POST["username"]))){

        $username_err = 'Please enter username.';

    } else{

        $username = trim($_POST["username"]);

    }
    

    

    // Check if password is empty

    if(empty(trim($_POST['password']))){

        $password_err = 'Please enter your password.';

    } else{

        $password = trim($_POST['password']);

    }

    

    // Validate credentials

    if(empty($username_err) && empty($password_err)){

        // Prepare a select statement

        $sql = "SELECT email, password FROM patientdata WHERE email = ?";

        
        if($stmt = mysqli_prepare($mysqli, $sql)){

            // Bind variables to the prepared statement as parameters

            mysqli_stmt_bind_param($stmt, "s", $param_username);

            

            // Set parameters

            $param_username = $username;

            

            // Attempt to execute the prepared statement

            if(mysqli_stmt_execute($stmt)){

                // Store result

                mysqli_stmt_store_result($stmt);

                

                // Check if username exists, if yes then verify password

                if(mysqli_stmt_num_rows($stmt) == 1){                    

                    // Bind result variables

                    mysqli_stmt_bind_result($stmt, $username, $hashed_password);
                    

                    if(mysqli_stmt_fetch($stmt)){


                        if(password_verify($password, $hashed_password)){
 

                            /* Password is correct, so start a new session and

                            save the username to the session */

                            session_start();

                            $_SESSION['username'] = $username ;      

                            header("location: home.php");
                           // exit();
                        } else{

                            // Display an error message if password is not valid

                            $password_err = 'The password you entered was not valid.';

                        }

                    }

                } else{

                    // Display an error message if username doesn't exist

                    $username_err = 'No account found with that username.';

                }

            } else{

                echo "Oops! Something went wrong. Please try again later.";

            }

        }

        

        // Close statement

        mysqli_stmt_close($stmt);

    }

    

    // Close connection

    mysqli_close($link);

}
?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>






<body>








<div style="position:fixed;left:0;top:0;width:100%;height:100%;background:linear-gradient(135deg,rgb(15,250,173),rgb(31,200,219),rgb(44,151,232));text-align:center;padding:2%;">


<div id="logger">

<div style="display:inline-block;width:100px;padding-bottom:100px;border-radius:50%;margin:8%;background-image:url('images/logo.png');background-size:cover;">
</div>

<p style="color:rgb(44,181,232);font-weight:bold;font-size:20px;">Sign in to HealthVault Demo</p>


<!------------------------------->


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

<div class="block">
<input type="text" name="username" placeholder="Username" onfocus="fopen('line1');" onblur="fclose('line1');" required>
</div>
<div class="stand">
<div id="line1"></div>
</div>

<div class="block">
<input type="password" name="password" placeholder="Password" onfocus="fopen('line2');" onblur="fclose('line2');" required>
</div>
<div class="stand">
<div id="line2"></div>
</div>

<div class="block">
<button type="submit">Sign in</button>
</div>

<div class="block">
<p style="color:rgb(44,181,232);font-weight:bold;font-size:14px;">Don't have an Account ? <br> <a href="signup.html">Sign up</a> now.</p>
</div>

</form>

</div>









</div>



<script>

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

</script>

<style>

*{
padding:0;
border:0;
margin:0;
outline:0;
box-sizing:border-box;
}

body,html{
padding:0;
margin:0;
font-family: roboto,arial,sans-serif;
}

#logger{
display:inline-block;
width:340px;
padding:20px;
background:rgba(210,250,250,1);
box-shadow: 0 0 10px rgb(40,40,40);
margin-top:20px;
}

input{
display:inline-block;
border:none;
border-radius:4px;
width:80%;
padding:5px;
font-size:16px;
background:inherit;
transition: width 0.4s ease-in-out;
}

input:focus{
outline: none;
}

#line1{
display:inline-block;
width:0;
border:0;
border-radius:2px;
}


#line2{
display:inline-block;
width:0;
border:0;
border-radius:2px;
}



button{
border:none;
border-radius:5px;
background:linear-gradient(0deg,rgb(0,170,250),rgb(0,140,230));
color:white;
font-size:18px;
font-weight:bold;
padding:10px 20px 10px 20px;
box-shadow: 0 0 7px grey;
cursor:pointer;
}

button:hover{
background:linear-gradient(0deg,rgb(0,200,250),rgb(0,170,240));
}

.block{
width:100%;
padding-top:30px;
}

.stand{
display:inline-block;
width:80%;
border-top:1px solid rgb(0,180,180);
}

</style>

</body>
</html>


