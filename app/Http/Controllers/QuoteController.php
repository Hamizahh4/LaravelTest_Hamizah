<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuoteController extends Controller
{
    public function index()
    {
        $quotes = $this->fetchQuotes(5);

        return view('quotes', ['quotes' => $quotes]);
    }

    public function fetchQuotes($count)
    {
        $quotes = [];
        for ($i = 0; $i < $count; $i++) {
            $response = Http::get('http://api.kanye.rest/');
            $quotes[] = $response->json()['quote'];
        }
        return $quotes;
    }

    public function apiQuotes($count)
    {
        $quotes = $this->fetchQuotes($count);
        return response()->json($quotes);
    }
}
