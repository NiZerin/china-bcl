<?php

/**
 * Created by YLL Co Inc.
 * User: NiZerin
 * Email: nzl199851@163.com
 * Blog: nizer.in
 * Date: 5/29/2020
 * Time: 5:00 PM
 * FileName: BlackMsgModel.php
 */


namespace App\Model;


class BlackMsgModel extends BaseModel
{
    protected $fillable = ['company_id','content'];
    protected $table = 'bcl_black_msg';
}