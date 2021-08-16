<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        dd(
            Task::where("id", "=", "2")->first()->users()->toSql()
    );
    }
}
