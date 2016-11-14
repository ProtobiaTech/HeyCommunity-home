<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use HipsterJazzbo\Landlord\BelongsToTenant;

class TimelineImg extends Model
{
    use SoftDeletes;
    use BelongsToTenant;

    /**
     *
     */
    public static function getImgs($imgs)
    {
        $imgs = json_decode($imgs);
        if (is_array($imgs)) {
            $ret = [];
            foreach ($imgs as $imgId) {
                $ret[] = TimelineImg::findOrFail($imgId);
            }
            return $ret;
        } else {
            return [];
        }
    }

    /**
     *
     */
    public static function getImgUrl($url)
    {
        $pattern = '/^http[s]?:\/\/.*/';
        if (preg_match($pattern, $url)) {
            return $url;
        } else {
            $domain = '//public.hey-community.cn/';
            return $domain . $url;
        }
    }
}
