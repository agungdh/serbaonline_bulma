<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

use Hash;
use Validator;
use ADHhelper;

use DB;

class MainController extends Controller
{
    function index() {
        return view('cover.index');
        //return view('template.index');
    }
}