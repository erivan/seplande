<?php
App::uses('AppController', 'Controller');
App::import('Vendor', 'ckan/Ckan_client');

class DatasetController extends AppController {
	public $uses = array();

	public function index() {
		return $this->redirect(array('controller'=>'Dataset', 'action'=>'newDataset'));
	}

	public function newDataset() {
		if ($this->request->is('post')) {
			$ckan = new Ckan_client('1ed4a5db-c7d6-40a7-87ff-cce900384424');
		try
		{
			$data = array(
				"name" => $this->request->data['Dataset']['name'],
				"title" => $this->request->data['Dataset']['title'],
				"url"=> $this->request->data['Dataset']['url'],
				"notes"=> $this->request->data['Dataset']['notes'],
				"tags"=> $this->request->data['Dataset']['tags'],
				"maintainer"=> $this->request->data['Dataset']['maintainer'],
				"maintainer_email"=> $this->request->data['Dataset']['maintainer_email'],
				"license_id"=> $this->request->data['Dataset']['license_id'],
				"resources"=> "[ ToBEIncremented ]"
			);

			// print_r(json_encode($data));die;
			$data = json_encode($data);
			$ckan->post_package_register($data);

		}
		catch (Exception $e)
		{
			print '<p class ="alert alert-warning"><strong>Error: ' . $e->getMessage() . 
				'</strong></p>';
		}
		unset($ckan);
		}
	}

	public function getJsonMan() {
		$json = file_get_contents('http://geo.seplande.al.gov.br/geoweb/wizard/php/file/alagoas_TaxadeincidnciadeAIDScasospor100000habitantesHomens_20140810_1918.json');		
		print_r($json);die();
	}	
	public function getJsonFem() {
		$json = $this->convertXmlToJson('http://geo.seplande.al.gov.br/geoweb/wizard/php/file/alagoas_TaxadeincidnciadeAIDScasospor100000habitantesMulheres_20140810_2113.xml');		
		print_r($json);die();
	}		
	public function getJsonTotal() {
		$json = file_get_contents('http://geo.seplande.al.gov.br/geoweb/wizard/php/file/alagoas_TaxadeincidnciadeAIDScasospor100000habitantesTotal_20140810_2113.json');
		print_r($json);die();
	}
	public function convertXmlToJson ($url) {
	    $fileJson= file_get_contents($url);
	    $fileJson = str_replace(array("\n", "\r", "\t"), '', $fileJson);
	    $fileJson = trim(str_replace('"', "'", $fileJson));
	    $xml = simplexml_load_string($fileJson);
	    $json = json_encode($xml);
        return $json;
	}	
}
