<?php

namespace App\Data;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\Validation\In;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Attributes\Validation\Date;
use Spatie\LaravelData\Attributes\Validation\StringType;
use Spatie\LaravelData\Attributes\Validation\Nullable;

class TravelLogData extends Data
{
    public function __construct(
        #[Required, In('flight', 'rail', 'car', 'hotel')]
        public string $type,

        #[Required, Date]
        public string $departureDate,

        #[Required, Date]
        public string $arrivalDate,

        #[Nullable, StringType]
        public ?string $departurePlace,

        #[Nullable, StringType]
        public ?string $arrivalPlace,

        #[Nullable, StringType]
        public ?string $accommodationPlace,

        #[Nullable, StringType]
        public ?string $comment,
    ) {}
}