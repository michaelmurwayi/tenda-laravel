<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Tender;
use App\Models\Comment;


class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $tender = Tender::find(1);
        //
        $comment = new Comment;
        $comment->comment = $request->comment;
        
        $tender = $tender->comments()->saveMany([$comment]);

        echo "Record inserted successfully.<br/>";
        return redirect('/')->with('success', 'Tender is successfully saved');
    }

}
