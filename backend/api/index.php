<?php
//https://reqbin.com/code/php/ky6hlmcs/php-post-request-example
//https://nadezhdareiner.kz
//https://qa-merchant-go.fortebank.com/ecom/status
//{"responseCode":0,"responseMessage":"OK","data":{"sessionId":"565572FDD8876D102B8FD97AB9DCD7B1","orderId":"9546766"}}
//{"responseCode":0,"responseMessage":"OK","data":{"orderId":"9546766","orderStatus":"CREATED","addInfo":"Покупка IPhone 10 XS;ecom-go;"}}
// $url = "https://qa-merchant-go.fortebank.com/ecom/init";
$url = "https://merchant-go.fortebank.com/ecom/init";
//{"responseCode":10,"responseMessage":"ORDER_NOT_FOUND","data":{"orderStatus":"ERROR"}}


$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept: application/json",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA
{
  "merchantId": "NADEZHDA03013935",
  "preAuth": false,
  "source": {
    "amount": 700,
    "currency": "398",
    "remoteId": "RID_01",
    "description": "Покупка IPhone 10 XS"
    }
}
DATA;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$resp = curl_exec($curl);
curl_close($curl);

echo $resp;
?>