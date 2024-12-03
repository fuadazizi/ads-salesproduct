<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\banners;
use App\Models\position_used;
use App\Models\performances;

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


        $listperformance = performances::join('banners', 'performances.id_cpm', '=', 'banners.id_cpm')
            ->where('performances.id_cpm', '!=', '1')
            ->where('banners.betterads', 'block')
            ->get()
            ->groupBy('category_cpm');

        return view('index', compact(
            'listbanner',
            'breminderbanner1',
            'breminderbanner2',
            'tin1banner',
            'listposition',
            'joinbanner',
            'newbannerD',
            'newbannerM',
            'listperformance'
        ));
    }

    public function banners(Request $request)
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

    public function performances(Request $request)
    {
        // Mapping of identifiers to readable names
        $cpmMappings = [
            'premiumdesktop' => 2,
            'premiummobile' => 11,
            'premiumapps' => 12,
            'regulerdesktop' => 3,
            'regulermobile' => 13,
            'regulerapps' => 14,
            'prerolldesktop' => 4,
            'prerollmobile' => 15,
            'prerollapps' => 0,
            'outstreamPdesktop' => 5,
            'outstreamPmobile' => 17,
            'outstreamPapps' => 18,
            'contextualD' => 29,
            'contextualM' => 30,
            'videooutD' => 6,
            'videooutM' => 19,
            'videooutA' => 20,
            'nativeinD' => 8,
            'nativeinM' => 25,
            'nativeinA' => 26,
            'nativeoutD' => 9,
            'nativeoutM' => 27,
            'nativeoutA' => 28,
            'bannerCPCD' => 10,
            'bannerCPCM' => 23,
            'bannerCPCA' => 24,
        ];

        $listperformance = [];

        // Generate data dynamically
        // foreach ($cpmMappings as $name => $id_cpm) {
        //     $listperformance[$name] = DB::table('performances')
        //         ->join('banners', 'performances.id_cpm', '=', 'banners.id_cpm')
        //         ->where('performances.id_cpm', $id_cpm)
        //         ->where('banners.betterads', 'block')
        //         ->get()
        // }

        $listperformance = performances::join('banners', 'performances.id_cpm', '=', 'banners.id_cpm')
            ->where('performances.id_cpm', '!=', '1')
            ->where('banners.betterads', 'block')
            ->get()
            ->groupBy('category_cpm');

        // $listbanner = banners::whereIn('id_cpm', [2, 11, 12, 3, 13, 14, 4, 15, 16, 5, 17, 18, 29, 30, 6, 19, 20, 8, 25, 26, 9, 27, 28, 10, 23, 24])->get();

        return view('index', compact(
            'listperformance'
        ));
    }
}
