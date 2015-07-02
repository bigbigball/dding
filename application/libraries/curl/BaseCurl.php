<?php

abstract class BaseCurl {
    
    const DefaultTimeOut = 3;  //默认接口超时时间
    const DefaultTimOutConn = 2; //默认连接时间 
    
    private $requestMap = array();
    private $useragent = '';
    private $headers = array();
    private $curlHandle = NULL;
    
    abstract function open();
    abstract function send($request);
    abstract function exec();
    abstract function close();
    
    public static function instance() {
        is_null(static::$instance) && static::$instance = new static();
        return static::$instance;
    }
    
    public function setUserAgent($agent) {
        $this->useragent = $agent;
    }
    
    public function setHeader($header) {
        !empty($header) && $this->headers[] = $header;
    }
    
    protected function initSingleCurl() {
        $curlHandle = curl_init();
        !empty($this->headers) && curl_setopt($curlHandle, CURLOPT_HTTPHEADER, $this->headers);
        !empty($this->useragent) && curl_setopt($curlHandle, CURLOPT_USERAGENT, $this->useragent);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curlHandle, CURLOPT_HEADER, FALSE);
        curl_setopt($curlHandle, CURLOPT_FOLLOWLOCATION, 1);
        return $curlHandle;
    }
    
    protected function setUrl($curlHandle, CurlRequest $request) {
        $params = http_build_query($request->params);
        $url = $request->url;
        $method = $request->method;
        switch ($method) {
            case 'POST':
                curl_setopt($curlHandle, CURLOPT_POST, TRUE);
                curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $params);
                break;
            case 'GET':
                curl_setopt($curlHandle, CURLOPT_HTTPGET, TRUE);
                $url .= '?' . $params;
                break;
        }
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        return $curlHandle;
    }
    
    protected function setopt($curlHandle, $request) {
        $options = $request->opt;
    
        if (empty($options['timeout'])) {
            $options['timeout'] = self::DefaultTimeOut;
        }
    
        if (empty($options['connect_timeout'])) {
            $options['connect_timeout'] = self::DefaultTimOutConn;
        }
    
        foreach ($options as $type => $value) {
            switch ($type) {
                case 'timeout':
                    curl_setopt($curlHandle, CURLOPT_TIMEOUT, $value);
                    break;
                case 'connect_timeout':
                    curl_setopt($curlHandle, CURLOPT_CONNECTTIMEOUT, $value);
                    break;
                case 'timeout_ms':
                    curl_setopt($curlHandle, CURLOPT_TIMEOUT_MS, $value);
                    break;
                case 'connect_timeout_ms':
                    curl_setopt($curlHandle, CURLOPT_CONNECTTIMEOUT_MS, $value);
                    break;
            }
        }
    
        return $curlHandle;
    }
    
}

