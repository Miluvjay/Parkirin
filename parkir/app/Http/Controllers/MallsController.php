<?php

namespace App\Http\Controllers;

use App\Models\Malls;
use App\Models\Mall;
use App\Http\Requests\StoreMallsRequest;
use App\Http\Requests\UpdateMallsRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class MallsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('explorer.searchMall')->with([
            'malls' => Malls::all()
        ]);
    }

    public function search(Request  $request)
    {
        if ($request->has('search')) {
            $malls = Malls::where('city', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $malls = Malls::all();
        }
        return view('explorer.searchMall', ['malls' => $malls]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMallsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    // public function show(Malls $malls, $mall_id)
    // {
    //     $data = $malls->find($mall_id);
    //     return view('explorer.detailMall')->with([
    //         'mallName' => $data->mall_name,
    //         'address' => $data->address,
    //         'helpDesk' => $data->help_desk,
    //         'quotasMotor' => $data->quotas_motor,
    //         'quotasMobil' => $data->quotas_mobil,
    //         'feeMotor' => $data->fee_motor,
    //         'feeMobil' => $data->fee_mobil,

    //     ]);
    // }
    public function show($mall_id)
    {
        $malls = DB::table('malls')
            ->join('mall', 'mall.id_mall', '=', 'malls.id_mall')
            ->select('malls.*', 'mall.id_mall', 'mall.mall_name', 'mall.k_mobil', 'mall.k_motor')
            ->where('malls.id_mall', $mall_id)
            ->first();

        // Record for the given mall_id
        if (!$malls) {
            // Handle case where no record is found
            return abort(404);
        }

        // $malls->entry_date = Carbon::parse($malls->entry_date)->translatedFormat('d F Y');

        return view('explorer.detailMall')->with([
            'mallName' => $malls->mall_name,
            'address' => $malls->address,
            'helpDesk' => $malls->help_desk,
            'quotasMotor' => $malls->quotas_motor,
            'quotasMobil' => $malls->quotas_mobil,
            'feeMotor' => $malls->fee_motor,
            'feeMobil' => $malls->fee_mobil,
            'k_mobil' => $malls->k_mobil,
            'k_motor' => $malls->k_motor,
        ]);
    }


    // public function show(Mall $mall, $mall_id)
    // {
    //     $data = $mall->find($mall_id);

    //     if (!$data) {
    //         // Handle the case where the mall with the given ID is not found
    //         abort(404);
    //     }

    //     return view('explorer.detailMall')->with([
    //         'mallName' => $data->mall_name,
    //         'address' => $data->address,
    //         'helpDesk' => $data->help_desk,
    //         'quotasMotor' => $data->quotas_motor,
    //         'quotasMobil' => $data->quotas_mobil,
    //         'feeMotor' => $data->fee_motor,
    //         'feeMobil' => $data->fee_mobil,
    //     ]);
    // }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Malls $malls)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMallsRequest $request, Malls $malls)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Malls $malls)
    {
        //
    }
}
