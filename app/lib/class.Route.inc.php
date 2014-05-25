<?php

include_once 'controller/Filters.php';
include_once 'controller/AFC.php';

class Route {
	static public function run() {
		$controller = explode('/', $_SERVER['REQUEST_URI']);
		$class      = ucfirst($controller[1]);
		$obj        = new $class;
		$data = file_get_contents("php://input");
		$param = isset($controller[2]) ? $controller[2] : null;

		if ($_SERVER['REQUEST_METHOD'] == 'GET') {
			$obj->show($param);
		}
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$obj->create($data);
		}
		if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
			$obj->delete($data);
		}
		if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
			$obj->update($data, $param);
		}

	}
}


?>