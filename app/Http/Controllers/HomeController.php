<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function home()
    {
        $data = DB::table('products')->where('id', '<=', 8)->get();
        return view('home', ['product' => $data]);

        $data = DB::table('products')->get();;
        if (\Illuminate\Support\Facades\Auth::check()) {
            if (auth()->user()->type == 0) {
                $m_data = DB::table('members')->get();//取得目前的members資料表
                foreach ($m_data as $m_datas) {//判斷目前的members資料表有沒有該使用者
                    $uid = $m_datas->user_id;
                    if ($uid == auth()->user()->id) {

                        $insert = 1;//有的話為1
                    } else {
                        $aru = 0;//沒有為0
                        $tel = '0' . $mytel;
                    }
                }
                if ($insert == 0) {//如果沒有就新增

                    DB::table('members')->insert(
                        [

                            'user_id' => auth()->user()->id,


                        ]
                    );
                }
            }
        }
    }
}
