<?php

namespace App\Http\Controllers;

class UserInfoController extends Controller {

	public function index() {

		$users = array(
			[
				'name' => 'Hafizur rahman',
				'email' => 'hafizur@gmail.com',
			],
			[
				'name' => 'Kamran khan',
				'email' => 'kamran@gmail.com',
			],
		);
		return view('user', compact('users'));
		//return view('user', $data);
	}

}
