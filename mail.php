<?php
// Файлы phpmailer
require '/Users/leonid/Yandex.Disk.localized/Web_start_5.0/Homework/Web_start_5.0_Final/phpmailer/PHPMailer.php';
require '/Users/leonid/Yandex.Disk.localized/Web_start_5.0/Homework/Web_start_5.0_Final/phpmailer/SMTP.php';
require '/Users/leonid/Yandex.Disk.localized/Web_start_5.0/Homework/Web_start_5.0_Final/phpmailer/Exception.php';
// Переменные, которые отправляет пользователь
$userName = $_POST['username'];
$userPhone = $_POST['phone'];
$userMail = $_POST['email'];
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $msg = "Форма успешно отправлена";
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";                                          
    $mail->SMTPAuth   = true;
    // Настройки вашей почты
    $mail->Host       = 'smtp.gmail.com'; // SMTP сервера GMAIL
    $mail->Username   = 'leopolduspro@gmail.com'; // Логин на почте
    $mail->Password   = '256kotoFAI_}'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('leopolduspro@gmail.com', 'Leopoldus'); // Адрес самой почты и имя отправителя
    // Получатель письма
    $mail->addAddress('leopardiniya@yandex.ru');  

    // -----------------------
    // Само письмо
    // -----------------------
    $mail->isHTML(true);
    
    $mail->Subject = 'Новая заявка';
    $mail->Body    = "<b>Имя:</b> $userName <br>
    <b>Телефон:</b> $userPhone <br>
    <b>Email:</b> $userMail";


// Проверяем отравленность сообщения
if ($mail->send()) {
    header('Location: thx.php');
} else {
echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
}
} catch (Exception $e) {
    echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}