<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class TranslateController extends Controller{
	public function translated($textrus)
	{		
		$formParams = [
			'srctext' => $textrus,
			'desttext' => '',
			'from' => 'Rus',
			'into' => 'Kaz',
			'codepage' => 1,
		];
		
		$request = new Client(['base_uri' => 'http://www.sanasoft.kz/']);
		$response = $request->post('online/translater/', [
				'headers' => [
					'Host' =>	'www.sanasoft.kz',
					'User-Agent' =>	'Mozilla/5.0 (Windows NT 5.1; rv:52.0) Gecko/20100101 Firefox/52.0',
					'Accept' =>	'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
					'Accept-Language' =>	'ru-RU,ru;q=0.8,en-US;q=0.5,en;q=0.3',
					'Accept-Encoding' =>	'gzip, deflate',
					'Referer' =>	'http://www.sanasoft.kz/online/translater/',
					'Cookie' =>	'has_js=1; __utma=47603749.1986082974.1502699935.1502699935.1502699935.1; __utmb=47603749.7.10.1502699935; __utmc=47603749; __utmz=47603749.1502699935.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none); __utmt=1',
					'Upgrade-Insecure-Requests' =>	1,
					'Content-Type' =>	'application/x-www-form-urlencoded',
				],
				'form_params' => $formParams,
			]);		
		
		$contents = $response->getBody()->getContents();
		
		$crawler = new Crawler($contents);		
			
		$textkaz = $crawler->filter('textarea')->last()->text();
		
		echo $textkaz;	
	}
}


// http://audaru.kz/ http://kaz-perevod.ak-sakal.ru