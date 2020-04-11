<?php

namespace App\Http\Controllers;

use App\topic;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
        //
        $ps1 = $request['password1'];
        $ps2 = $request['password2'];
        $password = '';
        if ($ps1 == $ps2) {
            $password = Hash::make($ps1);
        }
        $user = new User([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $password,
            'group' => $request['group'],
            'depart' => $request['depart']
        ]);
        //var_dump($request['name'], $request['email'], $request['group'], $request['depart']);
        //var_dump($user->name, $user->email, $user->group, $user->depart, $user->password);
        $status = $user->save();
        return view('/welcome', compact('status'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function edit(topic $topic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, topic $topic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy(topic $topic)
    {
        //
    }
}
