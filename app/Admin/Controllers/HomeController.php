<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('看版')
            ->description('杯波的後台')
            ->row(Dashboard::title())       //使用row去填入(row 是 body的別名 也可以用body)
            ->row('aaa world')              
            ->body('hello')
            
            ->row(function (Row $row) {     //Row $row 是把一個空間用下面的$row->column分成"列"幾等分
                                            //總共是12 所以它分成3等分
                $row->column(4, function (Column $column) {     //Column $column依造陣列大小分成"行"幾等分
                    $column->append(Dashboard::environment());  //用append去依造回傳資料分成"行"幾等分
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::extensions());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::dependencies());
                });
            });
    }
}
