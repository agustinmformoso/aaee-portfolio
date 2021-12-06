<?php

namespace App\Http\Controllers;

use App\Models\Rrss;
use Illuminate\Http\Request;


class RrssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $data = $request->all();

        $rrss = Rrss::create([
            'facebook_url' => $data['facebook_url'],
            'twitter_url' => $data['twitter_url'],
            'github_url' => $data['github_url'],
            'user_id' => intval($data['user_id']),
        ]);

        $rrss->save();

        return redirect()->to('actions')->with('status', 'Redes Sociales Creadas con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rrss $rrss)
    {
        $rrss->update($request->all());

        return redirect()->to('actions')->with('status', 'Redes sociales modificadas con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rrss $rrss)
    {
        $id = $rrss->user_id;

        $rrss = Rrss::find($rrss->id);
        $rrss->delete();

        return redirect()->to('user/' . $id . '/edit')->with('danger', 'Habilidad Borrada');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyUser(Request $request, Rrss $rrss)
    {
        $id = $request->route('id');

        $rrss = Rrss::find($id);
        $rrss->delete();

        return redirect()->to('actions')->with('danger', 'Habilidad Borrada');;
    }
}
