<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Очищаємо дані з форми
    $phone = htmlspecialchars($_POST['phone']);
    $rubric = htmlspecialchars($_POST['rubric']);
    $message = htmlspecialchars($_POST['message']);
    
    // Вказуємо електронну адресу для отримання повідомлень
    $to = "example@mail.com";  // Змініть на потрібну адресу
    $subject = "Нове оголошення від користувача";
    
    // Створюємо тіло листа
    $body = "Номер телефону: $phone\nРубрика: $rubric\n\nТекст оголошення:\n$message";
    
    // Заголовки для відправки
    $headers = "From: no-reply@yourwebsite.com";
    
    // Функція для надсилання листа
    if (mail($to, $subject, $body, $headers)) {
        // Якщо лист успішно надіслано
        echo "Оголошення успішно надіслано!";
    } else {
        // Якщо сталася помилка під час відправки
        echo "Помилка при відправленні оголошення. Спробуйте ще раз.";
    }
}
?>