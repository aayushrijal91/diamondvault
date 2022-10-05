<?php
include __DIR__ . '/env.php';

$site = "The Diamond Vault";
$phone_number = "+61 415 558 559";
$admin_email = 'arijal@aiims.com.au'; // 'info@thediamondvault.com.au';
$facebook = "https://www.facebook.com/TheDiamondVaultAus";
$instagram = "https://www.instagram.com/_thediamondvault_/";
$whatsapp = "https://wa.me/61415558559";
// $bcc_email = "";
$no_reply_email = 'info@thediamondvault.com.au';
$recaptcha_client_secret = $client_secret;
$recaptcha_server_secret = $server_secret;

function renderImg($filename, $folder, $classname = "")
{
    $filename_without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
    $src = "./assets/images/" . $folder . "/" . $filename;

    if (file_exists("./assets/images/" . $folder . "/" . $filename_without_ext . ".webp")) {
        $src = "./assets/images/" . $folder . "/" . $filename_without_ext . ".webp";
    }

    return "<img src=" . $src . " alt=" . $filename_without_ext . " class='" . $classname . "'>";
}
