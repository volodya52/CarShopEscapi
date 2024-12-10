<?php
$surname = trim(strip_tags($_POST['surname']));
$name = trim(strip_tags($_POST['name']));
$date_birthday = trim(strip_tags($_POST['date_birthday']));
$mail = trim(strip_tags($_POST['mail']));
$login = trim(strip_tags($_POST['login']));
$password = trim(strip_tags($_POST['password']));

$subject = "Перейдите на сайт для завершения регистрации";
$msg = "Здравствуйте $name $surname!\nДата рождения: $date_birthday\nЛогин: $login\nПароль: $password\nПерейдите по ссылке для завершения регистрации: http://example.com/confirm.php";
$headers = "From: Example <no-reply@example.com>\r\n";
$headers .= "Bcc: Example <no-reply@example.com>\r\n";

if (!empty($surname) && !empty($name) && !empty($date_birthday) && !empty($mail) && !empty($login) && !empty($password) && filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    mail($mail, $subject, $msg, $headers);
    echo "Данные внесены в систему.";
} else {
    echo "Ошибка при внесении данных.";
}
?>