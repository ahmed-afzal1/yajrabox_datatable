<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Yajra\DataTables\DataTables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        return view('home',compact('users'));
    }
    public function getUsers()
    {
        return DataTables::of(User::query())
        ->setRowClass('{{ $id % 2 == 0 ? "alert-success" : "alert-warning" }}')
        ->setRowAttr(['align' => 'center'])
        ->addColumn('intro', 'Hi {{$name}}!')
        ->editColumn('created_at', function(User $user) {
            return  $user->created_at->diffForHumans();
        })
        ->removeColumn('intro')
        ->make(true);
    }
}
