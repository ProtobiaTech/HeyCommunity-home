<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use HipsterJazzbo\Landlord\BelongsToTenant;

class TenantInfo extends Model
{
    use SoftDeletes;
    use BelongsToTenant;

    /**
     * Related User
     */
    public function tenant()
    {
        return $this->belongsTo('App\Tenant', 'tenant_id');
    }
}
