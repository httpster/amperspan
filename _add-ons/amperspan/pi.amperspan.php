<?php
class Plugin_amperspan extends Plugin {

	var $meta = array(
		'name'       => 'Amperspan',
		'version'    => '1.0',
		'author'     => 'Brandon Haslip',
		'author_url' => 'http://brandonhaslip.com'
		);

	public function index() {

		$amperspan_tag = $this->fetch('amperspan_tag');
		$amperspan_class = $this->fetch('amperspan_class');

		$this->content = Parse::template($this->content, Statamic_View::$_dataStore, 'Statamic_View::callback');
		$this->content = preg_replace('/\s(&)\s/', ' <'.$amperspan_tag.' class="'.$amperspan_class.'">&amp;</'.$amperspan_tag.'> ', rtrim($this->content));

		return $this->content;
	}

}
