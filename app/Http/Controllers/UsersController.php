<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(){
 
    }

    public function create(){
    	return view('admin.users.create');
    }



    public function store(Request $request){
    	User::create($request->all());
    	return 'user created successfully';
    	return $request->all();
    }
};



