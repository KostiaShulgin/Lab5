<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\HelloPerson;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function Check() : string{
        return view('C:\Users\Константин Шульгин\site1\app\Models\Comments.php');
    }

    public function Navigate() : string{
        return view('Navigation');
    }

    public function goToLobby() : string{
        return view('Lobby');
    }

    public function goToComments() : string{
        return view('Comments')->with('comment', '');
    }

    public function postComm(Request $request) : string{
        $text = $request->input('text');
        return view('Comments')->with('comment', $text);
    }

    public function foreach() : string{
        $person = new HelloPerson(0);
        return view('Foreach')->with('surnames', $person->surnames);
    }

    public function sayHelloTo($id) : string{
        $person = new HelloPerson($id);
        $name = $person->getName();
        return view('SayHello')->with('namep', "$name");
    }


}
