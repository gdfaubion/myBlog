<?php
class ContactController extends BaseController {

	//Server Contact view:: we will create view in next step
	public function getContact(){

		return View::make('contact');
	}

	//Contact Form
	public function getContactUsForm(){

		//Get all the data and store it inside Store Variable
		$data = Input::all();
		// //Validation rules
		// $rules = array (
		// 'full_name' => 'required|alpha',
		// 'email' => 'required|email',
		// 'message' => 'required|min:25'
		// );

		// //Validate data
		// $validator = Validator::make ($data, $rules);

		// //If everything is correct than run passes.
		// if ($validator -> passes()){

		//Send email using Laravel send function
		Mail::send('emails.contact', $data, function($message) use ($data)
		{
		//email 'From' field: Get users email add and name
		// $message->from($data['email'] , $data['full_name']);
		//email 'To' field: change this to emails that you want to be notified. 
		$message->to('gdfaubion@gmail.com', 'Grace Faubion')->subject('contact request');

		});
	
		return view::make('home');

	// }else{
	// 	//return contact form with errors
	// 	return Redirect::back()->withErrors($validator);


	// 	}

	}

}
?>