<?php

namespace App\Http\Controllers;

use App\Http\Resources\RankingResource;
use App\Models\Ranking;
use Illuminate\Http\Request;

class RankingController extends Controller
{
    public function index(Request $request)
    {
        //無条件ですべて取り出す
        //$ranking = Ranking::all();

        //指定のステージのみを取り出す
        $ranking = Ranking::where('stage_id', '=', $request->stage_id)->orderByDesc('score')->get();

        return response()->json(RankingResource::collection($ranking));
    }

    public function store(Request $request)
    {
        $ranking = Ranking::where('user_id', '=', $request->user_id)
            ->where('stage_id', '=', $request->stage_id)->first();

        if (empty($ranking)) {
            $ranking = Ranking::create([
                'user_id' => $request->user()->id,
                'stage_id' => $request->stage_id,
                'score' => $request->score
            ]);
        } elseif ($ranking->score < $request->score) {
            $ranking->score = $request->score;
            $ranking->save();
        }


        return response()->json($ranking);
    }
}
