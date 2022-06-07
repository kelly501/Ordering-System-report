<head>
<meta charset="utf-8">
</head>
<?php
$user=$_POST["user"];
$pswd=$_POST["pswd"];
$email=$_POST["email"];
mysql_connect("localhost","abcabc","123");
mysql_select_db("ncue");
mysql_query("SET NAMES UTF8");

$sql = "SELECT * FROM members where user='".$user."' and pswd='".$pswd."'";
$result = mysql_query($sql);
$rows = mysql_num_rows($result);
mysql_free_result($result);
if ($rows==0){
	$sql="insert into members (user,pswd,email) values ('".$user."','".$pswd."','".$email."')";
	mysql_query($sql);
} else {
	echo "User $user already exist!";
}
mysql_close();
?>

<?php
$user=$_POST["user"];
$email=$_POST["email"];
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Asia/Taipei');

require '/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "betty0244@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "betty1998713";

//Set who the message is to be sent from
$mail->setFrom('from@example.com', 'Confirm Email');

//Set an alternative reply-to address
//$mail->addReplyTo('betty0244@gmail.com', 'betty');

//Set who the message is to be sent to
$mail->addAddress($email, 'betty');

//Set the subject line
$mail->Subject = 'login mail';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body

$mail->msgHTML("This is a confirm mail .<br> 
    Please enter confirm and you will complete your regist .<br>
    <a href='http://localhost:8080/project/moban2377/reply.php?user=".$user."'>Confirm</a>");

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    
    //echo "Message sent!";
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
    //echo "New user $user, read your email continue register process.";
	// Send Mail
    header('Location:http://localhost:8080/project/moban2377/index.html');
}
function save_mail($mail) {
    //You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";

    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}
?>

<!--<a href="index.html">Home</a>-->