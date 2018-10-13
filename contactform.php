<?php

date_default_timezone_set('Europe/Stockholm');


echo "	<form method='POST' action=''>
		<input type='hidden' name='uid' value='Anonymous'>
		<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
		<textarea name='message'> </textarea> <br>
    <button name='submit' type='commentSubmit'>Comment</button>
	</form>";

function setComments()
{
  if(isset($_POST['commentSubmit']))
  {
    $uid = $_POST['uid'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    $sql = "INSERT INTO comments (uid, date, message)VALUES ('$uid', '$date', '$message')";
    $result = mysqli_query($conn, $sql);
  }

}

/*Code for the commentform*/
/*
if(isset($_POST['Submit'])){
 print "<h1>Your comment has been submitted!</h1>";

 $Name = $_POST['Name'];
 $Comment = $_POST['Comment'];

 #Get old comments
 $old = fopen("comments.txt", "r+t");
 $old_comments = fread($old, 1024);

 #Delete everything, write down new and old comments
 $write = fopen("comments.txt", "w+");
 $string = "<b>".$Name."</b><br>".$Comment."<br><br>\n".$old_comments;
 fwrite($write, $string);
 fclose($write);
 fclose($old);
}

#Read comments
$read = fopen("comments.txt", "r+t");
echo "<br><br>Comments<hr>".fread($read, 1024);
fclose($read);
*/


/*COde for sending mail through contactform*/
/*
if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $subject = $_POST["subject"];
  $mailFrom = $_POST["mail"];
  $message = $_POST["message"];

  $mailTo = "joakim@l8sredovisning.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an e-mail from ".$name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.php?mailsend");
}*/

 ?>
