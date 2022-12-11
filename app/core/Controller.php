<?php

trait Controller
{
	protected $views = "../app/views/";
	protected $templates = "../app/views/template/";
	protected $allowedViews = [
		'landing',
		'login',
		'signup'
	];

	protected $restrictedViews = [
		'home',
		'adopt',
		'publish',
		'post',
		'mypost',
		'myprofile',
		'editmypost'
	];

	protected function renderView($name, $data)
	{
		if (!empty($data)) {
			extract($data);
		}
		$viewname = $this->views . $name . ".view.php";

		if (isset($data['header']) && isset($data['footer'])) {
			$header = $this->templates . $data['header'] . ".php";
			$footer = $this->templates . $data['footer'] . ".php";
			if (file_exists($header) && file_exists($viewname) && file_exists($viewname)) {

				require $header;
				require $viewname;
				require $footer;
			}
		} else if (file_exists($viewname)) {
			require $viewname;
		}
	}

	public function view($name, $data = [])
	{
		if (in_array($name, $this->allowedViews)) {
			$this->renderView($name, $data);
		} else {
			if (in_array($name, $this->restrictedViews)) {
				if (isUserLogIn()) {
					$this->renderView($name, $data);
				} else {
					$this->renderView('403', "");
				}
			} else {
				$this->renderView('404', "");
			}
		}
	}
}
