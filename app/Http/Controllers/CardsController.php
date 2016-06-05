<?php

namespace App\Http\Controllers;

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

        $card->load('notes.user');

        //$card = Card::with('notes.user')->find(1);

        

    	return view('cards.show', compact('card'));

    }

}
