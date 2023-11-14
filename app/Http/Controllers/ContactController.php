<?php

//php artisan make:controller ContactController

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;


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
}
