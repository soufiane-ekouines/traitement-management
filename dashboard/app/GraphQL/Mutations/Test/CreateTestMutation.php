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

class CreateTestMutation extends Mutation
{
    protected $attributes = [
        'name' => 'createTest',
        'description' => 'Creates a Test'
    ];

    public function type(): Type
    {
        return GraphQL::type('Test');
    }

    public function args(): array
    {
        return [
            'title' => [
                'name' => 'title',
                'type' =>  Type::nonNull(Type::string()),
            ],
        ];
    }

    public function resolve($root, $args)
    {
        $Test = new Test();
        $Test->fill($args);
        $Test->save();

        return $Test;
    }
}
