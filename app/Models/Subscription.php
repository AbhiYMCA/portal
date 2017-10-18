<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    /**
     * {@inheritdoc}
     */
    protected $table = 'subscriptions';

    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'subscriptionable_id',
        'subscriptionable_type',
    ];
}
