<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ApiSearchController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $lang = 'en')
    {
        App::setLocale($lang);
        $data   = $request->all();
        $result = [];
        
        $hasResult = false;
        $testLatLog = 0;
        if (!empty($data['lang'])) {
            $hasResult = true;
            $result    = $this->callApiSns($data);
            $testLatLog = !empty($data['test_lat']) ? $data['test_lat'] : 0;
        }
        return view('api', compact('lang', 'result', 'hasResult', 'data', 'testLatLog'));
    }

    /**
     * handle search
     * @param  Request $request
     * @param  string  $lang
     * @return view
     */
    public function handleSearch(Request $request, $lang = 'en')
    {
        App::setLocale($lang);
        $data   = $request->all();
        $result = $this->callApiSns($data);
        return view('api.result')->with('data', $result)->with('lang', $lang);
    }

    /**
     * call api
     * @param  array $data
     * @return array
     */
    public function callApiSns($data)
    {
        unset($data['_token']);
        unset($data['range']);
        unset($data['cordinates_mode']);
        // unset($data['input_coordinates_mode']);
        // unset($data['freeword_condition']);
        // https://api.gnavi.co.jp/ForeignRestSearchAPI/20150630/format=json&keyid=81ba6f93a9a519e396968467395a79aa&format=json&keyid=81ba6f93a9a519e396968467395a79aa&freeword=&lang=en&input_coordinates_mode=1&freeword_condition=1&hit_per_page=10&sort=1&longitude=139.75992&latitude=35.673092
        if(!empty($data['test_lat'])) {
            $data['latitude']  = '35.673092';
            $data['longitude'] = '139.75992';
            unset($data['test_lat']);
        }
        $client            = new \GuzzleHttp\Client();
        $format            = "json";
        $url               = 'https://api.gnavi.co.jp/ForeignRestSearchAPI/20150630/';
        $param             = '?format=json&keyid=7c73b0efb220a06cb45056d67c471826';
        $param             = '?format=json&keyid=81ba6f93a9a519e396968467395a79aa';
        foreach ($data as $key => $value) {
            $param .= '&' . $key . '=' . $value;
        }
        $url           .=  $param;
        $response      = $client->request('GET', $url);
        $result        = json_decode($response->getBody()->getContents(), true);
        $result['url'] = route('api', ['lang' => $data['lang']]) . $param;
        return $result;
    }
}
