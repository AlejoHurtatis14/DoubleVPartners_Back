<?php
namespace App\GraphQL\Types;
use App\Models\Ticket;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class TicketType extends GraphQLType {
  protected $attributes = [
    "name" => "TypTic",
    "description" => "Colección de tiquetes",
    "model" => Ticket::class,
  ];

  public function fields(): array {
    return [
      "id" => [
        "type" => Type::nonNull(Type::int()),
        "description" => "Identificador del ticket",
      ],
      "usuario" => [
        "type" => Type::nonNull(Type::string()),
        "description" => "Usuario del ticket",
      ],
      "estado" => [
        "type" => Type::nonNull(Type::string()),
        "description" => "Estado (abierto, cerrado) del ticket",
      ],
      "created_at" => [
        "type" => Type::nonNull(Type::string()),
        "description" => "Fecha creación del ticket",
      ],
      "updated_at" => [
        "type" => Type::nonNull(Type::string()),
        "description" => "Fecha actualización del ticket",
      ],
    ];
  }
}