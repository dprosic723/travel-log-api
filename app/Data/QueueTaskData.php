<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class QueueTaskData extends Data
{
    public function __construct(
       #[Required, in('queued', 'running', 'success', 'failure')]
        public string $status,
       #[Nullable, NumberType]
        public ?float $progress,
    ) {}
}
