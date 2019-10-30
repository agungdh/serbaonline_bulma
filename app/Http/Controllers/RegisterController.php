<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Validation\Rule;

use Hash;
use Validator;
use ADHhelper;

use App\Models\Users;

use DB;

class RegisterController extends Controller
{
    function index() {
        return view('register.index');
    }

    public function store(Request $request)
    {

        $users = Users::all();


        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        
        $data = $request->only( 'username', 'password');
        $data['password'] = Hash::make($request->password);

        DB::table('users')->insert($data);

        return redirect()->route('main.index');    	
	}

    function login() {
        return view('register.login');
    }	

    
}