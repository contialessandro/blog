<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  Illuminate\Database;

use App\Http\Requests;

use App\Card;



class CardsController extends Controller
{
    public function index()
    {
    	
    	$cards = Card::all();
    	return view('cards.index', compact('cards'));

    }

    public function show(Card $card)
    {

        //$card->load('notes.users');

        //dd($card);

    	return view('cards.show', compact('card'));

    }

}
