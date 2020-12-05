<?php

namespace App\Http\Controllers;

use App\Consignment;
use App\Zone;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;

class ConsignmentController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        $zones = Zone::all();
        $consignments = Consignment::latest()->paginate(10);
        return view('ConsigmentEntry', compact('zones') , compact('consignments'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        try {
            //custom tracking id generated
            $trackingId = IdGenerator::generate(['table' => 'consignments', 'field' => 'trackingId', 'length' => 10, 'prefix' => 'CON-']);
            $consignment = new Consignment();
            $consignment->invoiceNo = $request->invoiceNo;
            $consignment->customerName = $request->customerName;
            $consignment->customerAddress = $request->customerAddress;
            $consignment->customerPhoneNumber = $request->customerPhoneNumber;
            $consignment->productName = $request->productName;
            $consignment->productPrice = $request->productPrice;
            $consignment->weight = $request->weight;
            $consignment->deliveryCharge = $request->deliveryCharge;
            $consignment->totalAmount = $request->totalConsignmentAmount;
            $consignment->remark = $request->remarks;
            $consignment->zoneId = $request->zoneId;
            $consignment->trackingId = $trackingId;
            $consignment->merchantId = 9;
            $consignment->save();
            return redirect()
                ->back()
                ->with('success', 'Consignment Created Successfully..!!');
        } catch (\Exception $e) {
//                return redirect('/employee')->with('failed', "Failed to register please try after sometime !!");
//            echo $e->getMessage(); #get exception message
            return redirect()->back()->with('error', 'Failed to create consignment, please try after sometime !!');
        }
    }
}
