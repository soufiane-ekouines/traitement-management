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

class TestsQuery extends Query
{
    protected $attributes = [
        'name' => 'tests',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Test'));
    }

    public function resolve($root, $args)
    {
        return Test::all();
    }
}
