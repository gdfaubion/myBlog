<?php
class ContactController extends BaseController {

	//Contact Form
	public function getContactUsForm(){

		//Get all the data and store it inside Store Variable
		$data = Input::all();
		
		Mail::send('emails.contact', array('full_name' => Input::get('full_name'), 'phone_number' => Input::get('phone_number'), 'company_name' => Input::get('company_name'), 'email' => Input::get('email'), 'body' => Input::get('message')), function($message)
		{

			$message->to('gdfaubion@gmail.com', 'Grace')->subject('Test Email');
		});
		$posts = Post::all();

		return View::make('home')->with('posts', $posts);

	}

}
?>