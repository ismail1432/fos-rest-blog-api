<?php

/**
 * Created by PhpStorm.
 * User: contact@smaine.me
 * Date: 19/07/2017
 * Time: 01:31
 */

namespace AppBundle\Validation;

use Symfony\Component\Validator\ConstraintViolationList;

class ValidationListMessage implements ValidationListMessageInterface

{
    public static function getViolationDetails(ConstraintViolationList $violations)
    {
        $message = 'The JSON sent contains invalid data. Here are the errors you need to correct: ';
        foreach ($violations as $violation) {
            $message .= sprintf("Field %s: %s ", $violation->getPropertyPath(), $violation->getMessage());
        }

        return $message;

    }
}