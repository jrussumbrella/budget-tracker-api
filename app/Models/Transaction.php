<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['amount', 'category_id', 'type', 'title'];


    public function getAmountAttribute() {
        return $this->attributes['amount'] / 100;
    }

    public function setAmountAttribute($val) {
        return $this->attributes['amount'] = $val * 100;
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }


}
