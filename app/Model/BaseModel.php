<?php

/**
 * Created by YLL Co Inc.
 * User: NiZerin
 * Email: nzl199851@163.com
 * Blog: nizer.in
 * Date: 5/29/2020
 * Time: 3:25 PM
 * FileName: BaseModel.php
 */


namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BaseModel extends Model
{
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    use SoftDeletes;

    protected $dateFormat = 'U';
    public $timestamps = true;
    public $incrementing = true;

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    public function getUpdatedAtAttribute($value)
    {
        return $this -> getDateTime($value);
    }

    public function getCreatedAtAttribute($value)
    {
        return $this -> getDateTime($value);
    }

    protected function getDateTime($value)
    {
        if (is_string($value)) $value = strtotime($value);
        return date("Y-m-d H:i:s", $value);
    }
}