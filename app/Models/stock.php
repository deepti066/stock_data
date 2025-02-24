<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class stock extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'category', 'item-description', 'item-serial-number', 'quantity', 'invoice-number', 'vendor-challan-number', 'supplier-name', 'project-name', 'receiver-name', 'requester-name', 'approved-by'];
}
