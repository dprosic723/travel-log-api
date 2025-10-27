<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelLog extends Model
{
        use HasFactory, HasUuids;
        public $incrementing = false;
        public $keytype = 'string';

        protected $fillable = [
            'type',
            'departure_date',
            'arrival_date',
            'departure_place',
            'arrival_place',
            'accommodation_place',
            'comment'
        ];
}
