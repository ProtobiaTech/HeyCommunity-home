<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Khill\Lavacharts\Lavacharts;

use App\Timeline;
use App\TimelineImg;
use App\TimelineLike;
use App\TimelineComment;
use App\User;
use App\Notice;
use Carbon\Carbon;


class TrendController extends Controller
{
    /**
     *
     */
    public $lava;

    /**
     *
     */
    public function __construct()
    {
        $this->lava = new Lavacharts;
    }

    /**
     *
     */
    public function index()
    {
        $dataTable = $this->lava->DataTable();

        $timelines = Timeline::get()->sortBy('created_at')->groupBy(function($d) {
            return Carbon::parse($d->created_at)->format('Ymd');
        });

        $timelineImgs = TimelineImg::get()->sortBy('created_at')->groupBy(function($d) {
            return Carbon::parse($d->created_at)->format('Ymd');
        });

        $timelineLikes = TimelineLike::get()->sortBy('created_at')->groupBy(function($d) {
            return Carbon::parse($d->created_at)->format('Ymd');
        });

        $timelineComments = TimelineComment::get()->sortBy('created_at')->groupBy(function($d) {
            return Carbon::parse($d->created_at)->format('Ymd');
        });

        $users = User::get()->sortBy('created_at')->groupBy(function($d) {
            return Carbon::parse($d->created_at)->format('Ymd');
        });

        $notices = Notice::get()->sortBy('created_at')->groupBy(function($d) {
            return Carbon::parse($d->created_at)->format('Ymd');
        });


        $dataTable->addDateColumn('date');
        $dataTable->addNumberColumn('Timeline');
        $dataTable->addNumberColumn('TimelineImg');
        $dataTable->addNumberColumn('TimelineLike');
        $dataTable->addNumberColumn('TimelineComment');
        $dataTable->addNumberColumn('User');
        $dataTable->addNumberColumn('Notice');
        for ($i = -30; $i <= 0; $i++) {
            $date = Carbon::now()->addDays($i)->format('Ymd');

            $timelineNum = isset($timelines[$date]) ? $timelines[$date]->count() : 0;
            $timelineImgNum = isset($timelineImgs[$date]) ? $timelineImgs[$date]->count() : 0;
            $timelineLikeNum = isset($timelineLikes[$date]) ? $timelineLikes[$date]->count() : 0;
            $timelineCommentNum = isset($timelineComments[$date]) ? $timelineComments[$date]->count() : 0;
            $userNum = isset($users[$date]) ? $users[$date]->count() : 0;
            $noticeNum = isset($notices[$date]) ? $notices[$date]->count() : 0;

            $dataTable->addRow([$date, $timelineNum, $timelineImgNum, $timelineLikeNum, $timelineCommentNum, $userNum, $noticeNum]);
        }

        $this->lava->LineChart('AllTrend', $dataTable, [
            'legend' => [
                'position' => 'in'
            ],
            'width'     =>  848,
        ]);

        return view('dashboard.trend.index', ['lava' => $this->lava]);
    }

    /**
     *
     */
    public function getDataTable($data, $chartName)
    {
    }
}
