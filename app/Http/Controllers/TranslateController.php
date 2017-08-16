<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class TranslateController extends Controller{
	public function translated($textrus)
	{
		$formParams = [
			'LangFrom' => 'ru',
			'LangTo' => 'kk',
			'Subject' => '**',
			'SrcTxt' => $textrus,
			'Translate' => '%D0%9F%D0%B5%D1%80%D0%B5%D0%B2%D0%BE%D0%B4',
			'DlgLang' => 'ru',
			'hide_lang' => 'ru uk en kk',
		];
		
		$request = new Client(['base_uri' => 'http://online.translate.ua']);
		$response = $request->post('/ru?h=420&w=600&url=www.translate.ua&count_show=1', [
				'headers' => [
					'Host' =>	'online.translate.ua',
					'User-Agent' =>	'Mozilla/5.0 (Windows NT 5.1; rv:52.0) Gecko/20100101 Firefox/52.0',
					'Accept' =>	'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
					'Accept-Language' =>	'ru-RU,ru;q=0.8,en-US;q=0.5,en;q=0.3',
					'Accept-Encoding' =>	'gzip, deflate',
					'Referer' =>'http://online.translate.ua/ru?h=420&w=600&url=www.translate.ua&count_show=1',
					'Cookie' =>	'dev_mode=full; PHPSESSID=3mttvdd79hac34skibul0sgpb3; ref=translate.ua; LangTo=af+; LangFrom=Detect; def_lang=uk+en+kk; __atuvc=3%7C33; __atuvs=59926e0a1d439367002; __utma=188194487.281918734.1502768652.1502768652.1502768652.1; __utmb=188194487.3.10.1502768652; __utmc=188194487; __utmz=188194487.1502768652.1.1.utmcsr=translate.ua|utmccn=(referral)|utmcmd=referral|utmcct=/ru/on-line; __utmt=1',
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