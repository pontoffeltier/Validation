<?php

namespace Respect\Validation\Rules;

use Respect\Validation\Rules\AbstractRule;
use Respect\Validation\Exceptions\NotNullException;

class NullValue extends AbstractRule
{
    const MSG_NOT_NULL = 'NullValue_1';
    protected $messageTemplates = array(
        self::MSG_NOT_NULL => '%s is not null'
    );

    public function validate($input)
    {
        return is_null($input);
    }

    public function assert($input)
    {
        if (!$this->validate($input))
            throw new NotNullException(
                sprintf($this->getMessageTemplate(self::MSG_NOT_NULL), $input)
            );
        return true;
    }

}