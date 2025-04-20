<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\CourtCase;
use App\Models\Review;

class PagesController extends Controller
{
    public function home()
    {
        $reviews = Review::orderBy('position')->get();
        $cases = CourtCase::orderBy('position')->get();
        $auctionsExists = Auction::exists();

        return view('home', compact('reviews', 'cases', 'auctionsExists'));
    }

    public function courtCases()
    {
        $auctions = Auction::orderBy('position')->get();
        $auctionsExists = Auction::exists();

        return view('court-cases', compact('auctions', 'auctionsExists'));
    }
}
