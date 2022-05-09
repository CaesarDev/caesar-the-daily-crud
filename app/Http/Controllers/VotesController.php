<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Vote;
use Illuminate\Http\Request;

class VotesController extends Controller
{

    public function store(Request $request, Post $post)
    {

        $vote = new Vote();

        $post->votes()->save($vote);

        return redirect()->route('votes.thank-you', $vote);
    }


    public function show(Vote $vote)
    {
        return view('votes.thank-you', [
            'vote' =>$vote
        ]);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Votes $vote)
    {
        //
    }
}
