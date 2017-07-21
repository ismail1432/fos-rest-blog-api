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
    public function create($entity);
    public function find($id);
    public function delete($id);
}