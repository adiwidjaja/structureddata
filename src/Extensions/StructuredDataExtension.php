<?php

/**
 * StructuredDataExtension
 *
 * @package StructuredData\Extensions
 * @author Kong Jin Jie <jinjie@swiftdev.sg>
 */

namespace StructuredData\Extensions;

use SilverStripe\ORM\DataExtension;
use SilverStripe\ORM\FieldType\DBHTMLText;
use Spatie\SchemaOrg\BaseType;

class StructuredDataExtension extends DataExtension
{
    public function StructuredData()
    {
        if (method_exists($this->owner, 'getStructuredSchemaData') &&
            $schema = $this->owner->getStructuredSchemaData()
        ) {
            if (! $schema instanceof BaseType) {
                throw new \Exception("Schema is not type of BaseType");
            }

            return singleton(DBHTMLText::class)
                ->setValue($schema->toScript());
        }
    }
}
