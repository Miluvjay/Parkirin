<?php

namespace App\Http\Controllers;

use App\Models\Histories;
use App\Http\Requests\StoreHistoriesRequest;
use App\Http\Requests\UpdateHistoriesRequest;
use App\Models\Vehicles;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\ParkirMasuk;
use App\Models\Mall;

class HistoriesController extends Controller
{


    // public function index()
    // {
    //     $histories = DB::table('histories')
    //         ->join('vehicles', 'histories.vehicle_id', '=', 'vehicles.vehicle_id')
    //         ->join('malls', 'histories.mall_id', '=', 'malls.mall_id') // Menambah join untuk tabel malls
    //         ->select('histories.*', 'vehicles.*', 'malls.*') // Pilih kolom yang diinginkan dari ketiga tabel
    //         ->get();

    //     foreach ($histories as $history) {
    //         $history->entry_date = Carbon::parse($history->entry_date)->translatedFormat('d F Y');
    //     }

    //     return view('history.index', ['histories' => $histories]);
    // }
    public function index()
    {
        $histories = DB::table('parkirmasuk')
            ->join('mall', 'parkirmasuk.id_mall', '=', 'mall.id_mall')

            ->select('parkirmasuk.*', 'mall.*') // Pilih kolom yang diinginkan dari ketiga tabel
            ->get();

        foreach ($histories as $history) {
            $history->tanggalmasuk = Carbon::parse($history->tanggalmasuk)->translatedFormat('d F Y');
        }

        return view('history.index', ['histories' => $histories]);
    }
    // public function index()
    // {
    //     return view('history.index')->with([
    //         'parkirmasuk' => ParkirMasuk::all()
    //     ]);
    // }
    /**
     * Show the form for creating a new resource.
     */
    public function search(Request $request)
    {
        if ($request->has('search')) {
            $keyword = $request->search;

            // Lakukan join antara tabel histories dan vehicles berdasarkan vehicle_id
            $histories = ParkirMasuk::join('mall', 'parkirmasuk.id_mall', '=', 'mall.id_mall')
                ->where('parkirmasuk.noplat', 'LIKE', "%$keyword%")
                ->get();
        } else {
            $histories = ParkirMasuk::all();
        }
        foreach ($histories as $history) {
            $history->tanggalmasuk = Carbon::parse($history->tanggalmasuk)->translatedFormat('d F Y');
        }


        return view('history.index', ['histories' => $histories]);
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHistoriesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    // public function show(Histories $histories)
    // {
    //     //
    // }
    public function show($notiket)
    {
        $history = ParkirMasuk::findOrFail($notiket);

        // Assuming $notiket is defined somewhere in your code
        $parkirmasuk = DB::table('parkirmasuk')
            ->join('mall', 'mall.id_mall', '=', 'parkirmasuk.id_mall')
            ->select('parkirmasuk.*', 'mall.id_mall', 'mall.mall_name', 'mall.address')
            ->where('parkirmasuk.notiket', $history->notiket) // Use $history->id_mall instead of undefined $notiket
            ->first();

        // Record for the given id_mall
        if (!$parkirmasuk) {
            // Handle case where no record is found
            return abort(404);
        }

        // Perform any additional processing if needed
        $formattedTanggalMasuk = Carbon::parse($history->tanggalmasuk)->translatedFormat('d F Y');
        $formattedBiaya = 'Rp ' .number_format($parkirmasuk->biaya,2,',','.');

        return view('history.transaction')->with([
            // 'tanggalmasuk' => $parkirmasuk->tanggalmasuk,
            'tanggalmasuk' => $formattedTanggalMasuk,
            'mall_name' => $parkirmasuk->mall_name,
            'address' => $parkirmasuk->address,
            'noplat' => $parkirmasuk->noplat,
            'merkkendaraan' => $parkirmasuk->merkkendaraan,
            'jammasuk' => $parkirmasuk->jammasuk,
            'jamkeluar' => $parkirmasuk->jamkeluar,
            'duration' => $parkirmasuk->duration,
            // 'biaya' => $parkirmasuk->biaya,
            'biaya' => $formattedBiaya,
            'notiket' => $history->notiket, // Use $history->notiket if it's defined in your ParkirMasuk model
        ]);
    }

    // public function show($notiket)
    // {
    //     $parkirmasuk = DB::table('parkirmasuk')
    //         ->join('parkirmasuk', 'mall.id_mall', '=', 'parkirmasuk.id_mall')
    //         ->select('parkimasuk.*', 'mall.id_mall', 'mall.mall_name', 'mall.address')
    //         ->where('parkirmasuk.notiket', $notiket)
    //         ->first();

    //     // Record for the given mall_id
    //     if (!$parkirmasuk) {
    //         // Handle case where no record is found
    //         return abort(404);
    //     }

    //     // $malls->entry_date = Carbon::parse($malls->entry_date)->translatedFormat('d F Y');

    //     return view('history.transaction')->with([

    //         'tanggalmasuk' => $parkirmasuk->tanggalmasuk,
    //         'mall_name' => $parkirmasuk->mall_name,
    //         'address' => $parkirmasuk->address,
    //         'noplat' => $parkirmasuk->noplat,
    //         'merkkendaraan' => $parkirmasuk->merkkendaraan,
    //         'jammasuk' => $parkirmasuk->jammasuk,
    //         'jamkeluar' => $parkirmasuk->jamkeluar,
    //         'duration' => $parkirmasuk->duration,
    //         'notiket' => $notiket, // Pass the ticket number to the view
    //     ]);
    // }
    // /**
    //  * Show the form for editing the specified resource.
    //  */
    public function edit(Histories $histories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHistoriesRequest $request, Histories $histories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Histories $histories)
    {
        //
    }
}
