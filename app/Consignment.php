<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consignment extends Model
{
    protected $table = 'consignments';
    public $timestamps = true;
    /**
     * @var mixed
     */
    protected $fillable = [
        'invoiceNo',
        'customerName',
        'customerAddress',
        'customerPhoneNumber',
        'productName',
        'productPrice',
        'weight',
        'deliveryCharge',
        'totalConsignmentAmount',
        'remark',
        'zoneId',
        'trackingId',
        'merchantId',
    ];
}
