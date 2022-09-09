<?php
	/*
		PROSES KREDENSIAL
		Umumnya menggunakan JWT. Untuk kali ini, kita pakai "seakan-akan" ini JWT (padahal bukan), lain kali kita bahas JWT.
	*/
		$key = "kunci";

		// Ini ceritanya isi database, sementara pakai array asosiatif dulu.
		$dummy_user = array(
			array(
				"username" => "user",
				"password" => "pswd"
			),
			array(
				"username" => "admin",
				"password" => "admin"
			),
		);

		$list_user = $dummy_user;

		$exploded_credential = explode(";", $cred);

		foreach ($list_user as $users) {
			if ($exploded_credential[0] == $users["username"] && $exploded_credential[1] == $users["password"] && $exploded_credential[2] == $key) {
				$credentials = true;
				break;
			}
		}