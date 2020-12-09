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
//            $consignment->totalConsignmentAmount = $request->totalConsignmentAmount;
            #amount added for the total amount productPrice + delivery charge
            $consignment->totalConsignmentAmount = $request->productPrice + $request->deliveryCharge;
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

    #Consignment Allocation to pp manager
    public function consignmentAllocationToPpManager()
    {
        $consignments = DB::table('consignments as c')
            ->join('merchant_registers as m', 'c.merchantId', '=', 'm.id')
            ->join('zones as z', 'c.zoneId', '=', 'z.id')
            ->select('*', 'c.merchantId as merchantId', 'c.id as cId', 'm.id as mId', 'm.f_name as merchantFirstName', 'm.M_name as merchantMiddleName', 'm.l_name as merchantLastName', 'c.zoneId as consignmentZoneId', 'z.id as zoneId')
            ->whereNull('c.pickupPointManagerId')
            ->orWhere('c.pickupPointManagerId', '=', '')
            ->get();
        $merchants = DB::table('consignments as con')
            ->join('merchant_registers as mer', 'con.merchantId', '=', 'mer.id')
            ->distinct()
            ->get(['con.merchantId as merchantId', 'mer.id as mId', 'mer.f_name as merchantFirstName', 'mer.b_name', 'mer.M_name as merchantMiddleName', 'mer.l_name as merchantLastName']);
        return view('consignmentAllocationToPPManager',
            ['consignments' => $consignments]
            , ['merchants' => $merchants]
        );
    }

    /**
     * @param Request $request
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     */

    public function assignToPPManager(Request $request, $cId)
    {
        $pickupPointManagerId = $request->input('pickupPointManagerId');
        $updateQuery = DB::UPDATE("update consignments set pickupPointManagerId='$pickupPointManagerId' where id='$cId'");
        if ($updateQuery) {
            return redirect('consignment-allocation-to-pp-manager')
                ->with('success', 'Assigned Successfully.');
        }
        return redirect('consignment-allocation-to-pp-manager')
            ->with('error', 'Some Errors occurs while assigning.');
    }


    /* Consignment Receiver */
    public function consignmentReceiver()
    {
//        DB::enableQueryLog();
        $pickupPointManagerSessionId = 9;
        $consignments = DB::table('consignments as c')
            ->join('merchant_registers as m', 'c.merchantId', '=', 'm.id')
            ->join('zones as z', 'c.zoneId', '=', 'z.id')
            ->select('*', 'c.merchantId as merchantId', 'c.id as cId', 'm.id as mId', 'm.f_name as merchantFirstName', 'm.M_name as merchantMiddleName', 'm.l_name as merchantLastName', 'c.zoneId as consignmentZoneId', 'z.id as zoneId')
            ->where('pickupPointManagerId', '=', $pickupPointManagerSessionId)
            ->whereNull('managerStatus')
            ->orWhere('managerStatus', '=', '')
            ->get();
//        dd(DB::getQueryLog());


        $consignmentsReceived = DB::table('consignments as c')
            ->join('merchant_registers as m', 'c.merchantId', '=', 'm.id')
            ->join('zones as z', 'c.zoneId', '=', 'z.id')
            ->select('*', 'c.merchantId as merchantId', 'c.id as cId', 'm.id as mId', 'm.f_name as merchantFirstName', 'm.M_name as merchantMiddleName', 'm.l_name as merchantLastName', 'c.zoneId as consignmentZoneId', 'z.id as zoneId')
            ->where('pickupPointManagerId', '=', $pickupPointManagerSessionId)
            ->whereNotNull('managerStatus')
            ->get();
        return view('ConsignmentReceiver', compact('consignments','consignmentsReceived'));
    }

    /**
     * @param Request $request
     * @param $cId
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function changeConsignmentReceivedStatus(Request $request, $cId)
    {
        $managerStatus = $request->input('managerStatus');

        $updateQuery = DB::UPDATE("update consignments set managerStatus='$managerStatus' where id='$cId'");
        if ($updateQuery) {
            return redirect('consignment-receiver')
                ->with('success', 'Status Updated Successfully');
        }
        return redirect('consignment-receiver')
            ->with('error', 'Some Errors occurs while Updating Status.');
    }

}
