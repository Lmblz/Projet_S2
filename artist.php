<?php

$curl = curl_init('http://api.music-story.com/fr/artist/114832');
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$data = curl_exec($curl);
if ($data === false) {
    var_dump(curl_error($curl));
}
else {

}
curl_close($curl);