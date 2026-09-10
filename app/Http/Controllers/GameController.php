<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function start(Request $request)
    {
        $game = Game::create([
            'user_id' => $request->user_id,
            'score' => 0,
        ]);

        return response()->json($game);
    }

    public function end(Request $request, $id)
    {
        $game = Game::find($id);

        $game->score = $request->score;
        $game->save();//veritabanına değişiklik gönderiyoruz

        return response()->json($game);
    }

    public function dailyTop10()
    {
        $games = Game::whereDate('started_at', today())
            ->limit(10)
            ->get();

        return response()->json($games);
    }
}
