<?php

class Controller {


	public $load;
	public $model;


	function __construct($pageURI = null)
	{

		$this->load = new Load();
		$this->model = new Model();
		$this->$pageURI();
	}

	function home()
	{

		$data = $this->model->model3D_info();

		$this->load->view('view3DApp',$data);
	}

	function apiCreateTable()
	{
		$data = $this->model->dbCreateTable();

		$this->load->view('viewMessage',$data);
	}

	function apiInsertData()
	{
		$data = $this->model->dbInsertData();

		$this->load->view('viewMessage',$data);
	}

	function apiGetData()
	{
		$data = $this->model->dbGetData();

		$this->load->view('view3DAppdata',$data);
	}

	function dbCreateTable()
	{
		echo "Create";
	}

	function dbInsertData()
	{
		echo "Insert";
	}

	function dbGetData()
	{
		echo "Get data";
	}

}
?>
