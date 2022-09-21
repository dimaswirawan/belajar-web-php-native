<?php
	$require= "./config/config.php";
	$route = isset($_GET['request']) ? $_GET['request'] : "web";


	if ($route == "api") {
		require './app/api/api.php';
	}elseif ($route == "web") {
		require './app/web/web.php';
	}elseif ($route == "backend") {
		require './app/backend/backend.php';
	}