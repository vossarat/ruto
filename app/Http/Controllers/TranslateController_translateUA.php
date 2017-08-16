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
			'LangTo'=>'kk',
			'Subject'=>'**',
			'SrcTxt'=> $textrus,
			'Translate'=>'++%D0%9F%D0%B5%D1%80%D0%B5%D0%B2%D0%BE%D0%B4+++',
			'DlgLang'=>'ru',
			'hide_lang'=>'ru+uk+kk+en',
		];
		
		$request = new Client(['base_uri' => 'http://online.translate.ua/']);
		$response = $request->post('/ru?h=420&w=600&url=www.translate.ua&count_show=1', [
				'headers' => [
					'User-Agent' => 'Mozilla/5.0 (Windows NT 5.1; rv:52.0) Gecko/20100101 Firefox/52.0',
					'Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
					'Accept-Language' => 'ru-RU,ru;q=0.8,en-US;q=0.5,en;q=0.3',
					'Accept-Encoding' => 'gzip, deflate',
					'Referer' => 'http://online.translate.ua/ru?h=420&w=600&url=www.translate.ua&count_show=1',
					'Cookie' => 'LangTo=kk; LangFrom=ru; def_lang=ru+uk+kk+en; __atuvc=9%7C31%2C25%7C32%2C3%7C33; __utma=188194487.170339271.1501946720.1501992730.1502602513.3; __utmz=188194487.1502602513.3.2.utmcsr=translate.ua|utmccn=(referral)|utmcmd=referral|utmcct=/ru/on-line; dev_mode=full; PHPSESSID=rms5qf87m7ju4aggqbm4685h57; ref=translate.ua; __atuvs=598fe50d419c11ad002; __utmb=188194487.3.10.1502602513; __utmc=188194487; __utmt=1',
					'Content-Type' => 'application/x-www-form-urlencoded',
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