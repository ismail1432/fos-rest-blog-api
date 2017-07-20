<?php
/**
 * Created by PhpStorm.
 * User: contact@smaine.me
 * Date: 21/07/2017
 * Time: 01:24
 */

namespace AppBundle\EntityManager;


interface InterfaceEntityManager
{
    public function update($updateData, $oldData);
}