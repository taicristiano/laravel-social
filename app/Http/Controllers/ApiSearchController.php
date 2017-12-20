<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function index()
    {
        return view('api');
    }

    public function handleSearch(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        unset($data['text']);
        unset($data['range']);
        unset($data['cordinates_mode']);
        // unset($data['input_coordinates_mode']);
        // unset($data['freeword_condition']);
        $data['latitude'] = '35.673092';
        $data['longitude'] = '139.75992';
        $client = new \GuzzleHttp\Client();
        $format= "json";
        $url = 'https://api.gnavi.co.jp/ForeignRestSearchAPI/20150630/';
        $param = '?format=json&keyid=7c73b0efb220a06cb45056d67c471826';
        $param = '?format=json&keyid=81ba6f93a9a519e396968467395a79aa';
        foreach ($data as $key => $value) {
            $param .= '&' . $key . '=' . $value;
        }
        // var_dump($param);die;
        $url .=  $param;
        // var_dump($url);die;
        // var_dump($url);die;
        // var_dump($url);die;
        // $url ='https://api.gnavi.co.jp/ForeignRestSearchAPI/20150630/?keyid=7c73b0efb220a06cb45056d67c471826&format=json';
        $response = $client->request('GET', $url);
        // echo $res->getStatusCode();
        // 200
        // echo $response->getHeaderLine('content-type');
        // 'application/json; charset=utf8'
        // echo $response->getBody();
        $result = json_decode($response->getBody()->getContents(), true);

        // var_dump($res->getBody());die;
        // var_dump($result['rest']);die;
        $isEmpty = false;
        if (!empty($result['rest'])) {
            $isEmpty = true;
        }
        return view('api.result')->with('data', $result);
    }
}
