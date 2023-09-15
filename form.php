<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $data = "Ім'я: " . $name . "\n" .
            "Прізвище: " . $surname . "\n" .
            "Email: " . $email . "\n" .
            "Пароль: " . $password . "\n";

    $file = fopen("user_data.txt", "a"); // Відкрити файл для запису (якщо не існує, то створиться новий)
    
    if ($file) {
        fwrite($file, $data); // Записати дані в файл
        fclose($file); // Закрити файл
    } else {
        echo "Помилка при відкритті файлу для запису.";
    }
}
?>
