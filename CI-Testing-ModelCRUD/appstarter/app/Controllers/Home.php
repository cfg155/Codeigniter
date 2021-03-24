<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
	protected $userModel;
	public function __construct()
	{
		$this->userModel = new UserModel();
	}

	public function index()
	{
		$user = $this->userModel->findAll();
		$data = [
			'title' => 'CRUD Home',
			'userData' => $user
		];

		return view('home', $data);
	}

	public function detail($id)
	{
		$findSingleRow = $this->userModel->find($id);
		$data =
			[
				'title' => 'Detail Page',
				'userData' => $findSingleRow
			];

		return view('detail', $data);
	}

	public function insert()
	{
		$newData = $this->request->getVar();
		$this->userModel->insert($newData);
		return redirect()->route('/');
	}
}
