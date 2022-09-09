<?php
	$proses = isset($_GET['proses']) ? $_GET['proses'] : false;
	$modul = isset($_GET['modul']) ? $_GET['modul'] : false;
	$version = isset($_GET['version']) ? $_GET['version'] : false;
	$method = isset($_GET['method']) ? $_GET['method'] : false;

	if ($proses != false) {
		// Memproses Data
		$cek_file_page = "./app/backend/modul/".$modul."/".$proses.".php";
		if (file_exists($cek_file_page)) {
			require $cek_file_page;
		}else{
			echo $cek_file_page;
			echo "Perintah proses tidak ditemukan";
		}
	}else{
		// Berkomunikasi dengan API
		if ($modul != false && $version != false && $method != false) {
			$cek_file_page = "./app/api/modul/".$modul."/".$version."/".$method.".php";
			if (file_exists($cek_file_page)) {
				require $cek_file_page;
			}else{
				echo "Perintah tidak ditemukan";
			}
		}else{
			echo "Perintah yang diminta salah";
		}

	}