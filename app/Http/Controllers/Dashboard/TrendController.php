<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use App\Timeline;
use App\TimelineImg;
use App\TimelineLike;
use App\TimelineComment;
use App\User;
use App\Notice;
use App\Dataset;


class TrendController extends Controller
{
    /**
     *
     */
    public function allTenantTrend(Request $request)
    {
        $datasets[] = new Dataset('Timeline', 'rgba(115,19,12,0.8)');
        $dataSources[] = Timeline::allTenants()->get()->sortBy('created_at')->groupBy(function($d) {
            return Carbon::parse($d->created_at)->format('Ymd');
        });

        $datasets[] = new Dataset('TimelineImg', 'rgba(115,222,12,0.4)');
        $dataSources[] = TimelineImg::allTenants()->get()->sortBy('created_at')->groupBy(function($d) {
            return Carbon::parse($d->created_at)->format('Ymd');
        });

        $datasets[] = new Dataset('TimelineLike', 'rgba(222,99,12,0.4)');
        $dataSources[] = TimelineLike::allTenants()->get()->sortBy('created_at')->groupBy(function($d) {
            return Carbon::parse($d->created_at)->format('Ymd');
        });

        $datasets[] = new Dataset('TimelineComment', 'rgba(115,19,221,0.4)');
        $dataSources[] = TimelineComment::allTenants()->get()->sortBy('created_at')->groupBy(function($d) {
            return Carbon::parse($d->created_at)->format('Ymd');
        });

        $datasets[] = new Dataset('User', 'rgba(75,99,9,0.4)');
        $dataSources[] = User::allTenants()->get()->sortBy('created_at')->groupBy(function($d) {
            return Carbon::parse($d->created_at)->format('Ymd');
        });

        $datasets[] = new Dataset('Notice', 'rgba(5,19,132,0.4)');
        $dataSources[] = Notice::allTenants()->get()->sortBy('created_at')->groupBy(function($d) {
            return Carbon::parse($d->created_at)->format('Ymd');
        });


        for ($i = -30; $i <= 0; $i++) {
            $date = Carbon::now()->addDays($i)->format('Ymd');
            $label[] = $date;

            foreach ($datasets as $key => $dataset) {
                $dataset->data[] = isset($dataSources[$key][$date]) ? $dataSources[$key][$date]->count() : 0;
            }
        }

        return [
            'label'     =>  $label,
            'datasets'  =>  $datasets,
        ];
    }

    /**
     *
     */
    public function myTrend(Request $request)
    {
        $datasets[] = new Dataset('Timeline', 'rgba(115,19,12,0.4)');
        $dataSources[] = Timeline::get()->sortBy('created_at')->groupBy(function($d) {
            return Carbon::parse($d->created_at)->format('Ymd');
        });

        $datasets[] = new Dataset('User', 'rgba(75,99,9,0.4)');
        $dataSources[] = User::get()->sortBy('created_at')->groupBy(function($d) {
            return Carbon::parse($d->created_at)->format('Ymd');
        });

        $datasets[] = new Dataset('Notice', 'rgba(5,19,132,0.4)');
        $dataSources[] = Notice::get()->sortBy('created_at')->groupBy(function($d) {
            return Carbon::parse($d->created_at)->format('Ymd');
        });


        for ($i = -30; $i <= 0; $i++) {
            $date = Carbon::now()->addDays($i)->format('Ymd');
            $label[] = $date;

            foreach ($datasets as $key => $dataset) {
                $dataset->data[] = isset($dataSources[$key][$date]) ? $dataSources[$key][$date]->count() : 0;
            }
        }

        return [
            'label'     =>  $label,
            'datasets'  =>  $datasets,
        ];
    }
}
