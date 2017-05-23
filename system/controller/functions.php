<?php 

function add_header($title){
	include dirname(__DIR__)  . '/view/common/header.php';
}
function add_footer(){
	include dirname(__DIR__) . '/view/common/footer.php';
}

function initializer(){
	if (isset($_SESSION['usuario_id'])) {
		if (isset($_GET['view'])) {
			switch ($_GET['view']) {
				case 'cliente':
					include 'system/view/index.php';
					break;		
				default:
					include 'system/view/index.php';
					break;
			}
		}else{
			include 'system/view/index.php';
		}
	}else{
		if (isset($_GET['view'])) {
			switch ($_GET['view']) {
				case 'login':
					include 'system/view/login.php';
					break;		
				default:
					include 'system/view/login.php';
					break;
			}
		}else{
			include 'system/view/login.php';
		}
	}
}
?>