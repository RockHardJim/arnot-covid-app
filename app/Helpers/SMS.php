<?php
namespace App\Helpers;
use Unirest;

class SMS{

    private $message;
    private $to;
    private $sms;
    private $headers;
    private $query;

    public function __construct()
    {
        $this->headers = array(  'Authorization' => '9KJvsADhSCCV6-twjBNakQ==', 'Content-Type' => 'application/x-www-form-urlencoded');
        $this->sms = 'https://platform.clickatell.com/messages';
    }


    public function rejected($name, $surname, $contact){
        $this->message = 'Hi '.$name. ' '.$surname.', We currently cannot issue you with a gate token due to your covid risk score please contact your line manager for more information'.' Kind regards Arnot Opco';
        $this->to = $contact;
        $this->send();
    }

    public function preliminary($name, $surname, $contact, $token){
        $this->message = 'Hi '.$name. ' '.$surname.', We issued you with a pre-approval token that will be activated based on your temperature readings when checking in. Your one time token is '.$token .' Kind regards Arnot Opco';
        $this->to = $contact;
        $this->send();
    }

    public function accepted($name, $surname, $contact, $token){
        $this->message = 'Hi '.$name. ' '.$surname.', We have successfully recorded your state of health and have issued your gate access token here '.$token .' Kind regards Arnot Opco';
        $this->to = $contact;
        $this->send();
    }

    private function send(){
        $this->query = array('content' => $this->message, 'to' => $this->to);

        $body = Unirest\Request\Body::form($this->query);


        Unirest\Request::verifyPeer(false);
        $response = Unirest\Request::post($this->sms, $this->headers, $body);
    }
}