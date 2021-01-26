<?php
 require_once("Include/EncodeDecode.php");
function base64url_encode($plainText) {
    $base64 = base64_encode($plainText);
    $base64url = strtr(base64_encode(addslashes(gzcompress(serialize($base64),9))), '+/=', '-_,');
    return $base64url;   
}

function base64url_decode($plainText) {
    $base64url= unserialize(gzuncompress(stripslashes(base64_decode(strtr($plainText, '-_,', '+/=')))));
    $base64 = base64_decode($base64url);
    return $base64;   
}
?>