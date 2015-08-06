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
                'g-recaptcha-response'     => 'required'
            );
            
            $greptchamessage = array('g-recaptcha-response' => 'We need to know your not a Robot!');
            //Validate data
            $validator = Validator::make($data, $rules, $greptchamessage);

            if ($validator->fails()) {
            return Redirect::to('career-page')

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
                Mail::send('emails.message-attachment', $data, function($message) use ($data)
                {
                    $message->from($data['email'], $data['name']);
                    $message->subject($data['subject']);
                    $message->cc('hr@rajtechinc.com');
                    $message->ReplyTo($data['email']);
                    $message->attach($data['resume']->getRealPath(), 
                              array('as' => 'Resume.'.$data['resume']->getClientOriginalExtension(), 
                                    'mime' => $data['resume']->getMimeType()));
                    $message->to('rajcombaguio@gmail.com', 'RAJ Technologies Inc.');
                });
                Session::flash('message-career', 'Message Sent!');
                return View::make('Pages/career-page');
                
            } else {
                $errors = $resp->getErrorCodes();
                return Redirect::to('career-page')->withErrors($validator)->withInput();
            }
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
                'g-recaptcha-response'     => 'required'
            );
 
            //Validate data
            $validator = Validator::make($data, $rules);
            
            if ($validator->fails()) {
            return Redirect::to('contact-page')
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
                    Mail::send('emails.message', $data, function($message) use ($data)
                    {
                        $message->from($data['email'], $data['name']);
                        $message->subject($data['subject']);
                        $message->cc('rajcombaguio@gmail.com');
                        $message->ReplyTo($data['email']);
                        $message->to('rajcombaguio@gmail.com', 'RAJ Technologies Inc.');
                    });
        
                    
                    Session::flash('message-contact', 'Message Sent!');
                    return View::make('Pages/contact-page');

                } else {
                    $errors = $resp->getErrorCodes();
                    return Redirect::to('contact-page')->withErrors($validator)->withInput();
                }

                    
            }
            
    }

} 