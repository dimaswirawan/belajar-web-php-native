<?php
	$get_page = isset($_GET['page']) ? $_GET['page'] : false;
	$get_modul = isset($_GET['modul']) ? $_GET['modul'] : false;
	if ($get_modul != false && $get_page != false) {
		$file = "./app/web/modul/".$get_modul."/".$get_page.".php";
		if (file_exists($file)) {
			require $file;
		}else{
			echo "404 - File tidak ditemukan";
		}
	}else{
		echo "500 - Metode pemanggilan salah";
	}