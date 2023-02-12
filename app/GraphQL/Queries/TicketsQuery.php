<?php
namespace App\graphql\Queries;
use App\Models\Ticket;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class TicketsQuery extends Query {
  protected $attributes = [
    "name" => "listAllTickets",
  ];

  public function type(): Type {
    return Type::listOf(GraphQL::type("TypTic"));
  }
  public function resolve($root, $args) {
    return Ticket::all();
  }
}