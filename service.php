<?php

use Apretaste\Request;
use Apretaste\Response;

class Service
{
	/**
	 * Main function
	 *
	 * @param Request
	 * @param Response
	 */
	public function _main(Request $request, Response $response)
	{
		$response->setCache("month");
		$response->setTemplate("home.ejs");
	}
}
