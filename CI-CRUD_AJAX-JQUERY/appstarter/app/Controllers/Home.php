<?php

namespace App\Controllers;

use App\Models\testingModel;

class Home extends BaseController
{
	protected $dummyModel;
	public function __construct()
	{
		$this->dummyModel = new testingModel();
	}

	public function index()
	{
		return view('welcome_message');
	}

	public function getData($limit)
	{
		// $data = $this->dummyModel->findAll();
		$db = \Config\Database::connect();
		$getData = $db->query('SELECT * FROM `dummy_table` ORDER BY `id` DESC LIMIT ' . $limit);
		// dd($getData->getResultArray());
		echo json_encode($getData->getResultArray());
	}
}
