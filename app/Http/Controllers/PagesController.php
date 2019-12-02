<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex() {
		return view('pages.welcome');
	}
	public function getAbout(){
		$first = "Vahagn";
		$last = "Ivanyan";

		$fullname = $first . " " . $last;
		$email = "vahagnivanyan@email.com";
		$data = [];
		$data['fullname'] = $fullname;
		$data['email'] = $email;
		//return view('pages.about')->withFullname($fullname)->withEmail($email);
		return view('pages.about')->withData($data);
	}
	public function getContact(){
		return view('pages.contact');
	}
	#public function postContact(){
	#
	#}
}
?>