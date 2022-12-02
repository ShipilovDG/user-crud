<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Request;

class GoalController extends Controller
{
    public function setGoal(Request $request)
    {
        $goalTitle = $request->get('goalTitle');
        $achieveIterations = $request->get('achieveIterations');
        $timeDLine = $request->get('timeDLine');

    }

}
