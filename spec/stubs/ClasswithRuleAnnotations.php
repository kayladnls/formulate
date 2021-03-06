<?php namespace Kayladnls\Formulate\Stubs;

use Kayladnls\Formulate\Mapping\Rules;
use Kayladnls\Formulate\Mapping\Form;

/**
 * @Form\Form
 */
final class ClassWithRuleAnnotations
{
    /**
     * @Rules\Field\Required
     * @Rules\Field\MaxLength
     */
    private $fullName;
} 