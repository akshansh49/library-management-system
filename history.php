<?php
  session_start();
  if(isset($_SESSION['fname']))
  {
?>
<html>
  <style>
    body 
    { 
      background-color:cyan; 
    }

    #hh3 
    { 
      letter-spacing:4px ;
      font-size:80px ;
      font-weight:bold;
      text-align:center ;
      color:black;
      text-decoration:underline;
      background-color:pink;
      border-top:10px solid red;
      border-bottom:10px solid red;
      border-left: 350px solid  grey;
      border-right: 350px solid  grey;
    }
    
    td
    {
      font-size:20px;
      line-height:1.5em;
    }
    
    .bodies
    {
      background-image: url("https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-2/bg.jpg");
    }
    #a
    {
      font-size:20px;
      background-color: Transparent;
      background-repeat:no-repeat;
      border: none;
      cursor:pointer;
      overflow: hidden;
      outline:none
    }

    #tablemain
    {
      border:5px solid red ;
      border-radius: 8px;
      border-style:groove;
    }

    #td1
    {
      text-align:center;
      background-color:red;
      font-weight:bold;
      font-size:20px;
      width:50%;
      margin-left:900px;
    }

    #hh31
    {
      border-left:20px solid red;
      border-right:20px solid red;
    }
    
    * 
    {
      box-sizing: border-box;
    }

    #a1:link, a:visited 
    {
      background-color: pink;
      color: black;
      width:100%;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      border-top:5px solid red;
      border-left:5px solid red;
      border-right:5px solid red;
      border-bottom:5px solid red;
      transition: ease-in 0.5s;
    }

    #a1:hover, a:active 
    {
      background-color: cyan;
    }
    
    #txt
    {
      color:red;
      background-color:pink;
      border-radius:8px;
      font-size:20px;
      margin-left:100px;
      margin-right:960px;
      margin-bottom:10px;
      margin-top:-40px;
    }

    #php
    {
      background:pink;
      color:red;
      margin-right:90px;
      margin-left:990px;
      font-size: 20px;
      border-radius:8px;
      margin-top:40px;
    }

    #div_body
    { 
      margin-left:125px;
      margin-right:125px;
    }

    #table_body
    {  
      background-color: pink;
      border:10px solid red;
      border-style:groove;
      border-radius:8px;
    }

    #row:hover
    {
      background-color: cyan;
      transition: ease-in 0.5s;
    }

    #div1
    {
      margin-top:40px;
    }

    #div2
    {
      margin-left:1100px;
      margin-top:-95px;
    }

    #span
    {
      color: red;
    }

    th:hover
    {
      background-color: cyan;
      transition: ease-in 0.5s;
    }

    p
    {
      text-decoration:underline;
      background-color: pink;
      margin-right: 200px;
      margin-left: 200px;
      border: 1px solid red;
      border-radius: 10px;
      margin-bottom: 100px;
    }

    #table
    {
      margin-top: 30px;
      background-color:pink;
      border-width:5;
      border-style:groove;
      border-radius:10px;
      padding: 10px;
    }

    #button
    {
      width:100%;
      background-color:cyan;
      border-color:red;
      border-width:5px;
      transition:ease 0.5s;
    }

    #button:hover
    {
      background-color: red;
      color:black;
    }

    #table_body
    { 
      background-color: pink;
      border:10px solid red;
      border-style:groove;
      border-radius:8px;
    }

    #div4
    {
      margin-left:400px;
      margin-right:200px;
    }
    .success
    {
      padding: 20px;
      background-color: #008000;
      color:white;
      margin-right: 300px;
      margin-left: 300px;
      border-radius: 15px;
    }
    .alert
    {
      padding: 20px;
      background-color: #f44336;
      color:white;
      margin-right: 300px;
      margin-left: 300px;
      border-radius: 15px;
    }
    .closebutton
    {
      margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
  }

</style>

<head>
  
<h2 id ="hh3">

<div id="hh31">
  LIBRARY
</div>

</h2> 
  
<script src="jquery-3.1.1.js"></script>  
  
<script src="jquery-ui-1.9.2.custom.js"></script>
  
<script>
  
  function startTime() 
  {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    var mom;
    m = checkTime(m);
    s = checkTime(s);
    if(h>12&&h<17)
    mom="GOOD AFTERNOON!!";
    else if(h>17)
    mom="GOOD EVENING!!";
    else
    mom="GOOD MORNING!!";
    document.getElementById('txt').innerHTML =
    mom + "<br>" + h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
  }
  
  function checkTime(i) 
  {
    if (i < 10) {i = "0" + i};
    return i;
  }

</script>

</head>


<div class="bodies">

<div id="php">
  <?php
    echo nl2br("Welcome \n".$_SESSION['fname']."!!!");
  ?>
</div>
  
<body onload="startTime()">
  
<div id="txt"></div>

<div id="div1">
  <table id ="tablemain" >
    <tr>
      <td id="td1"><a href= "http://localhost/series/firstfile/login_data.php" target="_self" id ="a1"><pre>Back</pre></a></td>
    </tr>
  </table>
</div>

<div id="div2">
  <table id ="tablemain" ><tr>
      <td id="td1"><a href= "http://localhost/series/firstfile/LogOut.php" target="_self" id ="a1"><pre>LogOut</pre></a></td>
    </tr>
  </table>
</div>
<div id="div3">
  <center>
    <table id="table_body" border="1">
    <tr>
      <th style="padding:20px;border-width:5px;width: 14.28%;font-weight: bold;font-family: Helvetica;">Book ID</th>
      <th style="padding:20px;border-width:5px;width: 14.28%;font-weight: bold;font-family: Helvetica;">Name of Book</th>
      <th style="padding:20px;border-width:5px;width: 14.28%;font-weight: bold;font-family: Helvetica;">Issue Date</th>
      <th style="padding:20px;border-width:5px;width: 14.28%;font-weight: bold;font-family: Helvetica;">Return Date</th>
      </tr>
<?php

  $dbhost='127.0.0.1';
  $dbuser='root';
  $password='rootpassword';
  $conn=mysql_connect($dbhost,$dbuser,"");
  if(!$conn)
  {
    die("Could not connect:".mysql_error());
  }
  mysql_select_db('dbms_proj');
  $name=$_SESSION['fname'];
  $sql="SELECT * FROM issue WHERE f_name='$name'";
  $result=mysql_query($sql,$conn);
  while($row=mysql_fetch_array($result))
  {
    $book_id=$row['b_id'];
    $issueDate=$row['date_issue'];
    $returnDate=$row['date_return'];
    $sql_book="SELECT * FROM bookDetails WHERE book_id='$book_id'";
    $book_result=mysql_query($sql_book,$conn);
    while($row_book=mysql_fetch_array($book_result))
    {
      $book_name=$row_book['book_title'];
?>
 <tr>
      <td style="padding:20px;border-width:5px;width: 14.28%;font-weight: bold;font-family: Helvetica;"><?php echo $row['b_id'] ?></td>
      <td style="padding:20px;border-width:5px;width: 14.28%;font-weight: bold;font-family: Helvetica;"><?php echo $row_book['book_title'] ?></td>
      <td style="padding:20px;border-width:5px;width: 14.28%;font-weight: bold;font-family: Helvetica;"><?php echo $row['date_issue'] ?></td>
      <td style="padding:20px;border-width:5px;width: 14.28%;font-weight: bold;font-family: Helvetica;"><?php echo $row['date_return'] ?></td>
    </tr>
</div>
<?php
  }
}
}
  else
  {
   echo "<script>window.open('log.php','_self');</script>";
  }
?>
