<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $guarded = array('id');

  // 以下を追記
  public static $rules = array(
      'body' => 'required',
    );
}
