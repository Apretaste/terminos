<?php

use Apretaste\Request;
use Apretaste\Response;
use Apretaste\Challenges;

class Service
{
	/**
	 * General terms of service for the app
	 *
	 * @param Request
	 * @param Response
	 */
	public function _main(Request $request, Response $response)
	{
		Challenges::complete('read-terminos', $request->person->id);

		$response->setCache('month');
		$response->setTemplate("home.ejs");
	}

	/**
	 * Terms of service for service Pizarra
	 *
	 * @param Request
	 * @param Response
	 */
	public function _pizarra(Request $request, Response $response)
	{
		$response->setCache('month');
		$response->setTemplate("pizarra.ejs");
	}
}
