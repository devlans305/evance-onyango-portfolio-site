<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvanceController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        return view('evance.index');
    }

    // Show the form for creating a new resource
    public function create()
    {
        return view('evance.create');
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        // Validation and storage logic
    }

    // Display the specified resource
    public function show($id)
    {
        // Fetch and show a specific resource by $id
    }

    // Show the form for editing the specified resource
    public function edit($id)
    {
        return view('evance.edit');
    }

    // Update the specified resource in storage
    public function update(Request $request, $id)
    {
        // Update logic
    }

    // Remove the specified resource from storage
    public function destroy($id)
    {
        // Delete logic
    }
}
