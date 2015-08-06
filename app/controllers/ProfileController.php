<?php


class ProfileController extends BaseController {
	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function postPhoto($id)
	{
		$rules = array(
			'image' => 'required|image|mimes:jpeg,png|max:2000'
		);
		
		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator);
		}
		else
		{
			$uploadedImage = Input::file('image');
			$destinationPath = 'Assets/img/profile';
			$extension = $uploadedImage->getClientOriginalExtension();
			$image = rand(1111111111,9999999999).'.'.$extension;

			$user = User::find($id);
			$user->image = $image;
			$user->save();
			
			$uploadedImage->move($destinationPath, $image); // uploading file to given path
			
			if ($user->save()) {
				Session::flash('alert-success', 'success');
				return Redirect::back()->with('success', 'Your profile photo has been updated.');
			}
			else
			{
				Session::flash('alert-warning', 'warning');
				return Redirect::back()->with('fail', 'Your profile photo has not been updated.');
			}
		}

		
	}

}
