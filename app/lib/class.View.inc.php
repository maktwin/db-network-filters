<?php

class View {
	private $_path;
	private $_template;
	private $_var = array();

	public function __construct() {
		$this->_path = implode(DIRECTORY_SEPARATOR, array(__DIR__, '..', 'tpl'));
	}

	public function __get($name) {
		if (isset($this->_var[$name])) return $this->_var[$name];
		return '';
	}

	public function set($name, $value) {
		$this->_var[$name] = $value;
	}

	public function render($template) {
		$this->_template = $this->_path . DIRECTORY_SEPARATOR . $template;
		if (!file_exists($this->_template)) die('File not exists ' . $this->_template);

		include($this->_template);
	}

}

?>