<?php

/**
 * Created by YLL Co Inc.
 * User: NiZerin
 * Email: nzl199851@163.com
 * Blog: nizer.in
 * Date: 5/29/2020
 * Time: 3:22 PM
 * FileName: Company.php
 */


namespace App\Model;



class CompanyModel extends BaseModel
{
    protected $fillable = ['province_id','name', 'address', 'legal'];
    protected $table = 'bcl_company';
}