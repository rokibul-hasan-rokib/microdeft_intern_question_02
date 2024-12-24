<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequisitionRequest;
use App\Http\Requests\UpdateRequisitionRequest;
use App\Models\Requisition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequisitionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requisitions = Requisition::with('asset')->paginate(10);
        return view('requisition.index', compact('requisitions'));
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
    public function store(StoreRequisitionRequest $request)
    {
        try {
            DB::beginTransaction();
            (new Requisition())->storeRequisite($request);
            DB::commit();
        } catch (\Throwable $th) {

        }
        return route('requisition.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequisitionRequest $request, Requisition $requisition)
    {
        try {
            DB::beginTransaction();
            (new Requisition())->updateRequisite($request,$requisition);
            DB::commit();
        } catch (\Throwable $th) {

        }
        return route('requisition.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Requisition $requisition)
    {
        try {
            DB::beginTransaction();
            (new Requisition())->deleteRequisite($requisition);
            DB::commit();
        } catch (\Throwable $th) {

        }
        return route('requisition.index');
    }
}