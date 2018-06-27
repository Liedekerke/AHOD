<?php
/*
$filtre = array(
    'name'  =>  FILTER_SANITIZE_STRING | FILTER_SANITIZE_SPECIAL_CHARS,
    'mail'  => FILTER_SANITIZE_STRING | FILTER_VALIDATE_EMAIL | FILTER_SANITIZE_SPECIAL_CHARS,
    'message'   => FILTER_SANITIZE_SPECIAL_CHARS,
    'send'  => FILTER_SANITIZE_STRING | FILTER_FLAG_NO_ENCODE_QUOTES | FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_BACKTICK | FILTER_FLAG_ENCODE_LOW | FILTER_FLAG_ENCODE_HIGH | FILTER_FLAG_ENCODE_AMP | FILTER_SANITIZE_NUMBER_INT | FILTER_SANITIZE_SPECIAL_CHARS);
$result = filter_input_array(INPUT_POST, $filtre);

$to = trim($result["name"]);
$mail = trim($result["mail"]);
$message = trim($result["message"]);
$send = trim($result["send"]);
$headers = array(
    'From' => 'webmaster@example.com',
    'Reply-To' => 'webmaster@example.com',
    'X-Mailer' => 'PHP/' . phpversion()
);

if(isset($to) && !empty($to) && isset($mail) && !empty($mail) && isset($message) && !empty($message) && isset($send) && !empty($send)){
    mail($to, $mail, $message, $headers);
} else {
    echo '<script language="javascript">alert("Veuillez remplir les champs du formulaire SVP.")</script>';
}
*/
?> 