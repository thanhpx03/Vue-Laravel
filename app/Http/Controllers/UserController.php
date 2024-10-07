<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
        $users= User::
        join('departments', 'users.department_id', 'departments.id')
        ->join('users_status', 'users.status_id', 'users_status.id')
        ->select(
            'users.*',//lấy hết giá trị trong bảng user
             'departments.name as departments',
             'users_status.name as status')
        ->get();

        return response()->json($users);
    }
    public function show($id){
        return User::findOrFail($id);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $users_status=\DB::table("users_status")->select(
            "id as value",
            "name as lable"
        )->get();
        $departments= \DB::table("departments")->select(
            "id as value",
            "name as lable"
        )->get();
        return response()->json(
            [
                "users_status"=> $users_status,
                "departments" => $departments
            ] );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    
    //     $validated = $request->validate([
    //      "status_id"=>"required",
    //      "name"=>"required",
    //      "username"=>"required",
    //      "department_id"=>"required",
    //      "email"=>"required"

    //     ],[
    //      "status_id.required"=>"không bỏ trống",
    //      "name.required"=>"không bỏ trống",
    //      "username.required"=>"không bỏ trống",
    //      "department_id.required"=>"không bỏ trống",
    //      "email.required"=>"không bỏ trống"



    //     ]
    // );

    // $user=User::create($request::all());
    // return response()->json($user);

    User::create([
        "status_id"=> $request["status_id"],
        "name"=> $request["name"],
        "username"=> $request["username"],
        "password"=> $request["password"],
        "email"=> $request["email"],
        "avatar"=> $request["avatar"],

        "department_id"=> $request["department_id"],
    ]);
    // return $request; 


    }

    /**
     * Display the specified resource.
     */
 

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
