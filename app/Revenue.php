<?php

namespace revenue;

use Illuminate\Database\Eloquent\Model;

class Revenue extends Model
{
  protected $fillable=['motorbike_id', 'amount', 'month'];
  public function motorbike() {
    return $this->belongsTo('revenue\Motorbike');
  }
}
