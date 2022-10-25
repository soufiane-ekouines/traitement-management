<?php

declare(strict_types=1);

namespace App\GraphQL\Mutations\Test;

use App\Models\Test;
use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use Rebing\GraphQL\Support\SelectFields;

class DeleteTestMutation extends Mutation
{
    protected $attributes = [
        'name' => 'deleteTest',
        'description' => 'deletes a Test'
    ];

    public function type(): Type
    {
        return Type::boolean();
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
        $Test = Test::findOrFail($args['id']);

        return  $Test->delete() ? true : false;
    }
}
