<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'date', 
        'category', 
        'item_description', 
        'item_serial_number', 
        'quantity', 
        'invoice_number', 
        'vendor_challan_number', 
        'supplier_name', 
        'project_name', 
        'receiver_name', 
        'requester_name', 
        'approved_by',
    ];
}
