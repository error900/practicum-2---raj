<?php

class ContactController extends BaseController {

	public function career_inquire()
    {
        //Get all the data and store it inside Store Variable
            $data = Input::all();
 
            //Validation rules
            $rules = array (
                'name'                     => 'required|max:30',
				'email'                    => 'required|email|max:30',
				'contact_number'           => 'required|alpha_dash|max:12',
				'subject'                  => 'required|max:30',
				'message'                  => 'required|max:1000',
				'resume'                   => 'required|mimes:doc,docx,pdf|max:500',
				'recaptcha_response_field' => 'required|recaptcha'
            );
            
            //Validate data
            $validator = Validator::make($data, $rules);

            if ($validator->fails()) {
            return Redirect::to('career-page')

                ->withErrors($validator)
                ->withInput();
        } else {
            //Send email using Laravel send function
                Mail::send('emails.message-attachment', $data, function($message) use ($data)
                {
                    $message->from($data['email'], $data['name']);
					$message->subject($data['subject']);
					$message->cc('hr@rajtechinc.com');
					$message->ReplyTo($data['email']);
					$message->attach($data['resume']->getRealPath(), 
							  array('as' => 'Resume.'.$data['resume']->getClientOriginalExtension(), 
									'mime' => $data['resume']->getMimeType()));
					$message->to('hr@rajtechinc.com', 'RAJ Technologies Inc.');
                });
				Session::flash('message-career', 'Message Sent!');
                return View::make('Pages/career-page');
        }
            
    }
	
    public function contact_inquire()
    {
        //Get all the data and store it inside Store Variable
            $data = Input::all();
            
            //Validation rules
            $rules = array (
                'name'                     => 'required|max:30',
				'email'                    => 'required|email|max:30',
				'subject'                  => 'required|max:30',
				'message'                  => 'required|max:1000',
				//'recaptcha_response_field' => 'required|recaptcha'
            );
 
            //Validate data
            $validator = Validator::make($data, $rules);
            
            if ($validator->fails()) {
            return Redirect::to('contact-page')
                ->withErrors($validator)
                ->withInput();

            } else {
                //Send email using Laravel send function
                    /*Mail::send('emails.message', $data, function($message) use ($data)
                    {
                        $message->from($data['email'], $data['name']);
    					$message->subject($data['subject']);
    					$message->cc('inquiry@rajtechinc.com');
    					$message->ReplyTo($data['email']);
    					$message->to('inquiry@rajtechinc.com', 'RAJ Technologies Inc.');
                    });*/
                    
                    Mail::send('emails.message', array('key' = 'value') , function($message)
                    {
                        $message->to('grab@gmail.com','kral letser')->subject('Welch');

                    });
                    
    				Session::flash('message-contact', 'Message Sent!');
                    return View::make('Pages/contact-page');
                    
            }
            
    }

} 