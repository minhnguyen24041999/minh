<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users = factory(User::class, 10)->make()->toArray();
      $users = User::all();//->toArray();
      foreach ($users as $user){
        $user->posts;
        //dd($user->posts->count());
    }
    return view('starter',[
       'users' => $users
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = ($request->all());
    $user = User::create ([
        'name' => $data['name'],
        'email' => $data['email'],
        'birthday' => $data['birthday'],
        'password' => bcrypt('123456'),

    ]);
    
    return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
     dd($user);

 //     return view('starter',[
 //         'users' =>$users
 //     ]);     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
    return view('users.update', [
        'user' => $user
       ]);
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
     $user = User::find($id);
     $user->update([
        'name' => $request->name,
        'brithday' => $request->brithday,
        'address' => $request->address,
        'email' => $request->email
    ]);
    return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
            $user = User::find ($id);

    $user->delete('$id');

    return redirect()->route('users.index');
    }
}
