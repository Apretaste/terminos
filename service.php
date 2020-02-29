<?php

use Apretaste\Request;
use Apretaste\Response;
use Apretaste\Challenges;

class Service
{
	/**
	 * Main function
	 *
	 * @param \Apretaste\Request  $request
	 * @param \Apretaste\Response $response
	 *
	 * @throws \Framework\Alert
	 */
	public function _main(Request $request, Response $response)
	{
	  Challenges::complete('read-terminos', $request->person->id);

	  $response->setCache("month");
		$response->setTemplate("home.ejs");
	}
}

