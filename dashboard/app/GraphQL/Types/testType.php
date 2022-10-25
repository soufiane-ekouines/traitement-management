<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use App\Models\Test;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;


class testType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Test',
        'description' => 'Collection of type',
        'model' => Test::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::int(),
                'description' => 'ID of quest'
            ],
            'title' => [
                'type' => Type::string(),
                'description' => 'Title of the quest'
            ],
            'quests' => [
                'type' => Type::listOf(GraphQL::type('Quest')),
                'description' => 'List of quests'
            ]
        ];
    }
}
