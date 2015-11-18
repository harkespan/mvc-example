<?php 
	//bootstrap page
	//load class controller terlebih dahulu
	include_once("controllers/Controller.php");
	
	//buat objek dari class controller
	$controller = new Controller();

	//tentukan bagaimana halaman akan di-load
	if(!isset($_GET['act']))
	{
		//pemanggilan method yang akan di-run
		$controller->index();
	}
	else
	{
		switch($_GET['act'])
		{
			case 'home' : 
				$controller->index();
				break;
			
			case 'simpan' :
				$controller->save();
				break;

			case 'tampil-data' :
				$controller->show_data();
				break;

			default : 
				$controller->index();
				break;
		}
	}

?>