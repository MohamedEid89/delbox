// app/Services/TwilioService.php

namespace App\Services;

use Twilio\Rest\Client;

class TwilioService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client(env('TWILIO_SID'), env('TWILIO_AUTH_TOKEN'));
    }

    public function sendSms($to, $message)
    {
        $this->client->messages->create(
            $to, // To phone number
            [
                'from' => env('TWILIO_PHONE_NUMBER'), // Your Twilio number
                'body' => $message
            ]
        );
    }
}
