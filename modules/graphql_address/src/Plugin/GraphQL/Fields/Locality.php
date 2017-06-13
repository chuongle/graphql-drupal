<?php

namespace Drupal\graphql_address\Plugin\GraphQL\Fields;

use Drupal\graphql_core\GraphQL\FieldPluginBase;
use Drupal\address\AddressInterface;
use Youshido\GraphQL\Execution\ResolveInfo;

/**
 * Retrieve the address locality.
 *
 * @GraphQLField(
 *   id = "locality",
 *   name = "locality",
 *   type = "String",
 *   types = {"Address"}
 * )
 */
class Locality extends FieldPluginBase {

  /**
   * {@inheritdoc}
   */
  protected function resolveValues($value, array $args, ResolveInfo $info) {
    if ($value instanceof AddressInterface) {
      yield $value->get('locality')->getValue();
    }
  }

}