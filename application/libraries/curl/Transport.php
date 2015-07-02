<?php

require_once 'SingleCurl.php';
require_once 'MultiCurl.php';

class Transport {

    public static function exec($requestList = array(), $opt= array()) {
        if(empty($requestList))
            return array();

        foreach ($requestList as $request) {
            $opt = self::combinOptions($request->opt, $opt);
            $request->setOptions($opt);
        }

        if (count($requestList) > 1) {
            $responseList = self::MultiCurlExec($requestList);
        } else {
            $responseList = self::SingleCurlExec($requestList); 
        }

        return $responseList;
    }

    private static function combinOptions($opt, $additionOpt) {
        if (!is_array($additionOpt)) {return $opt;}
        
        foreach ($additionOpt as $type => $value) {
            if (isset($opt[$type])) {
                $opt[$type] = $value;
            } else {
                $opt[$type] = $value;
            }
        }

        return $opt; 
    }

    private static function MultiCurlExec($requestList) {
        MultiCurl::instance()->open();
        MultiCurl::instance()->send($requestList);
        $responseList = MultiCurl::instance()->exec();
        MultiCurl::instance()->close();
        return $responseList;       
    }

    private static function SingleCurlExec($requestList) {
        $responseList = array();
        foreach ($requestList as $key => $request) {
            SingleCurl::instance()->open();
            SingleCurl::instance()->send($request);
            $responseList[$key] = SingleCurl::instance()->exec();
            SingleCurl::instance()->close();
        }
        return $responseList;
    }
}

