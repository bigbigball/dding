<?php 
if(!defined('BASEPATH')) exit('No direct script asscess allowed');

require_once 'curl/CurlRequest.php';
require_once 'curl/Transport.php';

class Curl_client {

    const HTTP_GET = 'GET';
    const HTTP_POST = 'POST';
    
    private $requestList = array();
    private $responseList = array();
    private $options = array();

    public function call($url, $method, $params, $opt = array()) {
        $callback = 'solo';
        $request = CurlRequest::createRequest();
        $request->setApi($url, $method);
        $request->setParam($params);
        $response = Transport::exec(array($callback => $request), $opt);
        return $response[$callback];
    }

    public function multiCall($url, $method, $params, $callback, $opt = array()) {
        $request = CurlRequest::createRequest();
        $request->setApi($url, $method);
        $request->setParam($params);
        $request->setOptions($opt);
        $this->requestList [$callback] = $request;
    }
    
    public function setopt($opt) {
        $this->options = (array) $opt;
    }
    
    public function callData() {
        $this->responseList = Transport::exec($this->requestList, $this->options);
        $this->requestList = array();
        return $this->responseList;
    }
    
    public function __get($callback) {
        if (isset($this->responseList [$callback])) {
            return $this->responseList [$callback];
        } else {
            return '';
        }
    }

}

