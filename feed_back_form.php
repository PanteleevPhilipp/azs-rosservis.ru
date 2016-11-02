<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>ТЕСТ</title>
</head>
<body>

<?php

	$fio = $_POST['fio'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$massage = $_POST['massage'];


	$to = 'pheelpheelpheel@gmail.com';
	$subject = 'Россервис. Фидбэк.';
	$msg = "Имя отправителя: $fio\n" .
		"Телефон отправителя: $tel\n".
		"Email отправителя: $email\n" .
		"Текст сообщения: $massage\n";
	mail ($to, $subject, $msg, 'FROM: ' . $email);

	echo "Спасибо за отправку формы. Возвращаемся назад... <br />";
	echo "<script>history.go(-1)</script>";
	




?>

</body>
</html>
