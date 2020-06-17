<?php

/**
 * Created by YLL Co Inc.
 * User: NiZerin
 * Email: nzl199851@163.com
 * Blog: nizer.in
 * Date: 5/30/2020
 * Time: 11:52 AM
 * FileName: Message.php
 */


namespace App\Http\Controllers\Index;


use App\Http\Controllers\Controller;
use App\Model\BlackMsgModel;
use App\Model\CompanyModel;
use Exception;

/**
 * 爆料
 * Class Message
 *
 * @package App\Http\Controllers\Index
 */
class Message extends Controller
{

    /**
     * @param  int  $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function list(int $id)
    {
        $messages = BlackMsgModel ::query()
            -> where('company_id', $id)
            -> orderByDesc('id')
            -> get();

        return view('home.message.list', [
            'messages' => $messages
        ]);
    }

    /**
     * @param  int  $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add(int $id)
    {
        return view('home.message.add', [
            'id' => $id
        ]);
    }

    /**
     * @param  int  $id
     *
     * @return array
     */
    public function save(int $id)
    {
        $data = html_charset();
        $data['from_ip'] = request()->ip();

        try {
            BlackMsgModel ::query() -> create($data);
            CompanyModel ::query() -> where('id', $id) -> increment('black_nums');

            return ['code' => 0, 'data' => [], 'msg' => 'success'];
        } catch (Exception $exception) {
            return ['code' => 1, 'data' => [], 'msg' => $exception -> getMessage()];
        }
    }

    /**
     * @param  int  $id
     *
     * @return array
     */
    public function real(int $id)
    {
        return $this->increment('real', $id);
    }

    /**
     *
     * @param  int  $id
     *
     * @return array
     */
    public function fake(int $id)
    {
       return $this->increment('fake', $id);
    }

    /**
     * @param  string  $type
     * @param  int  $id
     *
     * @return array
     */
    protected function increment(string $type, int $id)
    {
        try {
            BlackMsgModel ::query() -> where('id', $id) -> increment($type.'_nums');
            $fake = BlackMsgModel ::query() -> where('id', $id) -> value($type.'_nums');

            return ['code' => 0, 'data' => ['nums' => $fake], 'msg' => 'success'];
        } catch (Exception $exception) {
            return ['code' => 1, 'data' => [], 'msg' => $exception -> getMessage()];
        }
    }
}
