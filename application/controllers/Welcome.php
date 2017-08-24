<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		require 'vendor/autoload.php'; // include Composer's autoloader
		$client = new MongoDB\Client("mongodb://localhost:27018/hp2i_bdfood");
		$result = $client->hp2i_bdfood->hishabs->find();
		foreach ($result as $entry) {
		    echo $entry['_id'], ': ', $entry['client'], "\n";
		}
	}
}
