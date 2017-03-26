<?php

namespace revenue;

use Illuminate\Database\Eloquent\Model;

class Motorbike extends Model
{
    protected $fillable = ['owner_name', 'gender', 'motorbike_reg', 'logbook_no', 'dop', 'phone'];

    public function revenues() {
      return $this->hasMany('revenue\Revenue');
    }
}
