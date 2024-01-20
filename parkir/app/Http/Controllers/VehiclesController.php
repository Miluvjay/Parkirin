<?php

namespace App\Http\Controllers;

use App\Models\Vehicles;
use App\Http\Requests\StoreVehiclesRequest;
use App\Http\Requests\UpdateVehiclesRequest;
use App\Models\ParkirMasuk;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('plate.index')->with([
            'vehicles' => Vehicles::all()
        ]);
        // return view('plate.detail');
    }
    public function main()
    {
        return view('plate.detail');
    }
    /**
     * Show the form for creating a new resource.
     */

    // public function search(Request $request)
    // {
    //     if ($request->has('search')) {
    //         $searchQuery = $request->search;

    //         $vehicles = Vehicles::where('vehicle_plate_number', 'LIKE', '%' . $searchQuery . '%')
    //             ->join('malls', 'malls.mall_id', '=', 'vehicles.mall_id')
    //             ->get(['vehicles.*', 'malls.*']); // Sesuaikan dengan kolom yang ingin ditampilkan

    //         if ($vehicles->isEmpty()) {
    //             return view('plate.index')->with('message', 'Data kendaraan tidak ditemukan');
    //         }

    //         return view('plate.detail', ['vehicles' => $vehicles]);
    //     } else {
    //         $vehicles = Vehicles::with('malls')->get(); // Jika tidak ada pencarian, ambil semua data kendaraan dengan data mall terkait
    //         return view('plate.detail', ['vehicles' => $vehicles]);
    //     }
    // }
    public function search(Request $request)
    {
        if ($request->has('search')) {
            $searchQuery = $request->search;

            $vehicles = ParkirMasuk::where('noplat', 'LIKE', '%' . $searchQuery . '%')
                ->join('mall', 'mall.id_mall', '=', 'parkirmasuk.id_mall')
                ->get(['parkirmasuk.*', 'mall.*']); // Sesuaikan dengan kolom yang ingin ditampilkan

            if ($vehicles->isEmpty()) {
                return view('plate.index')->with('message', 'Data kendaraan tidak ditemukan');
            }

            return view('plate.detail', ['vehicles' => $vehicles]);
        } else {
            $vehicles = ParkirMasuk::with('malls')->get(); // Jika tidak ada pencarian, ambil semua data kendaraan dengan data mall terkait
            return view('plate.detail', ['vehicles' => $vehicles]);
        }
    }
    // public function search(Request $request)
    // {
    //     if ($request->has('search')) {
    //         $searchQuery = $request->search;

    //         $vehicles = Vehicles::where('vehicle_plate_number', 'LIKE', '%' . $searchQuery . '%')
    //             ->join('malls', 'malls.mall_id', '=', 'vehicles.mall_id')
    //             ->get(['vehicles.*', 'malls.*']); // Sesuaikan dengan kolom yang ingin ditampilkan

    //         // Tambahkan kondisi untuk tanggal hari ini
    //         $today = Carbon::now()->toDateString();
    //         $vehicles = $vehicles->filter(function ($vehicle) use ($today) {
    //             return $vehicle->entry_date == $today; // Sesuaikan dengan kolom tanggal yang digunakan pada model
    //         });

    //         if ($vehicles->isEmpty()) {
    //             return view('plate.index')->with('message', 'Data kendaraan tidak ditemukan');
    //         }

    //         return view('plate.detail', ['vehicles' => $vehicles]);
    //     } else {
    //         // Jika tidak ada pencarian, ambil semua data kendaraan dengan data mall terkait
    //         $vehicles = Vehicles::with('malls')->get();

    //         // Tambahkan kondisi untuk tanggal hari ini
    //         $today = Carbon::now()->toDateString();
    //         $vehicles = $vehicles->filter(function ($vehicle) use ($today) {
    //             return $vehicle->entry_date == $today; // Sesuaikan dengan kolom tanggal yang digunakan pada model
    //         });

    //         if ($vehicles->isEmpty()) {
    //             return view('plate.index')->with('message', 'Data kendaraan tidak ditemukan');
    //         }

    //         return view('plate.detail', ['vehicles' => $vehicles]);
    //     }
    // }
    // public function search(Request $request)
    // {
    //     if ($request->has('search')) {
    //         $searchQuery = $request->search;

    //         $vehicles = Vehicles::where('vehicle_plate_number', 'LIKE', '%' . $searchQuery . '%')
    //             ->join('malls', 'malls.mall_id', '=', 'vehicles.mall_id')
    //             ->get(['vehicles.*', 'malls.*']); // Sesuaikan dengan kolom yang ingin ditampilkan

    //         if ($vehicles->isEmpty()) {
    //             return view('plate.index')->with('message', 'Data kendaraan tidak ditemukan');
    //         }

    //         // Tambahkan kondisi untuk tanggal hari ini
    //         $vehicles = $vehicles->filter(function ($vehicle) {
    //             $today = Carbon::now()->toDateString();
    //             return $vehicle->entry_date == $today; // Sesuaikan dengan kolom tanggal yang digunakan pada model
    //         });

    //         return view('plate.detail', ['vehicles' => $vehicles]);
    //     } else {
    //         // Jika tidak ada pencarian, ambil semua data kendaraan dengan data mall terkait
    //         $vehicles = Vehicles::with('malls')->get();

    //         // Tambahkan kondisi untuk tanggal hari ini
    //         $vehicles = $vehicles->filter(function ($vehicle) {
    //             $today = Carbon::now()->toDateString();
    //             return $vehicle->entry_date == $today; // Sesuaikan dengan kolom tanggal yang digunakan pada model
    //         });

    //         return view('plate.detail', ['vehicles' => $vehicles]);
    //     }
    // }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVehiclesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */


    public function show(Vehicles $vehicles, $vehicle_id)
    {
        $data = $vehicles->find($vehicle_id);
        return view('plate.detail')->with([
            'mallName' => $data->mall_name,
            'address' => $data->address,
            'helpDesk' => $data->help_desk,
            'quotasMotor' => $data->quotas_motor,
            'quotasMobil' => $data->quotas_mobil,
            'feeMotor' => $data->fee_motor,
            'feeMobil' => $data->fee_mobil,

        ]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicles $vehicles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVehiclesRequest $request, Vehicles $vehicles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicles $vehicles)
    {
        //
    }
}
