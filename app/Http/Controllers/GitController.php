<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Git;

class GitController extends Controller
{
    public function score(Git $git, $name)
    {        
        $data = $git->getData($name);

        return $data;        
    }
}