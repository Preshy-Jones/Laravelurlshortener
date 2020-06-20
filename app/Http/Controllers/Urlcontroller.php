<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\URLShort;

class Urlcontroller extends Controller
{
    public function short(Request $request)
    {
        //        dd($request->all());
        $url = URLShort::whereUrl($request->url)->first();

        if ($url == null) {
            $short = $this->generateShortURL();
            URLShort::create([
                'url' => $request->url,
                'short' => $short
            ]);    

            $url = URLShort::whereUrl($request->url)->first();
        }
        return view('url.short_url', compact('url'));
    }

    public function shortLink($link){
        $url = URLShort::whereShort($link)->first();
        return redirect($url->url);
    }

    public function generateShortURL(){
        $result = base_convert(rand(100, 99999), 10, 36);
        $data = URLShort::whereShort($result)->first();

        if ($data != null) {
            $this->generateShortURL();
        }

            


        return $result;
    }
}
