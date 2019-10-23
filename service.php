<?php

class Service
{
	/**
	 * Main function
	 *
	 * @param Request
	 * @param Response
	 *
	 * @throws \Exception
	 */
	public function _main(Request $request, Response $response)
	{
		Challenges::complete('read-terminos', $request->person->id);

		$response->setCache("month");
		$response->setTemplate("home.ejs");
	}
}
