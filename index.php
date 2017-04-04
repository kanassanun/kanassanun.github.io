<?php 
	if(isset($_GET['action'], $_GET['data'])){
		$data = $_GET['data'];
		switch($_GET['action']){
			case 'uuid':
				exit(file_get_contents('https://api.mojang.com/users/profiles/minecraft/' . $data));
				break;
			case 'skin':
				header('Content-type: image/png');
				echo file_get_contents('https://mcapi.ca/rawskin/' . $data);
				break;
			default:
				echo 'FUCK';
				break;
		}
	}
?>