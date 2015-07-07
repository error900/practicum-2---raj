<?php

class CartController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function add($id)
	{
		$Product = Product::find($id);
		Cart::associate('Product')->add(array('id' => $Product->id, 'name' => $Product->brand, 'qty' => 1, 'price' => 9.99));
		DB::table('products')->where('id', $id)->increment('hits', 1);
		Session::flash('message-addToCart', 'Added to comparison list!');
		return Redirect::to('product-item-' . $Product->id);
	}

	public function clear()
	{
		$totalItems = Cart::count(false);
		if ($totalItems >= 1) {
			Cart::destroy();
			Session::flash('message-cart', 'List cleared!');
			return Redirect::to('product-compare');
		}
		else {
			Session::flash('message-cart', 'Nothing to clear!');
			return Redirect::to('product-compare');
		}
	}

	public function remove($rowid)
	{
		Cart::remove($rowid);
		Session::flash('message-cart', 'Removed 1 item!');
		return Redirect::to('product-compare');
	}

	public function get_quantity($rowid)
	{
		//Validation rules
            $rules = array (
                'quantity' => 'required|numeric|between:1,10',
            );
 
            //Validate data
            $validator = Validator::make(Input::all(), $rules);
 
            if ($validator->fails()) {
            return Redirect::to('product-compare')
                ->withErrors($validator);
        } else {
			$quantity = Input::get('quantity');
            Cart::update($rowid, $quantity);
			Session::flash('message-cart', 'An item quantity changed!');
			return Redirect::to('product-compare');
        }
		
	}

    public function get_quote()
    {
        //Get all the data and store it inside Store Variable
            $data = Input::all();
 
            //Validation rules
            $rules = array (
                'name'                     => 'required|max:30',
				'email'                    => 'required|email|max:30',
				'contact_number'           => 'required|alpha_dash|max:12',
				'address'                  => 'required|max:50',
				'subject'                  => 'required|max:30',
				'message'                  => 'required|max:1000',
				'recaptcha_response_field' => 'required|recaptcha'
            );
 
            //Validate data
            $validator = Validator::make($data, $rules);
 
            if ($validator->fails()) {
            return Redirect::to('product-get-quote')
                ->withErrors($validator)
                ->withInput();
        } else {
            //Send email using Laravel send function
                Mail::send('emails.message-get-quote', $data, function($message) use ($data)
                {
                    $message->from($data['email'], $data['name']);
					$message->subject($data['subject']);
					$message->cc('inquiry@rajtechinc.com');
					$message->ReplyTo($data['email']);
					$message->to('rajcombaguio@gmail.com', 'RAJ Technologies Inc.');
                });
				Session::flash('message-quote', 'Requested Quote Sent!');
                return Redirect::to('product-compare');
        }
            
    }

}
