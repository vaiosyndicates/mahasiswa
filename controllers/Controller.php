<?php
include_once("models/Model.php");

class Controller {
	public $model;
	
	public function __construct()  
    {  
        $this->model = new Model();

    } 
	
	public function index()
	{
		require_once('views/index.php');
	}

	function save()
	{
		$nik =  $_POST['nim'];
		$nama = $_POST['nama'];

		//penyimpanan data ke model
		$this->model->simpanData($nik,$nama);
		$this->index(); //controller dikembalikan ke method index setelah selesai mengakses method ini.
	}

	function show_data()
	{
		if(!isset($_GET['i']))
		{
			//jika tidak ada parameter id yang dikirim, maka akan menampilkan semua data yang ada
			$rs = $this->model->lihatData();
			require_once('views/list.php');
		}
		else
		{
			//ada parameter id yang dikirim, tampilkan detail dari salah satu data yang dipilih
			$rs = $this->model->lihatDataDetail($_GET['i']);
			require_once('views/detail.php');
		}
	}
	
	// coba resfull get data
	function coba_json(){
		$products = array();
		$products["body"] = array();
		$products["status"] = "00";
		$rs = $this->model->lihatData();
		foreach ($rs as $v){
			$p  = array(
				  "id" => $v['id'],
				  "nim" => $v['nim'],
				  "nama" => $v['nama'],
			);

			array_push($products["body"], $p);
		}
		header("Content-Type: application/json; charset=UTF-8");
		echo json_encode($products);
	}

}

?>