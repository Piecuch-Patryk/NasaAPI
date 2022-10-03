<?php

namespace App\Http\Controllers;

use App\Models\Apod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('apods.index', ['apods' => Apod::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apod  $apod
     * @return \Illuminate\Http\Response
     */
    public function show(Apod $apod)
    {
        $apiResponse = $this->apiQuery($apod);

        return view('apods.show', [
            'apod' => $apod,
            'apiResponse' => $apiResponse,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apod  $apod
     * @return \Illuminate\Http\Response
     */
    public function edit(Apod $apod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apod  $apod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apod $apod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apod  $apod
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apod $apod)
    {
        //
    }

    /**
     * Make query to external API
     * 
     * @param  \App\Models\Apod  $apod
     * @return array $array 
     */

    private function apiQuery(Apod $apod) {
        $response = Http::withOptions([
            'verify' => false
            ])
            ->get($apod->url, [
            'api_key' => $apod->apiKey,
        ]);

        return json_decode($response->body());
    }
}
