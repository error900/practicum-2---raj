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
				'recaptcha_response_field' => 'required|recaptcha'
            );
 
            //Validate data
            $validator = Validator::make($data, $rules);
 
            if ($validator->fails()) {
            return Redirect::to('service-get-quote/' . $Service)
                ->withErrors($validator)
                ->withInput();
        } else {
            //Send email using Laravel send function
                Mail::send('emails.message-service-get-quote', $data, function($message) use ($data)
                {
                    $message->from($data['email'], $data['name']);
					$message->subject($data['service']);
					$message->cc('karllester.napadao@gmail.com');
					$message->ReplyTo($data['email']);
					$message->to('karllester.napadao@gmail.com', 'RAJ Technologies Inc.');
                });
				Session::flash('message-service-quote', 'Requested Service Quote Sent!');
                return Redirect::to('services-page');
        }
            
    }

}
