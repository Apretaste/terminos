<?php

use Apretaste\Challenges;
use Apretaste\Request;
use Apretaste\Response;

class Service
{

	/**
	 * Main function
	 *
	 * @param  Request
	 * @param  Response
	 *
	 * @throws \Framework\Alert
	 */
	public function _main(Request $request, Response $response)
	{
		Challenges::complete('read-terminos', $request->person->id);

		$response->setCache('month');
		$response->setTemplate("home.ejs");
	}
}
