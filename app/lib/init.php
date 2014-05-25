<?php

include_once implode(DIRECTORY_SEPARATOR, array(__DIR__, '..', 'etc', 'config.php'));

foreach ($config as $name => $value) {
	define($name, $value);
}

function __autoload($class) {
	$filename = implode(DIRECTORY_SEPARATOR, array(__DIR__, '..', 'lib', 'class.' . $class . '.inc.php'));
	if (file_exists($filename)) {
		include_once $filename;
	}
}

?>