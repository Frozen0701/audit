<?php
Class WAIT_ECHO {
	private $vars = array();


	public function show(&$var)
	{
		$key = 'WAIT_ECHO_'.microtime();
		$this->vars[$key] = &$var;
		echo $key;
	}

	public function __destruct()
	{
		$content = ob_get_clean();
		foreach($this->vars as $key => $value)
		{
			$content = str_replace($key, $value, $content);
		}
		echo $content;
	}
}
?>
