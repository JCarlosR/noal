<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        $rules = [
            'email' => 'email|required|unique:subscribers,email',
            'name' => 'required'
        ];
        $request->validate($rules);

        $subscriber = Subscriber::create($request->only('name', 'email'));

        $data = [];
        if ($subscriber)
            $data['success'] = true;
        else
            $data['success'] = false;

        return $data;
    }
}
