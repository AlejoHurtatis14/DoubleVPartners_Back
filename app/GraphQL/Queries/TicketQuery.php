<?php
namespace App\GraphQL\Queries;
use App\Models\Ticket;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class TicketQuery extends Query {
  protected $attributes = [
    "name" => "lisOneTicket",
  ];
  
  public function type(): Type {
    return GraphQL::type("TypTic");
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
    return Ticket::findOrFail($args["id"]);
  }
}