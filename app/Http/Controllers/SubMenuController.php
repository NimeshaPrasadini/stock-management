<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubMenuController extends Controller
{
    //rol items notification
    public function notification()
    {

            $total = DB::table('stock_has_items')
                ->join('stocks', 'stocks.stock_id', 'st_id')
                ->join('items', 'items.id', 'it_id')
                ->orderBy('stocks.stock_id', 'ASC')
                ->whereRaw('st_quantity < CAST(rol*0.25 as Int) and stock_type="good_stock"')
                ->select([DB::raw('Count(st_quantity) OVER () AS total_rols')])
                ->value('total_rols');
            if ($total > 0) {
                session()->put('Notification', 'You have ' . $total . ' Good Items Reached ROL');
            }

            return view('subStockMenu');
        }
   /* }*/
}
