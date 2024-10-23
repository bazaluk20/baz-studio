<?php 

    include "config.php";
    include "contacts-data.php";

function sendMessageToTelegram($message) {
    $telegram_bot_token = 'TELEGRAM_BOT_TOKEN';
    $telegram_chat_id = 'CHAT_ID';

    // URL для отправки сообщения через API
    $telegram_api_url = "https://api.telegram.org/bot$telegram_bot_token/sendMessage";

    // Параметры сообщения
    $data = [
        'chat_id' => $telegram_chat_id,
        'text' => $message,
        'parse_mode' => 'HTML',
    ];

    // Используем cURL для отправки запроса
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $telegram_api_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Выполняем запрос
    $response = curl_exec($ch);
    curl_close($ch);

    // Проверка результата
    if ($response) {
        // echo "Сообщение отправлено в Telegram!";
        return true;
    } else {
        // echo "Ошибка при отправке сообщения.";
        return false;
    }
}


$titlesuccess = $langarr['titlesuccess'];
$textsuccess = $langarr['textsuccess'];
$titleerror = $langarr['titleerror'];

$success_output = "Your message sent successfully";
	$website = 'Baz-studio.pro';
	$name = 'Имя = '.htmlspecialchars(addslashes(trim($_POST['name'])));
	$contact = "E-mail - ".htmlspecialchars(addslashes(trim($_POST['email'])));
	$data = "Phone - ".htmlspecialchars(addslashes(trim($_POST['phone'])));
	$message = $website . "\n" . $name . "\n" . $contact . "\n" . $data;

	$result = sendMessageToTelegram($message);

	if ($result === true) {
		 echo "        <p class='close_result' onclick='closePopUp();'>&times;</p>
                        <p class='bold result'>
                            $titlesuccess
                        </p>
                        <img src='./img/success.png' alt='success'>
                        <p>
                           $textsuccess
                        </p> ";
	} else {
		 echo "   <p class='close_result' onclick='closePopUp();'>&times;</p>
                    <p class='bold result'>
                        $titleerror
                    </p>
                    <p class='h1 center'>404</p>";
	}

?>