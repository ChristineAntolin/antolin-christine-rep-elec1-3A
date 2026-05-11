<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Sale extends Model
{
    use HasFactory;
    protected $table = 'sales';
 
    protected $fillable = [
        'amount',
        'category',
        'sale_date',
    ];
 
    protected $casts = [
        'amount'    => 'decimal:2',
        'sale_date' => 'date',
    ];
}