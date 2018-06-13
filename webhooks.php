<?php

$strAccessToken = "xW6uoHrAFv8eMuH3Vj3EkfLk2V/LfZJiSkJdQ67oCF3JzJsM4e3Gp/RRXDsnrGUckM/o7n0ReU4d3E/tHjVkZFgZBhcEObv2rAXyES2y5AGrDbXa8BW741GpbQyF9wQhr/IewptCr18ifH3jMcGerAdB04t89/1O/w1cDnyilFU=";

$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);

$strUrl = "https://api.line.me/v2/bot/message/reply";

$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";

if($arrJson['events'][0]['message']['text'] == "สวัสดี"){
$arrPostData = array();
$arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['messages'][0]['text'] = "สวัสดี ID คุณคือ ".$arrJson['events'][0]['source']['userId'];
}else 
if($arrJson['events'][0]['message']['text'] == "tkl"){
$arrPostData = array();
$arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['messages'][0]['text'] = "Fileserver : administrator
Kitahara1234
Server system : administrator
kt2013
proxy : administrator
Kitahara1234
VPN /101.109.244.155 : ttuser
ttmrw
NEW SERVER : administrator
Kitahara1234";
}else 
if($arrJson['events'][0]['message']['text'] == "dms"){
$arrPostData = array();
$arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['messages'][0]['text'] = "File server : administrator
qULWd0MZkgDo
Rpices : administrator
dms
Nirvana : nirvana
dms
Proxy : dmstech
dms1234
Symantec : admin
symantec1";
}else 
if($arrJson['events'][0]['message']['text'] == "hakuto"){
$arrPostData = array();
$arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['messages'][0]['text'] = "File server : administrator
hkt2003";
}else
if($arrJson['events'][0]['message']['text'] == "nippon"){
$arrPostData = array();
$arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['messages'][0]['text'] = "File server : administrator
Nippon1234";
}else
if($arrJson['events'][0]['message']['text'] == "alsok"){
$arrPostData = array();
$arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['messages'][0]['text'] = "File server : administrator
AkasakA,Camel-k229310";
}else
if($arrJson['events'][0]['message']['text'] == "tomac"){
$arrPostData = array();
$arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['messages'][0]['text'] = "File server : administrator
Tomac1234";
}else
if($arrJson['events'][0]['message']['text'] == "sanei"){
$arrPostData = array();
$arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['messages'][0]['text'] = "File-Server : administrator
Sanei54321,P@ssw0rd,qULWd0MZkgDo";
}else
if($arrJson['events'][0]['message']['text'] == "วิธีใช้"){
$arrPostData = array();
$arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['messages'][0]['text'] = "คำสั่งให้พิมพ์เป็นตัวเล็กทั้งหมด เช่น 
alsok / sanei / nippon / dms / tkl

วิธีเปลี่ยน port outlook คำสั่ง portoutlook

วิธี set map drive dearlife คำสั่ง mapdear

โหลด avira free คำสั่ง avira

วิธี set user vpn tkl คำสั่ง uservpntkl

วิธี set vpn tkl คำสั่ง vpntkl

โปรแกรม ipscan คำสั่ง ipscan
";
}else
if($arrJson['events'][0]['message']['text'] == "portoutlook"){
$arrPostData = array();
$arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['messages'][0]['text'] = "https://drive.google.com/open?id=15uaZyK7JFhIPbu_0JKW0n_saRXhBT6tY";
}else
if($arrJson['events'][0]['message']['text'] == "mapdear"){
$arrPostData = array();
$arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['messages'][0]['text'] = "https://drive.google.com/open?id=1fVF2aYUfVuUHZ8KOj43heD4jy-kYMb8Y";
}else
if($arrJson['events'][0]['message']['text'] == "avira"){
$arrPostData = array();
$arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['messages'][0]['text'] = "https://drive.google.com/open?id=1tChT8XABgEyavXktn3ZP1Wwg8VItTKwq";
}else
if($arrJson['events'][0]['message']['text'] == "uservpntkl"){
$arrPostData = array();
$arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['messages'][0]['text'] = "https://drive.google.com/open?id=17o615QbboVOTSR1vDD_OZ4GibB9XNsoS";
}else
if($arrJson['events'][0]['message']['text'] == "vpntkl"){
$arrPostData = array();
$arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['messages'][0]['text'] = "https://drive.google.com/open?id=1uIGoRRIycC6d1CdFqPPAkU4jeYsDqEuI";
}else
if($arrJson['events'][0]['message']['text'] == "ipscan"){
$arrPostData = array();
$arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['messages'][0]['text'] = "https://drive.google.com/open?id=1XVnilHsbrogicFCMmlACi0gykmNBtfds";
}else
{
$arrPostData = array();
$arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['messages'][0]['text'] = "ฉันไม่เข้าใจคำสั่ง";
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);

?>
