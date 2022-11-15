<?php

namespace App\Http\Controllers;

use App\Models\Deal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->user()->hasRole('Admin')) $deals = Deal::with('restaurant')->orderByDesc('created_at')->get();
        else $deals = Deal::where('restaurant_id', $request->user()->id)->orderByDesc('created_at')->get();

        return view('dashboard.deals.index', [
            'deals' => $deals
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.deals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:30'],
            'price' => ['required', 'numeric', 'min:1'],
            'image' => ['required', 'mimes:jpg,jpeg,png'],
            'description' => ['required', 'string'],
            'date' => ['required', "date", 'after_or_equal:today'],
            'start_time' => ['required', 'date_format:H:i'],
            'end_time' => ['required', 'date_format:H:i', 'after:start_time'],
        ], [
            'end_time.after' => "The :attribute must be after :date."
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image')->store('deals');
            $data = array_merge($data, ['image' => $file]);
        }

        $data = array_merge($data, ['restaurant_id' => $request->user()->id]);

        $deal = Deal::create($data);
        return redirect()->route('deals.index')->with('alert', [
            'type' => 'success',
            'msg' => 'Deal created'
        ]);;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function show(Deal $deal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function edit(Deal $deal)
    {
        return view('dashboard.deals.create', [
            'deal' => $deal
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deal $deal)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:30'],
            'price' => ['required', 'numeric', 'min:1'],
            'image' => ['mimes:jpg,jpeg,png'],
            'description' => ['required', 'string'],
            'date' => ['required', "date", 'after_or_equal:today'],
            'start_time' => ['required', 'date_format:H:i'],
            'end_time' => ['required', 'date_format:H:i', 'after:start_time'],
        ], [
            'end_time.after' => "The :attribute must be after :date."
        ]);

        if ($request->hasFile('image')) {
            if (file_exists($path = storage_path('app/public/'))) {
                File::delete($path);
            }

            $file = $request->file('image')->store('deals');
            $data = array_merge($data, ['image' => $file]);
        }

        $deal->update($data);
        return redirect()->route('deals.index')->with('alert', [
            'type' => 'success',
            'msg' => 'Deal updated'
        ]);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deal $deal)
    {
        $deal->delete();
        return redirect()->route('deals.index')->with('alert', [
            'type' => 'success',
            'msg' => 'Deal deleted'
        ]);
    }
}
