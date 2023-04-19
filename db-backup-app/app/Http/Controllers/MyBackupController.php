<?php

namespace App\Http\Controllers;

use App\Models\MyBackup;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Artisan;

class MyBackupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        Artisan::call('database:backup');
        //Artisan::call('cache:clear');
        $filename = "backup-" . Carbon::now()->format('Y-m-d') . ".gz";
        return response()->json([$filename]);
    }

    /**
     * Display the specified resource.
     */
    public function show(MyBackup $myBackup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MyBackup $myBackup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MyBackup $myBackup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MyBackup $myBackup)
    {
        //
    }
}
