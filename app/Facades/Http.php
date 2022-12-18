<?php

namespace App\Facades;

use GuzzleHttp\Client;

class Http
{
    private static $client;

	public static function get($url, $query = "", $headers= "")
    {
		self::startConditions();
        $response = self::getResponse($url, $query, $headers);
        return self::getResponseContents($response);
    }

	private static function startConditions()
	{
		if(empty(self::$client)){
			self::$client = new Client();		
		}
	}

	private static function getResponse($url, $query, $headers)
	{
        if (empty($headers)){
            $headers = [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ];
        }
		$options = [
			'headers' => $headers,
			'query' => $query
		];
		return self::$client->get($url, $options);
	}

	private static function getResponseContents($response)
	{
		$contents = $response->getBody()->getContents();
		return json_decode($contents);
	}
}