<?php

namespace Riftone07\OrangeSms;

use Illuminate\Support\Facades\Http;

class Sendsmsorange
{
    public function sendMessage($telephone,$message)
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('POST', 'https://api.orange.com/oauth/v3/token', [
            'form_params' => [
                'grant_type' => 'client_credentials'
            ],
            'headers' => [
                'Authorization' => "Basic YnRuakJhbXlwc0c0eGFRNVNOODBDMjdLSzZySXk0dEs6Z3k2SVhsd3RHYjZOd3pLcQ==",
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Accept' => 'application/json'
            ]
        ]);

        $data = json_decode($response->getBody());

        $access_token = $data->access_token;



        $response2 = Http::withHeaders([
            'Authorization' => "Bearer $access_token",
            'Content-Type' => 'application/json'
        ])->post('https://api.orange.com/smsmessaging/v1/outbound/tel%3A%2B2210000/requests', [
            "outboundSMSMessageRequest" => [
                "address" => 'tel:'.normalizePhoneNumberSender($telephone),
                "senderAddress" => "tel:+2210000",
                "outboundSMSTextMessage" => [
                    "message" => $message
                ]
            ]
        ]);

        return 'Sms envoyé avec success';
    }
}
