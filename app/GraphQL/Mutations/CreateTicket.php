<?php
namespace App\graphql\Mutations;
use App\Models\Ticket;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;

class CreateTicket extends Mutation {
  protected $attributes = [
    "name" => "create",
  ];
  public function type(): Type {
    return GraphQL::type("TypTic");
  }
  public function args(): array {
    return [
      "usuario" => [
        "name" => "usuario",
        "type" => Type::nonNull(Type::string()),
      ],
      "estado" => [
        "name" => "estado",
        "type" => Type::nonNull(Type::string()),
      ]
    ];
  }

  public function resolve($root, $args) {
    $ticket = new Ticket();
    $ticket->fill($args);
    $ticket->save();
    return $ticket;
  }
}