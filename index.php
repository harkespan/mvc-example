<?php 
	/**
	 * Bootstrap page
	 * Require file autoload dari vendor
	 */
	require_once __DIR__ . '/vendor/autoload.php';
	use Controllers\Mahasiswa;

	/**
	 * Buat objek dari kelas Mahasiswa
	 */
	$controller = new Mahasiswa();
	

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