<?php
	/* 
		Menangkap "variabel get" dengan key request.
			value yang diterima :
			- web
			- api
			- backend

		Kita membuat variable route, untuk menampung value diatas.

		Jika tidak ada variabel get dengan key request, maka secara default, variable route, berisi string web.
	*/
	$route = isset($_GET['request']) ? $_GET['request'] : "web"; // menangkap variabel get dengan isset, jika tidak ada variable get dengan key request, maka output nya string.

	if ($route == "api") { // menguji jika variabel route berisi api
		require './api/api.php'; // memanggil file yang ada di folder api, dengan file api.php
	}elseif ($route == "web") { // menguji jika variabel route berisi web
		require './web/web.php'; // memanggil file yang ada di folder web, dengan file web.php
	}elseif ($route == "backend") { // menguji jika variabel route berisi backend
		require './api/backend.php'; // memanggil file yang ada di folder backend, dengan file backend.php
	}

	/*
		NOTE :
		Belajar :
		- Penulisan variabel
		- Isset
		- Variabel Get
		- Pengujian (if else elseif)
		- Require
	*/