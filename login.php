<?php
$login = trim(strip_tags($_POST['login']));
$password = trim(strip_tags($_POST['password']));

// Здесь будет код для проверки логина и пароля в базе данных

if ($login === 'admin' && $password === 'admin') {
    echo "Успешная авторизация!";
} else {
    echo "Неверный логин или пароль.";
}
?>