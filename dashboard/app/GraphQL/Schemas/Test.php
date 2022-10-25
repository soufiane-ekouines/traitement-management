<?php

namespace App\GraphQL\Schemas;

use Rebing\GraphQL\Support\Contracts\ConfigConvertible;

class Test implements ConfigConvertible
{
    public function toConfig(): array
    {
        return [
            'query' => [
                // ExampleQuery::class,
            ],

            'mutation' => [
                // ExampleMutation::class,
            ],

            'types' => [
                // ExampleType::class,
            ],
        ];
    }
}
