<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use Throwable;

class WelcomeController extends Controller
{
    //
    public const PAGINATE_LIMIT = 10;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
        
            //
            $players = Player::getWithContoryBySimplePaginate(selt::PAGINATE_LIMIT);
            return view('welcome')->with('players',$players);
        }catch(Throwable $e){
            abort(500);
        }
        }
        
    }

