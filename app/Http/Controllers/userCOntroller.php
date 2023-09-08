<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use DB;

class userCOntroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('created_at','desc')->paginate(10);
        return view('welcome')->withUsers($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        $Validation= $this->validate($request,array(
          
            'fname'=>'required|regex:/^[a-zA-Z]+$/u|max:20',
            'lname'=>'required|regex:/^[a-zA-Z]+$/u|max:20',
            'dob'=>'required|date',
            'address'=>'required',
            'email'=>'required',
            'password'=>'required',
           
            ));

            $user = new User;
            $user->fname=$request->fname;
            $user->lname=$request->lname;
            $user->dob=date("d-m-Y",strtotime($request->dob));
            $user->gender=$request->get('gender');            
            $user->email=$request->email;
            $user->password=$request->password;
            $user->address=$request->address;
            $user->country=$request->country;
            $user->state=$request->state;
            $user->city=$request->city;

            $user->save();

            
            $users=User::orderBy('created_at','desc')->paginate(10);
             Session::flash('Success', 'User is added');
             return redirect()->route('users.index')->withUsers($users);
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
