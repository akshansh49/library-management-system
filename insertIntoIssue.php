<?php
$bookid=$_SESSION['book_id'];
$read_book="SELECT * FROM bookDetails WHERE book_title='$bookid'";
$read_book_query=mysql_query($read_book,$conn);
if(mysql_num_rows($read_book_query))
{
	$read_book_fetch=mysql_fetch_array($read_book_query);
	$bookInsertId=$read_book_query['book_id'];
	$bookInsertAuthor=$read_book_query['author_name'];

	$user_name=$_SESSION['fname'];
	$read_register="SELECT * FROM register WHERE name='$user_name'";
	$read_register_query=mysql_query($read_register,$conn);
	$read_register_fetch=mysql_fetch_array($read_register_query);
	if(mysql_num_rows($read_register_fetch))
	{
		$userInsertFname=$read_register_fetch['fname'];
		$userInsertLname=$read_register_fetch['lname'];

		$dateIssue=date("Y-m-d");
		$dateReturn=date("Y-m-d",strtotime("+1 week"));

		$insert_query="INSERT INTO issue VALUES ('$bookInsertId','$bookInsertAuthor','$dateIssue','$dateReturn','$userInsertFname','$userInsertLname')";
		$insert_query_run=mysql_query($insert_query,$conn);
	}
}
?>