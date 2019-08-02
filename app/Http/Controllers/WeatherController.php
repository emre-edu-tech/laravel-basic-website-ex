<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cache;
use Log;

class WeatherController extends Controller
{

    public function index(Request $request){

    	$app_id = config("here.app_id");
		$app_code = config("here.app_code");
		// $lat = config("here.lat_default");
		// $long = config("here.long_default");
		// $url = "https://weather.api.here.com/weather/1.0/report.json?product=forecast_7days&latitude=".$lat."&longitude=".$long."&observation=true&language=tr&app_id=".$app_id."&app_code=".$app_code;
		if(empty($request->has('search'))){
			$search = 'izmir';
		}else{
			$this->validate($request, [
    			'search' => 'min:3',
    		]);
    		$search = $request->input('search');
		}
		$url = "https://weather.api.here.com/weather/1.0/report.json?product=forecast_7days&name=".$search."&observation=true&language=tr&app_id=".$app_id."&app_code=".$app_code;
		$client = new \GuzzleHttp\Client();
		$response = $client->get($url);
		if ($response->getStatusCode() == 200) {
			$json_response = $response->getBody();
			$json_object = json_decode($json_response);
			$forecast = $json_object->forecasts->forecastLocation;
		}

		return view('weather.index', ['forecast' => $forecast]);
    }
}
