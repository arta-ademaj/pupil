<?php

namespace App\Http\Controllers;

use App\Models\SchoolUser;
use App\Models\SchoolUserRoles;
use App\Models\School;
use App\Http\Requests\StoreSchoolUserRequest;
use App\Http\Requests\UpdateSchoolUserRequest;

class SchoolUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {   $schools = School::all();
        $roles = SchoolUserRoles::all();
        return view('admin.user.create',compact('schools','roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSchoolUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSchoolUserRequest $request)
    {
        // $user = User::create([
        //     'name' => $request['user-name'],
        //     'email' => $request['user-email'],
        //     'password' => Hash::make($request['user-password'])
        // ]);


        // SchoolUser::create([
        //     'school_id' => $request['school_id'],
        //     'user_id' => $user,
        //     'role_id' => $request['role_id']
        // ]);

        //  return redirect()->route('admin.user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SchoolUser  $schoolUser
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolUser $schoolUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SchoolUser  $schoolUser
     * @return \Illuminate\Http\Response
     */
    public function edit(SchoolUser $schoolUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSchoolUserRequest  $request
     * @param  \App\Models\SchoolUser  $schoolUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSchoolUserRequest $request, SchoolUser $schoolUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SchoolUser  $schoolUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolUser $schoolUser)
    {
        //
    }
}
