<?php
namespace App\graphql\Mutations;
use App\Models\Ticket;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;

class UpdateTicket extends Mutation {
  protected $attributes = [
    "name" => "update",
  ];

  public function type(): Type {
    return GraphQL::type("TypTic");
  }
  
  public function args(): array {
    return [
      "id" => [
        "name" => "id",
        "type" => Type::nonNull(Type::int()),
      ],
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
    $ticket = Ticket::findOrFail($args["id"]);
    $ticket->fill($args);
    $ticket->save();
    return $ticket;
  }
}