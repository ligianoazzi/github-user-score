<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use App\Services\GitService;

class Git extends Model
{    
    public function getData($name)
    {
        $data = Http::get("https://api.github.com/users/$name/events/public");

        $GitService = new GitService;
        
        return $GitService->CalculatingScore($data);
    }
}