<?php
    // require_once 'HTTP/Request2.php';
    // require_once("../lib/nusoap.php");
    // $request = new 
    // $request = new HTTP_Request2();
    $request->setUrl('http://porta.fda.moph.go.th/FDA_SEARCH_ALL/WS_LICENSE_SEARCH.asmx?WSDL');
    $request->setMethod(HTTP_Request2::METHOD_POST);
    $request->setConfig(array(
        'follow_redirects' => TRUE
    ));

    $request->setHeader(array(
        'Content-Type' => 'text/xml',
        'Cookie' => 'cookiesession1=678B769A89012BEILORVYBEFGHIJE48F'
    ));

    $request->setBody('<?xml version="1.0" encoding="utf-8"?>
    \n<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" 
    \nxmlns:xsd="http://www.w3.org/2001/XMLSchema" 
    \nxmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
    \n <soap:Body>
    \n <GET_DATA_DRUG xmlns="http://tempuri.org/">
    \n <DATAS>1A47/40</DATAS>
    \n </GET_DATA_DRUG>
    \n </soap:Body>
    \n </soap:Envelope>');

    try {
        $response = $request->send();
        if ($response->getStatus() == 200) {
            echo $response->getBody();
        } else {
            echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
            $response->getReasonPhrase();
        }
    }

    catch(HTTP_Request2_Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }

?>