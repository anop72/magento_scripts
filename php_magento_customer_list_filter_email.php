<?php

    $apiUrlV2 = "http://your.magento.host/api/v2_soap?wsdl";

    $apiUser = 'your_wsdl_api_user';
    $apiKey = 'your_wsdl_api_key';

    $client = new SoapClient($apiUrlV2);

    // retreive session id from login
    $sessionId = $client->login($apiUser, $apiKey);

    $filterByEmail = 'example@gmail.com';
    // using complex filter
    $complexFilter = array('complex_filter' => array(
            array(
                'key' => 'email',
                'value' => array('key' => 'eq', 'value' => $filterByEmail)
            )
        )
    );

    $result = $client->customerCustomerList($sessionId, $complexFilter);

    var_dump($result);

?>
