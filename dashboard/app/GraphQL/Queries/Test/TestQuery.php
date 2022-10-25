<?php

declare(strict_types=1);

namespace App\GraphQL\Queries\Test;

use App\Models\Test;
use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\SelectFields;

class TestQuery extends Query
{
    protected $attributes = [
        'name' => 'Test',
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
                'type' => Type::int(),
                'rules' => ['required']
            ]
        ];
    }

    public function resolve($root, $args)
    {
        return Test::findOrFail($args['id']);
    }
}
