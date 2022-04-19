<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Seller;
use App\Models\SellerProductCategory;
use App\Models\SellerOrderDetail;

class SellerProduct extends Model
{
    use HasFactory;

    public function sellerProductBelongsToSeller(){
        return $this->belongsTo(Seller::class,'s_id','id');
    }

    public function sellerProductHasOneSellerProductCategory(){
        return $this->hasOne(SellerProductCategory::class,'id','ct_id');
    }

    public function sellerProductHasManyOrderDetail(){
        $this->hasMany(SellerOrderDetail::class,'o_id', 'id');
    }
}
