<?php


namespace App\Http\Controllers;


class IndexController extends Controller
{
    public function index($id, $action)
    {
        return view('index', compact('id', 'action'));
    }
}
