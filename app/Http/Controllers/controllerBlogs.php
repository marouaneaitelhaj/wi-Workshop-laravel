<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blogs;

class controllerBlogs extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session('id') == null) {
            return redirect('login');
        }
        $blogs = blogs::join('user', 'user.id', '=', 'blogs.user_id')->select('blogs.*', 'user.name')->get();
        return view('blogs', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (session('id') == null) {
            return redirect('login');
        }
        $blogs = new blogs;
        $blogs->title = request('title');
        $blogs->content = request('content');
        $blogs->user_id = session('id');
        $blogs->save();
        return redirect('blogs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (session('id') == null) {
            return redirect('login');
        }
        $blogs = blogs::findOrFail($id);
        if (session('id') !== $blogs->user_id) {
            return view('error');
        } else {
            return view('show', compact('blogs'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if (session('id') == null) {
            return redirect('login');
        }
        $data = blogs::findOrFail($id);
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);
        $data->update($validatedData);
        return redirect('blogs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (session('id') == null) {
            return redirect('login');
        }
        $blogs = blogs::findOrFail($id);
        if (session('id') !== $blogs->user_id) {
            return view('error');
        } else {
            $blogs->delete();
            return redirect('blogs');
        }
    }
}
