<?php

use Apretaste\Request;
use Apretaste\Response;
use Apretaste\Tutorial;
use Apretaste\Challenges;

class Service
{
	/**
	 * General terms of service for the app
	 *
	 * @param Request
	 * @param Response
	 */
	public function _main (Request $request, Response $response)
	{
		// complete challenge
		Challenges::complete('read-terminos', $request->person->id);

		// complete tutorial
		Tutorial::complete($request->person->id, 'read_terms');

		// send data to the view
		$response->setCache('month');
		$response->setTemplate("home.ejs");
	}

	/**
	 * Terms of service for service Pizarra
	 *
	 * @param Request
	 * @param Response
	 */
	public function _pizarra (Request $request, Response $response)
	{
		$response->setCache('month');
		$response->setTemplate("pizarra.ejs");
	}

	/**
	 * Terms of service for the influencers
	 *
	 * @param Request
	 * @param Response
	 */
	public function _influencers (Request $request, Response $response)
	{
		$response->setCache('month');
		$response->setTemplate("influencer.ejs");
	}
}
