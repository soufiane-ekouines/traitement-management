<?php

declare(strict_types=1);

namespace App\GraphQL\Mutations\Test;

use App\Models\Test;
use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Mutation;
use Rebing\GraphQL\Support\SelectFields;

class UpdateTestMutation extends Mutation
{
    protected $attributes = [
        'name' => 'updateTest',
        'description' => 'Updates a Test'
    ];

    public function type(): Type
    {
        return GraphQL::type('Test');
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
        ];
    }

    public function resolve($root, $args)
    {
        $Test = Test::findOrFail($args['id']);
        $Test->fill($args);
        $Test->save();

        return $Test;
    }
}
