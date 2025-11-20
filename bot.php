<?php
//MADE BY @ISMOILOFF_s WITH LOVE :)
ob_start();
$API_TOKEN=""; //bot tokeni
define('API_TOKEN',$API_TOKEN);

date_default_timezone_set("Asia/Tashkent");
$time = date("Y-m-d H:i:s");

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_TOKEN."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }

}

$yangilash = json_decode(file_get_contents('php://input'));
$update = json_decode(file_get_contents('php://input'));
$xabar = $yangilash->message;
$message = $yangilash->message;
$cid = $xabar->chat->id;
$channel_post = $yangilash->channel_post;
$chat_id = $xabar->chat->id;
$mid = $xabar->message_id;
$matn = $xabar->text;
$userbasechannel = "@ourbasepershop";
$tx = $xabar->text;
$video = $xabar->video;
$name=$xabar->from->first_name;
$familiya=$xabar->from->last_name;
$cqid = $update->callback_query->id;
$username=$xabar->from->username;
$uid=$xabar->from->id;
$uid1=$xabar->callback_query->from->id;
$bio=$xabar->from->about->text;
$data = $yangilash->callback_query->data;
$type = $message->chat->type;
$cid1 = $yangilash->callback_query->message->chat->id;
$mid1 = $yangilash->callback_query->message->message_id;
$uid1 = $yangilash->callback_query->from->id;
$joinrequest = $update->chat_join_request;
$chatrequest = $joinrequest->chat->id;
$user_chat_id = $joinrequest->user_chat_id;
$day = date("d");


if($tx=="/start"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Ayo wassup ma nigga?",
]);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Send me location, uh i mean instagram link",
]);
}

// Instagram link handler
if (strpos($tx, "https://www.instagram.com/") === 0) {

    $airmax = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Downloading this bitchass video...",
    ]);

    $insta_url = $tx;
    $api_url = "https://ismoiloff.uz/downlaoder/instaapi.php?url=" . urlencode($insta_url);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);

    if ($data && isset($data['mediaUrls']) && count($data['mediaUrls']) > 0) {
        

        foreach ($data['mediaUrls'] as $media) {
            
            if (strpos($media, ".mp4") !== false) {
                bot('sendVideo', [
                    'chat_id' => $cid,
                    'video' => $media,
                    'caption' => $data['caption'] ?? '',
                ]);
            } else {
                bot('sendPhoto', [
                    'chat_id' => $cid,
                    'photo' => $media,
                    'caption' => $data['caption'] ?? '',
                ]);
            }

        }
        bot('deleteMessage',[
            'chat_id'=>$cid,
            'message_id'=>$airmax->result->message_id,
        ]);

    } else {
        bot('sendMessage', [
            'chat_id' => $cid,
            'text' => "Not found media b*tch.",
        ]);
    }
}

