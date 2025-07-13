<?php
namespace App\Service;

use Twilio\Rest\Client;

class TwilioService
{
    private $client;
    private $from;

    public function __construct()
    {
        $sid = getenv('TWILIO_SID');
        $token = getenv('TWILIO_TOKEN');
        $this->from = getenv('TWILIO_FROM');
        $this->client = new Client($sid, $token);
    }

    public function sendSms($to, $message)
    {
        return $this->client->messages->create(
            $to,
            [
                'from' => $this->from,
                'body' => $message
            ]
        );
    }
}