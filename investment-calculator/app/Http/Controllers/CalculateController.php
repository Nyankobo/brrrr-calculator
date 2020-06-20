<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\PurchaseInfo;
use App\Models\RentalInfo;
use App\Models\Report;

class CalculateController extends Controller
{
    /**
     * Sanitize and save form inputs
     * @return View
     * */
    public function index(Request $request)
    {
        // Create Property
        $propertyCols = Schema::getColumnListing('property');
        $property = Property::firstOrCreate($request->only($propertyCols));

        // Create Report
        $report = Report::create([
            'name' => $request->input('report_title'),
            'property_id' => $property->id
        ]);

        // Add Purchase Info
        $purchaseCols = Schema::getColumnListing('purchase_info');
        $purchase = PurchaseInfo::Create($request->only($purchaseCols));
        $purchase->property_id = $property->id;
        $purchase->save();

        // Add Rental Info
        $rentalCols = Schema::getColumnListing('rental_info');
        $rental_inputs = $request->only($rentalCols);
        $rental_inputs['is_cash_purchase'] = $rental_inputs['is_cash_purchase'] == "on" ? 1 : 0;
        $rental_inputs['is_pmi_included'] = $rental_inputs['is_pmi_included'] == "on" ? 1 : 0;

        $rental = RentalInfo::Create($rental_inputs);
        $rental->property_id = $property->id;
        $rental->save();

        return redirect("/results/" . $report->id);
    }

    /**
     * Display results
     * @return View
     * */
    public function results($id)
    {
        $report = Report::find($id);

        return view('/results', ['report' => $report]);
    }
}
