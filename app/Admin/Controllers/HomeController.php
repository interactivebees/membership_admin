<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Facades\Admin;


class HomeController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {
            $data = [
                [
                    'id'   => 1,
                    'name' => 'Regular HelthCare Professional',
                    'count'=> 2389
                ],
                [
                    'id'   => 2,
                    'name' => 'Associate HelthCare Professional',
                    'count'=> 389
                ],
                [
                    'id'   => 3,
                    'name' => 'Regular Quality Professional',
                    'count'=> 989
                ],
                [
                    'id'   => 4,
                    'name' => 'Associate Quality Professional',
                    'count'=> 5639
                ],
                [
                    'id'   => 5,
                    'name' => 'Regular HelthCare Professional',
                    'count'=> 2389
                ],
                [
                    'id'   => 6,
                    'name' => 'Associate HelthCare Professional',
                    'count'=> 389
                ],
                [
                    'id'   => 7,
                    'name' => 'Regular Quality Professional',
                    'count'=> 989
                ],
                [
                    'id'   => 8,
                    'name' => 'Associate Quality Professional',
                    'count'=> 5639
                ]
            ];
            $content->title('Dashboard');
            $content->header('Dashboard');
            // $content->description('Description.....');
            $content->body(view('admin.charts.bar',compact('data')));
        });
    }




    // public function index(Content $content)
    // {
    //     return $content
    //         ->title('Dashboard')
    //         ->description('Description...')
    //         ->row(Dashboard::title())
    //         ->row(function (Row $row) {

    //             $row->column(4, function (Column $column) {
    //                 $column->append(Dashboard::environment());
    //             });

    //             $row->column(4, function (Column $column) {
    //                 $column->append(Dashboard::extensions());
    //             });

    //             $row->column(4, function (Column $column) {
    //                 $column->append(Dashboard::dependencies());
    //             });
    //         });
    // }
}
