<?php

namespace App\Http\Controllers;

use App\Models\TransactionHistory;
use App\Http\Requests\StoreTransactionHistoryRequest;
use App\Http\Requests\UpdateTransactionHistoryRequest;

class TransactionHistoryController extends Controller
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
    public function store(StoreTransactionHistoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TransactionHistory $transactionHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TransactionHistory $transactionHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionHistoryRequest $request, TransactionHistory $transactionHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TransactionHistory $transactionHistory)
    {
        //
    }
}
