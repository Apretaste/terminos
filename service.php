<?php

use Apretaste\Request;
use Apretaste\Response;

class Service
{
	/**
	 * General tab
	 *
	 * @param Request $request
	 * @param Response $response
	 * @throws Alert
	 * @author salvipascual
	 */
	public function _main(Request $request, Response $response)
	{
		$response->setCache();
		$response->setComponent('General');
	}

	/**
	 * Pizarra tab
	 *
	 * @param Request $request
	 * @param Response $response
	 * @throws Alert
	 * @author salvipascual
	 */
	public function _pizarra(Request $request, Response $response)
	{
		$response->setCache();
		$response->setComponent('Pizarra');
	}

	/**
	 * Influencers tab
	 *
	 * @param Request $request
	 * @param Response $response
	 * @throws Alert
	 * @author salvipascual
	 */
	public function _influencers(Request $request, Response $response)
	{
		$response->setCache();
		$response->setComponent('Influencers');
	}
}
