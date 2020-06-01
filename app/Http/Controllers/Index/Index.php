<?php

/**
 * Created by YLL Co Inc.
 * User: NiZerin
 * Email: nzl199851@163.com
 * Blog: nizer.in
 * Date: 5/29/2020
 * Time: 2:17 PM
 * FileName: Index.php
 */


namespace App\Http\Controllers\Index;


use App\Http\Controllers\Controller;
use App\Model\BlackMsgModel;
use App\Model\CompanyModel;
use App\Model\ProvinceModel;

/**
 * Class Index
 *
 * @package App\Http\Controllers\Index
 */
class Index extends Controller
{

    /**
     * 主页
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('home.index.index', [
            'provinces' => ProvinceModel ::query() -> get()
        ]);
    }

    /**
     * 清除负面
     */
    public function reset()
    {
        return view('home.index.reset');
    }

    /**
     * 数据统计
     */
    public function data()
    {
        $provinces = ProvinceModel ::query()
            -> select(['province_id', 'province_name'])
            -> get()
            -> toArray();

        foreach ($provinces as $k => $v) {
            $provinces[$k]['company_count'] = CompanyModel::query()
                -> where('province_id', $v['province_id'])
                -> count();

            $provinces[$k]['black_count'] = BlackMsgModel::query()
                -> join('bcl_company', 'bcl_black_msg.company_id', '=', 'bcl_company.id')
                -> join('bcl_provinces', 'bcl_company.province_id', '=', 'bcl_provinces.province_id')
                -> where('bcl_company.province_id', $v['province_id'])
                -> count();

            $provinces[$k]['real_count'] = BlackMsgModel::query()
                -> join('bcl_company', 'bcl_black_msg.company_id', '=', 'bcl_company.id')
                -> join('bcl_provinces', 'bcl_company.province_id', '=', 'bcl_provinces.province_id')
                -> where('bcl_company.province_id', $v['province_id'])
                -> sum('bcl_black_msg.real_nums');

            $provinces[$k]['fake_count'] = BlackMsgModel::query()
                -> join('bcl_company', 'bcl_black_msg.company_id', '=', 'bcl_company.id')
                -> join('bcl_provinces', 'bcl_company.province_id', '=', 'bcl_provinces.province_id')
                -> where('bcl_company.province_id', $v['province_id'])
                -> sum('bcl_black_msg.fake_nums');
        }

        return view('home.index.data', [
            'provinces' => $provinces
        ]);
    }

    /**
     * 关于本站
     */
    public function about()
    {
       return view('home.index.about');
    }
}