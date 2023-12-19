<?php

//php artisan make:controller ContactController

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Users;


class ContactController extends Controller
{
    public function submit(ContactRequest $result) // было Request
    {
        //php artisan make:request ContactRequest
        //$validatiion = $result->validate([
        //    'name' => 'required|min:5|max:10',
        //]);

        dd($result->input('name'));
        return;
    }

    public function allData()
    {
        // подключаемся к конкретной таблице в бд
        //$contact = new Users();
        //dd($contact->all());
        // можно тоже с амое иначе
        //dd(Users::all());

        return view('messages', ['data' => Users::all()]);

    }

    public function showMessage($id)
    {
        $contact = new Users();
        return view('one-messages', ['data' => $contact->find($id)]);
    }
}
