<?php

namespace App\Http\Controllers;


use App\Models\Sale;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    //

    public function index(){
        return view('director.sales');
    }

    public function store(Request $request)
{
    // Validate the incoming data from the form
    $validatedData = $request->validate([
        'date' => [
            'required',
            'date',
            function ($attribute, $value, $fail) {
                // Check if a sales record already exists for the given date
                $existingSale = Sale::where('date', $value)->first();
                if ($existingSale) {
                    $fail('A sales record for this date already exists.');
                }
            },
        ],
        'amount' => 'required|numeric',
    ]);

    // Create a new sales record in the database
    Sale::create([
        'date' => $validatedData['date'],
        'sales_amount' => $validatedData['amount'],
    ]);

    // Redirect back with a success message or perform other actions as needed
    return redirect()->back()->with('success', 'Sales record added successfully!');
}

public function allSales()
{
    // Retrieve all sales records from the database
    $salesRecords = Sale::all();

    // Pass the sales records to the view
    return view('director.allsales', compact('salesRecords'));
}

public function edit($id)
{
    // Fetch the sales record by its ID
    $salesRecord = Sale::find($id);

    // Add logic to display an edit form or page for the sales record
    // For example, return a view with the edit form
    return view('director.edit_sales', compact('salesRecord'));
}

public function update(Request $request, $id)
{
    // Validate the incoming data
    $validatedData = $request->validate([
        'date' => 'required|date',
        'amount' => 'required|numeric',
    ]);

    try {
        // Find the sales record by ID
        $salesRecord = Sale::findOrFail($id);

        // Update the sales record with the validated data
        $salesRecord->update([
            'date' => $validatedData['date'],
            'sales_amount' => $validatedData['amount'],
        ]);

        return redirect()->route('sales.allsales')->with('success', 'Sales record updated successfully.');
    } catch (\Exception $e) {
        return redirect()->route('sales.allsales')->with('error', 'Error updating sales record.');
    }
}

}
