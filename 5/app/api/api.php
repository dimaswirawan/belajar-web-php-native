<?php
	header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
	header('Access-Control-Max-Age: 1000');
	header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
	header('Content-Type: application/json');
	$response = array();

	$modul = isset($_GET['modul']) ? $_GET['modul'] : false;
	$version = isset($_GET['version']) ? $_GET['version'] : false;
	$method = isset($_GET['method']) ? $_GET['method'] : false;

	$auth = isset($_GET['auth']) ? $_GET['auth'] : false;

	$credentials = false;
	require PATH_BACKEND_CREDENSIAL_TES;

	if ($modul != false && $version != false && $method != false) {
		$cek_file_page = "./app/api/modul/".$modul."/".$version."/".$method.".php";
		if (file_exists($cek_file_page)) {
			$response["status"] = 200;
			$response["message"] = "Success";

			require $cek_file_page;
		}else{
			$response["status"] = 500;
			$response["message"] = "Masukan perintah sesuai aturan.";
			$response["error"] = "Perintah tidak ditemukan";
		}
	}else{
		$response["status"] = 404;
		$response["message"] = "Masukan perintah sesuai aturan.";
		$response["error"] = "Perintah yang dimasukan salah.";
	}

	echo json_encode($response, JSON_PRETTY_PRINT);