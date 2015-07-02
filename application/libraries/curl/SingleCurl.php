<?php

require_once 'BaseCurl.php';

class SingleCurl extends BaseCurl {
    
    static $instance = NULL;

    public function open() {
        $this->curlHandle = $this->initSingleCurl();
    }

    public function send($request) {
        $this->curlHandle = $this->setUrl($this->curlHandle, $request);
        $this->curlHandle = $this->setopt($this->curlHandle, $request);
    }

    public function exec() {
        $response = curl_exec($this->curlHandle);
        $res = array();
        $res['httpcode'] = curl_getinfo($this->curlHandle, CURLINFO_HTTP_CODE);
        $res['content'] = $response;
        return $res;
    }

    public function close() {
        curl_close($this->curlHandle);
        $this->curlHandle = NULL;
    }
}
