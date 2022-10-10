<?php

namespace App\Http\Controllers\backend;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\storeUserRequest;
use App\Http\Requests\updateUserRequest;

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
        // $allUsers = User::all();
        $allUsers = User::where('user_type', 'Admin')->get();

        return view('backend.users.index', compact('allUsers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //storeUserRequest
        // Retrieve the validated input data...
        // $request->validated();

        // User::create([
        //    'code'=>$request->input(mt_rand(0000, 9999)),
        //     'name' => $request->input('name'),
        //     // 'name' => $request->name,
        //     'email' => $request->input('email'),
        //     'role' => $request->input('role'),
        //     'user_type' => 'Admin',
        //     // 'password' => bcrypt(mt_rand(0000, 9999)),
        //      'password' => mt_rand(0000, 9999),
        //     'created_at' => Carbon::now(),
        // ]);
        $data = new User();
        $code = rand(0000,9999);
    	$data->user_type = 'Admin';
        $data->role = $request->role;
    	$data->name = $request->name;
        $data->username = $request->username;
    	$data->email = $request->email;
    	$data->password = bcrypt($code);
        $data->code = $code;
    	$data->save();

        alert()->success('User Added')->persistent(true, false);
        return redirect()->route('user.index');
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
        $editUserData = user::FindOrFail($id);
        return view('backend.users.edit', compact('editUserData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(updateUserRequest $request, $id)
    {
        //
        User::FindOrFail($id)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'username' => $request->input('username'),
            'role' => $request->input('role'),
            'updated_at' => Carbon::now(),
        ]);
        toast('Updated', 'success', 'top-right')->hideCloseButton();

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::FindOrFail($id)->delete();

        return redirect()->route('user.index');
    }
}
