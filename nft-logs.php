<?php 
    $my_server_url = "https://polygon-mumbai.infura.io/v3/{your id}";
    $ch = curl_init($my_server_url);
    $data = array(
        'jsonrpc' => '2.0',
        'id' => 1,
        'method' => 'eth_getLogs',
        'params' => array(array(
            "fromBlock" => "0x185E561",
            "toBlock"   => "0x185E562", //"latest",
            "topics" => array(null, null, "0x0000000000000000000000006b5f8f476e0491e6414021561cd75735f03f4516"),
            "address"   => "0xD21A4a5766C4548508AEB0a5B4a6AA3E30423286"
        ))
    );
    $payload = json_encode($data);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    echo $result;


#docker run -it --rm --name my-running-script -v "$PWD":/usr/src/myapp -w /usr/src/myapp php:7.4-cli php nft-logs.php
