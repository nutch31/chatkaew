<?php
$to = "reservation@chatkaewhotel.com";
$subject = "FYI : ติดตามข่าวสาร  Website Chatkaew Hotel".date("Y-m-d H:i:s");;
$email = $_REQUEST["email"];

$message = "
<html>
<head>
<title>HTML email</title>
</head>
	<body>
	<p>FYI : ติดตามข่าวสาร  Website Chatkaew Hotel</p>
		<table width=100% border=1>
			<tr>
				<th>Email : </th>
				<td>$email</td>
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

//mail($to,$subject,$message,$headers);
?>


<script language="javascript">
alert("ติดตามข่าวสารเรียบร้อย");
window.opener.location.reload()
window.close();
</script>