<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index(): View
    {

        $users = User::all();

        return view('crud-default.index', compact('users'));
    }

    public function create(): View 
    {
        return view('crud-default.create');
    }

    public function store(Request $request) 
    {
        $data = $request->all();

        User::created($data);

        //depois que salvar retorna para o tela principal
        return redirect()->route('user.index');
    }

    public function show (string $id)
    {
        if(!$users = User::find($id)) {
            
            return back();
        }

        return view('crud-default.show', compact('users'));

    }

}

