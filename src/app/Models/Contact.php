<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'gender',
        'email',
        'postcode',
        'address',
        'building_name',
        'opinion'
    ];

    public function scopeSearch($query, $searchParams)
    {
        if (!empty($searchParams['fullname'])) {
            $query->where('fullname', 'like', '%' . $searchParams['fullname'] . '%');
        }

        if (!empty($searchParams['gender'])) {
            $query->where('gender', $searchParams['gender']);
        }

        if (!empty($searchParams['created_at'])) {
            $query->where('created_at', $searchParams['created_at']);
        }

        if (!empty($searchParams['email'])) {
            $query->where('email', 'like', '%' . $searchParams['email'] . '%');
        }

        return $query;
    }
}
