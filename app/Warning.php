<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warning extends Model
{
    protected $fillable = ['product_id', 'message_en', 'message_ar', 'seen'];

    public function product() {
        $lang = session()->get('locale');
        return $this->belongsTo('App\Product', 'product_id')->select('id', 'title_' . $lang . ' as title');
    }
}
