<?php namespace Kayladnls\Formulate\Mapping\Rules\Form;

use Kayladnls\Formulate\Mapping\Rules\Rule;

/**
 * @Annotation
 */
final class AtLeastOneRequired extends MultipleFieldsRule implements Rule
{
    function __construct($fields)
    {
        $this->fields = $fields['fields'];
    }
}