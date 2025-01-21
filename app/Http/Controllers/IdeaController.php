<?php

namespace App\Http\Controllers;

use App\Models\idea;

use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function show(Idea $idea){
        return view('ideas.show', compact('idea'));
    }

    public function edit(Idea $idea){

        $editing = true;

        return view('ideas.show', compact('idea', 'editing'));
    }

    public function update(Idea $idea){

        request()->validate([
            'content' => 'required|min:1|max:240'
        ]);

        $idea->content = request()->get('content', '');
        $idea->save();

        return redirect()->route('idea.show', $idea->id)->with('success', 'Idea was updated successfully!');
    }

    public function store(){
        request()->validate([
            'content' => 'required|min:1|max:240'
        ]);

        $idea = idea::create(
            [
            'content' => request()->get('content',null),
            ]
    );

        return redirect()->route('dashboard')->with('success', 'Idea was created successfully!');
    }

    public function destroy(Idea $idea){

        $idea ->delete();

        return redirect()->route('dashboard')->with('success', 'Idea was deleted successfully!');
    }
}
