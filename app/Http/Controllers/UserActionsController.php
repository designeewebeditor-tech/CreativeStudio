<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserActionsController extends Controller
{
    public function userLike(Request $request)
    {
        $path = resource_path('json/actives.json');
        $data = json_decode(File::get($path), true);

        $designId = $request->id;
        if (!isset($data["designs"][$designId])) {
            return response()->json(['message' => 'Design not found'], 404);
        }

        session()->put('username', $request->username);

        $likes = &$data["designs"][$designId]["likes"];

        if ($request->add) {
            if (!in_array($request->username, $likes)) {
                array_push($likes, $request->username);
            }
        } else {
            if (($remove_key = array_search($request->username, $likes)) !== false) {
                unset($likes[$remove_key]);
                $data["designs"][$designId]["likes"] = array_values($likes);
            }
        }

        File::put($path, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

        return response()->json([
            'status' => 'success',
            'like_count' => count($data["designs"][$designId]["likes"])
        ]);
    }

    public function userComment(Request $request)
    {
        $path = resource_path('json/actives.json');
        $data = json_decode(File::get($path), true);

        session()->put('username', $request->username);

        if(isset($data["designs"][$request->id])) {
            array_push($data["designs"][$request->id]["comments"], [
                "lang"     => $request->lang,
                "username" => $request->username,
                "comment"  => $request->comment,
                "date"     => $request->date
            ]);

            File::put($path, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

            return response()->json([
                'status' => 'success',
                'message' => 'Comment added successfully'
            ]);
        }

        return response()->json(['status' => 'error', 'message' => 'Design not found'], 404);
    }
}
