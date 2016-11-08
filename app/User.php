<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use HipsterJazzbo\Landlord\BelongsToTenant;

class User extends Model
{
    use SoftDeletes;
    use BelongsToTenant;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Related Timeline
     */
    public function timelines()
    {
        return $this->hasMany('App\Timeline', 'user_id')->orderBy('created_at', 'desc')->with('author');
    }

    /**
     * Related TimelineLike
     */
    public function timelineLikes()
    {
        return $this->hasMany('App\TimelineLike', 'user_id')->orderBy('created_at', 'desc')->with('author');
    }

    /**
     * Related TimelineComment
     */
    public function timelineComments()
    {
        return $this->hasMany('App\TimelineComment', 'user_id')->orderBy('created_at', 'desc')->with('author');
    }

    /**
     *
     */
    public static function getAvatarUrl($url)
    {
        return TimelineImg::getImgUrl($url);
    }
}
