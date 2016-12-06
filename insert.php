<?php
  session_start();
   $dbhost = '127.0.0.1';
   $dbuser = 'root';
   $dbpass = 'rootpassword';
   $conn = mysql_connect($dbhost, $dbuser,"");
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   $name=$_POST['fname'];
   $sql = 'INSERT INTO register '.
   		  'VALUES('.
        '\''.
        $_POST['user_id'].
        '\''.
        ','.
   		  '\''.
   		  $_POST['fname'].
   		  '\''.
   		  ','.
   		  '\''.
   		  $_POST['lname'].
   		  '\''.
        ','.
        '\''.
        $_POST['password'].
        '\''.
        ','.
        '\''.
        $_POST['dob'].
        '\''.
        ','.
        '\''.
        $_POST['insert'].
        '\''.
        ','.
        '\''.
        $_POST['mail'].
        '\''.
        ','.
        '\''.
        $_POST['tel'].
        '\''.
   		  ')';
        mysql_select_db('dbms_proj');
    $user_email=$_POST['mail'];  
    $check_email_query="SELECT * FROM register where email='$user_email'";
    $run_query=mysql_query($check_email_query,$conn);  
    if(mysql_num_rows($run_query)>0)  
    {  
        echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
        echo "<script>window.open('register.php','_self');</script>";
        exit();
    }    
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   else
   {
      echo "<script>alert('You have been registered successfully!!!!')</script>";
      $_SESSION['user_id']=$_POST['user_id'];
      $_SESSION['fname']=$_POST['fname'];
      $_SESSION['lname']=$_POST['lname'];
      $_SESSION['dob']=$_POST['dob'];
      $_SESSION['insert']=$_POST['insert'];
      $_SESSION['tel']=$_POST['tel'];
      $_SESSION['mail']=$_POST['mail'];
      echo "<script>window.open('login_data.php','_self')</script>";
   }
   mysql_close($conn);
?>
