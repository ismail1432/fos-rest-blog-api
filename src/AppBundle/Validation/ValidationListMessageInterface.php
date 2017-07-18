<?php
/**
 * Created by PhpStorm.
 * User: contact@smaine.me
 * Date: 19/07/2017
 * Time: 01:38
 */

namespace AppBundle\Validation;

use Symfony\Component\Validator\ConstraintViolationList;

interface ValidationListMessageInterface
{
     public static function getViolationDetails(ConstraintViolationList $violations);
}