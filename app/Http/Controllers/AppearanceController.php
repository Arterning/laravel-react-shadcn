<?php

namespace App\Http\Controllers;

use App\Models\Appearance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;

class AppearanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // return response('Hello, World!');
        return Inertia::render('Demo1');
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
        //
        Log::info('This is an informational message.');

        Log::info('Request Data:', $request->all());  // 打印所有输入的数据

        // 或者打印整个请求对象为 JSON 格式
        $validated = $request->validate([
            'sex'=> 'required',
            'height'=> 'required',
            'weight'=> 'required',
            'age'=> 'required',
            'message' => 'required|string|max:255',
        ]);
        Log::info('validated:', ['validated' => $validated]);

        Appearance::create($validated);

        return redirect(route('appearance.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Appearance $appearance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appearance $appearance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appearance $appearance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appearance $appearance)
    {
        //
    }
}
