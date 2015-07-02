<?php

require_once 'BaseCurl.php';

class MultiCurl extends BaseCurl {

    static $instance = NULL;

    public function open() {
        $this->curlHandle = curl_multi_init();
    }

    public function send($requests) {
        if (!is_array($requests) || empty($requests)) {
            return NULL;
        }

        foreach ($requests as $key => $request) {
            $curlHandle = $this->initSingleCurl();
            $curlHandle = $this->setOpt($curlHandle, $request);
            $curlHandle = $this->setUrl($curlHandle, $request);
            curl_multi_add_handle($this->curlHandle, $curlHandle);
            $this->requestMap[(string) $curlHandle] = $key;
        }
    }

    public function exec() {
        $active = null;
        do {
            do {
                $status = curl_multi_exec($this->curlHandle, $active);
            } while ($status == CURLM_CALL_MULTI_PERFORM);
            if ($status != CURLM_OK) {break;}

            $response = array();
            $respond = curl_multi_info_read($this->curlHandle);
            while ($respond) {
                $callback = $this->requestMap[(string) $respond['handle']];
                $responses[$callback]['content'] = curl_multi_getcontent($respond['handle']);
                $responses[$callback]['httpcode'] = curl_getinfo($respond['handle'], CURLINFO_HTTP_CODE);

                curl_multi_remove_handle($this->curlHandle, $respond['handle']);
                curl_close($respond['handle']);

                $respond = curl_multi_info_read($this->curlHandle);
            }
            if ($active > 0) {
                curl_multi_select($this->curlHandle, 0.05);
            }
        } while ($active);
        return $responses;
    }

    public function close() {
        curl_multi_close($this->curlHandle);
        $this->curlHandle = NULL;
        $this->requestMap = array();
        $this->headers = array();
    }

}

