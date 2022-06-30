<?php
	namespace Core;
	
	class Controller
	{
		protected $layout = 'default';
		
		protected function render($view, $data = []) {
            var_dump('tyt');
			return new Page($this->layout, $this->title, $view, $data);
		}
	}
