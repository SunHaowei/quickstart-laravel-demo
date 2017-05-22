<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TaskContrller extends Controller
{
	/**
     * 创建一个新的控制器实例。
     *
     * @return void
     */
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
			'name' => 'required|max:255'
		]);
    }
}
