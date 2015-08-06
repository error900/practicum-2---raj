<?php

class ServiceController extends \BaseController {

    public function service_get_quote($Service)
    {
        //Get all the data and store it inside Store Variable
            $data = Input::all();
 
            //Validation rules
            $rules = array (
                'service'                  => 'required',
                'name'                     => 'required|max:30',
                'email'                    => 'required|email|max:30',
                'contact_number'           => 'required|alpha_dash|max:12',
                'address'                  => 'required|max:50',
                'message'                  => 'required|max:1000',
                'g-recaptcha-response' => 'required'
            );
 
            //Validate data
            $validator = Validator::make($data, $rules);
 
            if ($validator->fails()) {
            return Redirect::to('service-get-quote/' . $Service)
                ->withErrors($validator)
                ->withInput();
        } else {

            $siteKey = "6Lcdcf8SAAAAAFYGXXKG_VyPS1GYRUNYbQy9bDGv";
            $secret = "6Lcdcf8SAAAAAPrZZ2dqvKnKH3V6FQFrYogzW1c5";

            $gRecaptchaResponse = $_POST['g-recaptcha-response'];
            $remoteIp = $_SERVER['REMOTE_ADDR'];
                    
            $recaptcha = new \ReCaptcha\ReCaptcha($secret);
            $resp = $recaptcha->verify($gRecaptchaResponse, $remoteIp);
            
            if ($resp->isSuccess()) {
                //Send email using Laravel send function
                Mail::send('emails.message-service-get-quote', $data, function($message) use ($data)
                {
                    $message->from($data['email'], $data['name']);
                    $message->subject($data['service']);
                    $message->cc('rajcombaguio@gmail.com');
                    $message->ReplyTo($data['email']);
                    $message->to('rajcombaguio@gmail.com', 'RAJ Technologies Inc.');
                });
                Session::flash('message-service-quote', 'Requested Service Quote Sent!');
                return Redirect::to('services-page');
            } else {
                $errors = $resp->getErrorCodes();
                return Redirect::to('service-get-quote/' . $Service)->withErrors($validator)->withInput();
            }
        }
            
    }

}
