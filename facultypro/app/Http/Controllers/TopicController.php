<?php

namespace App\Http\Controllers;

use App\topic;
use App\User;
use Illuminate\Http\Request;
use App\Mail\Newlecmail;
use Illuminate\Support\Facades\Mail;

class TopicController extends Controller
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
        return view('add');
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
        //var_dump($request['lecture'], $request['secpdf'], $request['secvedio'], $request['group'], $request['depart'], $request['subject']);

        $topic = new topic([
            'lecture'=> $request['lecture'],
            'lecturedown' => $request['lecturedown'],
            'secpdf'=>$request['secpdf'],
            'secvedio'=>$request['secvedio'],
            'title'=>$request['title'],
            'group'=>intval($request['group']),
            'depart'=>intval($request['depart']),
            'subject'=>intval($request['subject'])
        ]);
        $status = $topic->save();
        $users = User::where('group', '=', $request['group'])->where('depart', '=', $request['depart'])->get();

        foreach ($users as $user) {
            Mail::to($user->email)->send(new Newlecmail());
        }
        return view('add', compact('status', 'users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show($group, $depart, $subject)
    {
        $topics = Topic::where('group', '=',$group)->where('depart', '=', $depart)->where('subject', '=', $subject)->get();
        return view('study', compact('topics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $topic = topic::find(intval($id));
        return view('edit', compact('topic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $topic = topic::find(intval($id));
        $topic->update([
            'lecture' => $request['lecture'],
            'lecturedown' => $request['lecturedown'],
            'secpdf' => $request['secpdf'],
            'secvedio' => $request['secvedio'],
            'title'=>$request['title'],
        ]);
        //var_dump($request['lecture'], $request['secpdf'], $request['secvedio'], $id);
        $status = $topic->save();
        return view('edit', compact('status', 'topic'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $topics = topic::all();
        $topic = topic::find(intval($id));
        $status = $topic->delete();
        return view('home', compact('status', 'topics'));
    }
}
