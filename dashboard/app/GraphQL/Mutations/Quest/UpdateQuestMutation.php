<?php

declare(strict_types=1);

namespace App\GraphQL\Mutations\Quest;

use App\Models\Quest;
use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Mutation;
use Rebing\GraphQL\Support\SelectFields;

class UpdateQuestMutation extends Mutation
{
    protected $attributes = [
        'name' => 'updateQuest',
        'description' => 'Updates a quest'
    ];

    public function type(): Type
    {
        return GraphQL::type('Quest');
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' =>  Type::nonNull(Type::int()),
            ],
            'title' => [
                'name' => 'title',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'description' => [
                'name' => 'description',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'reward' => [
                'name' => 'reward',
                'type' => Type::nonNull(Type::int()),
            ],
            'test_id' => [
                'name' => 'test_id',
                'type' => Type::nonNull(Type::int()),
                'rules' => ['exists:tests,id']
            ]
        ];
    }

    public function resolve($root, $args)
    {
        $quest = Quest::findOrFail($args['id']);
        $quest->fill($args);
        $quest->save();

        return $quest;
    }
}
