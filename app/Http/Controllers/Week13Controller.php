<?php

namespace App\Http\Controllers;

use App\Services\LibraryCatalogService;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;

/** MVC: Route -> Controller -> Service -> Model -> Blade view. */
final class Week13Controller extends Controller
{
    public function __invoke(LibraryCatalogService $catalog): View
    {
        Log::info('Week 13 MVC demo viewed');
        return view('weeks.week13', ['cards' => $catalog->cards()]);
    }
}
