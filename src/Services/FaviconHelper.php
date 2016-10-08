<?php

namespace FaviconFinder\src\Services;

class FaviconHelper {

    /**
     * @param string $url
     * 
     * @return bool
     */
    public static function check($url) {                
        $ch = curl_init(rtrim($url,"/")."/favicon.ico");

        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_exec($ch);
        $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);            
        curl_close($ch);

        return ($statusCode == 200) ? true : false;
    }
}
