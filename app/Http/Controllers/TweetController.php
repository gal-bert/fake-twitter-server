<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{

    public function index()
    {
        return Tweet::all();
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        Tweet::create([
            'author' => $request->author,
            'content' => $request->content
        ]);

        return response()->json([
            'message' => 'Tweet created successfully',
            'status' => 'success'
        ]);
    }


    public function show($id)
    {

        return Tweet::find($id) ? Tweet::find($id) : $this->notFound();
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $tweet = Tweet::find($id);

        if ($tweet) {
            $tweet->author = $request->author;
            $tweet->content = $request->content;
            $tweet->save();

            return response()->json([
                'message' => 'Tweet updated successfully',
                'status' => 'success'
            ]);

        }
        else {
            return $this->notFound();
        }

    }


    public function destroy($id)
    {
        $tweet = Tweet::find($id);

        if ($tweet) {
            $tweet->delete();

            return response()->json([
                'message' => 'Tweet deleted successfully',
                'status' => 'success'
            ]);
        } else {
            return $this->notFound();
        }

    }

    private function notFound() {
        return response()->json([
            'message' => 'Tweet not found',
            'status' => 'error'
        ], 404);
    }
}
