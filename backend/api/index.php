<?php 
// declare(strict_types=1);
// header('Content-Type : application/json');
// header("Access-Control-Allow-Origin: {$SERVER['HTTP_ORIGIN']}");
header("Access-Control-Allow-Origin: *");

function getResult(){
    $url = 'https://merchant-go.fortebank.com/ecom/init';
    

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
      "Accept: application/json",
      "Content-Type: application/json",
      "Access-Control-Allow-Origin: *"
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

    $data = <<<DATA
    {
      "merchantId": "NADEZHDA03013935",
      "preAuth": false,
      "source": {
        "amount": 129900,
        "currency": "398",
        "remoteId": "RID_01",
        "description": "Покупка Курса в рассрочку"
        }
    }
    DATA;

    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

    $resp = curl_exec($curl);
    curl_close($curl);
    return $resp;
}

function getStatus($json){
  $url = 'https://merchant-go.fortebank.com/ecom/status';
    

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
      "Accept: application/json",
      "Content-Type: application/json",
      "Access-Control-Allow-Origin: *"
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

    $data = <<<DATA
    {
      "merchantId": "NADEZHDA03013935",
      "orderId": "{{orderId}}",
      "sessionId": "{{sessionId}}"
      }
    DATA;

    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

    $resp = curl_exec($curl);
    curl_close($curl);
    
    return $resp;
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $result = getResult();
    echo $result;
    return $result;
} 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = getStatus($json);
    echo $result;
    return $result;
} 
