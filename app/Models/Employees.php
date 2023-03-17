<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Companies;

class Employees extends Model
{
    use HasFactory;
    protected $fillable =[
        'employee_name',
        'company_id',
        'employee_email',
        'employee_phone',
    ];
    public function Companiee(){
       return $this->belongsTo(Companies::class, 'company_id');
    }
}
