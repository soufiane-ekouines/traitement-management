<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use App\Models\Quest;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class QuestType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Quest',
        'description' => 'Collection of quests with their respective test',
        'model' => Quest::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'ID of quest'
            ],
            'title' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Title of the quest'
            ],
            'description' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Description of quest'
            ],
            'reward' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Quest reward'
            ],
            'test' => [
                'type' => GraphQL::type('Test'),
                'description' => 'The test of the quest'
            ]
        ];
    }
}
