<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CacheController extends Controller
{
    function index() {
        $variavel = Cache::remember('parametro1', $tempoExpiracao, function() {
            return "alguns dados";
        });
    }
}
