<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'min_level' => ['required', 'int'],
            'max_level' => ['required', 'int'],
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $users = User::where('level', '>', 3)->where('level', '<', 10)->get();
        return response()->json(UserResource::collection($users));
    }

    public function show(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        /*$response = [
            "player" => [
                "detail" => $user
            ]
        ];*/
        return response()->json(UserResource::make($user));
    }

    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
        ]);
        return response()->json(['user_id' => $user->id]);
    }

    public function update(Request $request)
    {

        $user = User::findOrFail();
        $user->save();

        return response()->json();
    }
}
