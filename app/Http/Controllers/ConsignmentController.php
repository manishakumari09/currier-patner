<?php

namespace App\Http\Controllers;

use App\Consignment;
use App\Employee;
use App\Zone;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsignmentController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        $zones = Zone::all();
        $consignments = Consignment::latest()->paginate(10);
        return view('ConsigmentEntry', compact('zones'), compact('consignments'));
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
//            $consignment->totalAmount = $request->totalConsignmentAmount;
            #amount added for the total amount productPrice + delivery charge
            $consignment->totalAmount = $request->productPrice + $request->deliveryCharge;
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

    public function consignmentAllocationToDeliveryBoy()
    {
        $consignments = Consignment::all();
        $employees = Employee::all()->where('employeeType', '=', 'ROLE_DELIVERY_BOY');
        return view('ConsignmentAllocationToDeliveryBoy', compact('consignments', 'employees'));
    }

    public function consignmentAllocationToDeliveryBoyProcess(Request $request)
    {
        return null;
    }

    public function consginmentAllocationToPpManager()
    {
//        DB::enableQueryLog(); // Enable query log
        $consignments = DB::table('consignments as c')
            ->select('*', 'c.merchantId as merchantId','c.id as cId','m.id as merchantId', 'c.zoneId as consignmentZoneId', 'z.id as zoneId')
            ->join('merchant_registers as m', 'c.merchantId', '=', 'm.id')
            ->join('zones as z', 'c.zoneId', '=', 'z.id')
            ->whereNull('c.pickupPointManagerId')
            ->get();
        // Your Eloquent query executed by using get()
       //  dd(DB::getQueryLog()); // Show results of log
        return view('consignmentAllocationToPPManager', ['consignments' => $consignments]);
    }
}
