<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(){
    	$users = [
    		'1' => [
    			'firstname' => 'Mike',
    			'lastname' => 'Laney'
    		],
    		'2' => [
    			'firstname' => 'Laura',
    			'lastname' => 'Johnson'
    		],
    		'3' => [
    			'firstname' => 'Benjamin',
    			'lastname' => 'Button'
    		]
    	];
    	return view('admin.users.index', compact('users'));
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



