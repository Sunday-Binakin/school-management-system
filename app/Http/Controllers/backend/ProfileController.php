<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeProfileData;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $user = User::FindOrFail($id);
        return view('backend.manage_profile.index', compact('user'));
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
    public function store(storeProfileData $request)
    {
        // Retrieve the validated input data...
        // $request->validated();

        
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
    public function edit()
    {
        $id = Auth::user()->id;
        $editData = User::FindOrFail($id);

        return view('backend.manage_profile.edit', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(storeProfileData $request)
    {
        //
        //saving user data
        $user_data = User::FindOrFail(Auth::user()->id);
        $user_data->name = $request->input('name');
        $user_data->email = $request->input('email');
        $user_data->mobile = $request->input('mobile');
        $user_data->address = $request->input('address');
        $user_data->gender = $request->input('gender');

        if ($request->file('image')) {
            $image_file = $request->file('image');
            @unlink(public_path('unpload/user_images/' . $user_data->image));
            $image_name = date('YmdHi') . $image_file->getClientOriginalName();
            $image_file->move(public_path('upload/user_images'), $image_name);
            $user_data['image'] = $image_file;
        }
        $user_data->save();
        alert()->success('User Profile Updated')->persistent(true, false);
        return redirect()->route('manage.profile.index');
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
