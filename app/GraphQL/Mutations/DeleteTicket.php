<?php
namespace App\graphql\Mutations;
use App\Models\Ticket;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;

class DeleteTicket extends Mutation {
  protected $attributes = [
    "name" => "delete",
    "description" => "Eliminar un ticket",
  ];

  public function type(): Type {
    return Type::boolean();
  }

  public function args(): array {
    return [
      "id" => [
        "name" => "id",
        "type" => Type::int(),
        "rules" => ["required"],
      ],
    ];
  }

  public function resolve($root, $args) {
    $ticket = Ticket::findOrFail($args["id"]);
    return $ticket->delete() ? true : false;
  }
}