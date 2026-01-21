<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserActionsController extends Controller
{
    public function userLike(Request $request)
    {
        !session()->has('user.likes') ? session()->put('user.likes', []) : null;
        $likes = session()->get('user.likes');

        session()->put('username', $request->username);

        if($request->add){
            array_push($likes, $request->design);
        }else if (($like_key = array_search($request->design, $likes)) !== false) {
            unset($likes[$like_key]);
        }

        session()->put('user.likes', $likes);

        // $path = resource_path('json/actives.json');
        // $data = json_decode(File::get($path), true);

        // $designId = $request->id;
        // if (!isset($data["designs"][$designId])) {
        //     return response()->json(['message' => 'Design not found'], 404);
        // }

        // session()->put('username', $request->username);

        // $likes = &$data["designs"][$designId]["likes"];

        // if ($request->add) {
        //     if (!in_array($request->username, $likes)) {
        //         array_push($likes, $request->username);
        //     }
        // } else {
        //     if (($remove_key = array_search($request->username, $likes)) !== false) {
        //         unset($likes[$remove_key]);
        //         $data["designs"][$designId]["likes"] = array_values($likes);
        //     }
        // }

        // File::put($path, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

        return response()->json(['status' => 'success',]);
    }

    public function userComment(Request $request)
    {
        !session()->has('user.comments') ? session()->put('user.comments', []) : null;
        $comments = session()->get('user.comments');

        session()->put('username', $request->username);

        !isset($comments[$request->design]) ? $comments[$request->design] = [] : null;

        array_push($comments[$request->design], [
            "lang"     => $request->lang,
            "username" => $request->username,
            "comment"  => $request->comment,
            "date"     => date('d-m-Y'),
        ]);

        session()->put('user.comments', $comments);

        return response()->json(['status' => 'success',]);
    }
}
