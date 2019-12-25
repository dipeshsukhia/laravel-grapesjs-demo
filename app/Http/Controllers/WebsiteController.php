<?php

namespace App\Http\Controllers;

use App\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Website::all();
        return view('sitelist', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Website $website
     * @return \Illuminate\Http\Response
     */
    public function show(Website $website)
    {
        return view('siteview', compact('website'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Website $website
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Website $website)
    {
        return view('site', compact('website'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Website $website
     * @return string
     */
    public function update(Request $request, Website $website)
    {
        $data = $request->all();
        $data['html']['html'] = $request->input('raw-html');
        $data['html']['css'] = $request->input('raw-css');
        $website->update($data);
        return 'true';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Website $website
     * @return \Illuminate\Http\Response
     */
    public function destroy(Website $website)
    {
        //
    }
}
