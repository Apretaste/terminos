<?php

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
