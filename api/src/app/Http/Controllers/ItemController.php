<?php

namespace App\Http\Controllers;

use App\Http\Resources\ItemResource;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $user = Item::all();
        return response()->json(ItemResource::collection($user));
    }

    public function show(Request $request)
    {
        $user = Item::where($request->user_i);
        return response()->json(ItemResource::collection($user));
    }
}
