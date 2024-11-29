<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\banners;
use App\Models\position_used;

class AdsController extends Controller
{
    public function index(Request $request)
    {
        // $listbanner = banners::orderBy('id','asc')->paginate(10);
        $listbanner = banners::where('betterads', 'block')
            ->orderBy('name', 'ASC')
            ->where('id_slot', '!=', '31')
            ->where('id_slot', '!=', '32')
            ->where('id_slot', '!=', '33')
            ->get();
        $newbannerD = banners::where('platform', 'Desktop')->where('betterads', 'block')->InRandomOrder()->limit(2)->get();
        $newbannerM = banners::where('platform', 'Mobile')->where('betterads', 'block')->InRandomOrder()->limit(2)->get();
        $listposition = position_used::orderBy('slot_name', 'ASC')
            ->where('slot_name', 'not LIKE', '%Brand Reminder%')
            ->where('slot_name', 'not LIKE', '%3in1 Banner%')
            ->where('id_slot', '!=', '31')
            ->where('id_slot', '!=', '32')
            ->where('id_slot', '!=', '33')
            ->get();
        $joinbanner = position_used::join('banners', 'banners.id_slot', '=', 'position_useds.id_slot')
            ->orderBy('slot_name', 'ASC')
            ->where('name', 'not LIKE', '%Brand Reminder%')
            ->where('name', 'not LIKE', '%3in1 Banner%')
            ->where('banners.id_slot', '!=', '31')
            ->where('banners.id_slot', '!=', '32')
            ->where('banners.id_slot', '!=', '33')
            ->where('banners.betterads', 'block')
            ->get(['banners.*', 'position_useds.*']);
        $breminderbanner1 = position_used::join('banners', 'banners.id_slot', '=', 'position_useds.id_slot')
            ->orderBy('slot_name', 'ASC')
            ->where('id', '=', '203')
            ->orWhere('id', '=', '210')
            ->where('banners.id_slot', '!=', '31')
            ->where('banners.id_slot', '!=', '32')
            ->where('banners.id_slot', '!=', '33')
            ->where('banners.betterads', 'block')
            ->get(['banners.*', 'position_useds.*']);
        $breminderbanner2 = position_used::join('banners', 'banners.id_slot', '=', 'position_useds.id_slot')
            ->orderBy('slot_name', 'ASC')
            ->where('id', '=', '211')
            ->orWhere('id', '=', '212')
            ->orWhere('id', '=', '213')
            ->orWhere('id', '=', '267')
            ->where('banners.id_slot', '!=', '31')
            ->where('banners.id_slot', '!=', '32')
            ->where('banners.id_slot', '!=', '33')
            ->where('banners.betterads', 'block')
            ->get(['banners.*', 'position_useds.*']);
        $tin1banner = position_used::join('banners', 'banners.id_slot', '=', 'position_useds.id_slot')
            ->orderBy('slot_name', 'ASC')
            ->where('id', '=', '214')
            ->orWhere('id', '=', '216')
            ->orWhere('id', '=', '218')
            ->orWhere('id', '=', '219')
            ->where('banners.id_slot', '!=', '31')
            ->where('banners.id_slot', '!=', '32')
            ->where('banners.id_slot', '!=', '33')
            ->where('banners.betterads', 'block')
            ->get(['banners.*', 'position_useds.*']);

        if ($request->has('q')) {
            $query = $request->get('q');
            $listbanner = banners::where('name', 'LIKE', '%' . $query . '%')
                ->orderBy('id', 'asc')
                ->paginate(10);
        }
        return view('index', compact(
            'listbanner',
            'breminderbanner1',
            'breminderbanner2',
            'tin1banner',
            'listposition',
            'joinbanner',
            'newbannerD',
            'newbannerM'
        ));        
    }

    public function comingsoon() {
        return view('comingsoon');
    }
}
