<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Seller;

class SellerType extends Model
{
    use HasFactory;

    public function sellerTypeBelongsToSeller(){
        return $this->belongsTo(Seller::class,'s_id','id');
    }
}
