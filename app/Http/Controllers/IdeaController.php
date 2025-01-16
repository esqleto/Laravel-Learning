<?php

namespace App\Http\Controllers;

use App\Models\idea;

use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function store(){
        request()->validate([
            'idea' => 'required|min:1|max:240'
        ]);

        $idea = idea::create(
            [
            'content' => request()->get('idea',null),
            ]
    );

        return redirect()->route('dashboard')->with('success', 'Idea was created successfully!');
    }
}
