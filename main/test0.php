<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://porta.fda.moph.go.th/FDA_SEARCH_ALL/WS_LICENSE_SEARCH.asmx?WSDL',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <GET_DATA_DRUG xmlns="http://tempuri.org/">
      <DATAS>'.$_POST['Newcode'].'</DATAS>
    </GET_DATA_DRUG>
  </soap:Body>
</soap:Envelope>',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: text/xml',
    'Cookie: cookiesession1=678B769A89012BEILORVYBEFGHIJE48F'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
// print_r($response);

// $xml=simplexml_load_string($response);
// print_r($xml);
