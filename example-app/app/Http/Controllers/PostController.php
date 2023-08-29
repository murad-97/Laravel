<?php

namespace App\Http\Controllers;

use App\Models\members;
// use App\Models\group1;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $username = $request->input('email');
        $password = $request->input('password');

        $users = members::all();
        $username1 = false;
        $password1 = false;
        foreach ($users as $user) {
            if ($user["email"] == $username) {
                $username1 = true;
            }
        }
        if ($username1) {
            foreach ($users as $user) {
                if ($user["password"] == $password) {
                    $password1 = true;
                }
            }
        }

        if ($username1 && $password1) {

            return view('welcome',["users"=>$users]);
        } else {
            echo '<div class="alert alert-danger" style="text-align: center;" role="alert">3LLAWY <p>بيسلم عليك</p></div>';
            return view('index');
        }




        // return view("index",$request->email);

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
