<?php

trait Controller
{

	public function view($name, $data = [])
	{
		if (!empty($data)) {
			extract($data);
		}

		$viewname = "../app/views/" . $name . ".view.php";

		if (isset($data['header']) && isset($data['footer'])) {
			$header = "../app/views/template/" . $data['header'] . ".php";
			$footer = "../app/views/template/" . $data['footer'] . ".php";
			if (file_exists($header) && file_exists($viewname) && file_exists($viewname)) {

				require $header;
				require $viewname;
				require $footer;
			}
		} else if (file_exists($viewname)) {
			require $viewname;
		} else {
			$viewname = "../app/views/404.view.php";
			require $viewname;
		}
	}
}
