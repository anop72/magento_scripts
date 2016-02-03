<?php

    $apiUrlV2 = "http://your.magento.host/api/v2_soap?wsdl";

    $apiUser = 'your_wsdl_api_user';
    $apiKey = 'your_wsdl_api_key';

    $client = new SoapClient($apiUrlV2);

    // retreive session id from login
    $sessionId = $client->login($apiUser, $apiKey);

    $result = $client->customerCustomerList($sessionId);

    var_dump($result);

?>
