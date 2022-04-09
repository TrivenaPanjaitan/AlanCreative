<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillDetails extends Model
{
    use HasFactory;
    protected $table = 'bill_details';
    protected $fillable = [
        'name',
        'qty',
        'price',
    ];

    public function bill()
    {
        return $this->belongsTo(Bill::class, 'bills');
    }
}
