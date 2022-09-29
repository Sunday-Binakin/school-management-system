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
    public function store(storeUserRequest $request)
    {
        // Retrieve the validated input data...
        $request->validated();

        user::create([
            $code = rand(0000, 9999),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'role' => $request->input('role'),
            'user_type' => 'Admin',
            'password' => bcrypt($code),
            'created_at' => Carbon::now(),
        ]);

        // a random number is genrated between (0000, 999) , which will be the dault password
        // $newUser = new User();
        // $code = rand(0000, 9999);
        // $newUser->name = $request->input('name');
        // $newUser->role = $request->input('role');
        // $newUser->email = $request->input('email');
        // $newUser->user_type = 'Admin';
        // $newUser->password = bcrypt($code);
        // $newUser->code = $code;
        // $newUser->save();

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
        user::FindOrFail($id)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
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
        user::FindOrFail($id)->delete();

        return redirect()->route('user.index');
    }
}
