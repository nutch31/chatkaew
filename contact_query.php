<?php
$to = "reservation@chatkaewhotel.com";
$subject = "FYI : ข้อมูลติดต่อสอบถามจาก Website Chatkaew Hotel ".date("Y-m-d H:i:s");
$full_name = $_REQUEST["fullname"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$message = $_REQUEST["message"];

$message = "
<html>
<head>
<title>HTML email</title>
</head>
	<body>
	<p>FYI : ข้อมูลติดต่อสอบถามจาก Website Chatkaew Hotel</p>
		<table width=100% border=1>
			<tr>
				<th>Full Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Message</th>
			</tr>
			<tr>
				<td>$full_name</td>
				<td>$email</td>
				<td>$phone</td>
				<td>$message</td>
			</tr>
		</table>
	</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: noreply-chatkaew@hotmail.com' . "\r\n";
$headers .= 'Cc: nut_ch31@hotmail.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>


<script language="javascript">
alert("ส่งข้อมูลเรียบร้อยแล้ว! \nกรุณารอแอดมินติดต่อกลับภายใน 24 ชั่วโมง");
window.opener.location.reload()
window.close();
</script>