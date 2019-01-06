<?php

class Service
{
	/**
	 * Main function
	 *
	 * @param Request
	 * @return Response
	 */
	public function _main(Request $request, Response &$response)
	{
		$response->setCache("month");
		$response->createFromTemplate("home.tpl", []);
	}
}
