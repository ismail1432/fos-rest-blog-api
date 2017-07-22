<?php
/**
 * Created by PhpStorm.
 * User: contact@smaine.me
 * Date: 21/07/2017
 * Time: 14:46
 */

namespace AppBundle\EntityManager;


use Doctrine\ORM\EntityManagerInterface;

class AbstractEntityOwnManager implements InterfaceEntityManager
{
    public function __construct(EntityManagerInterface $manager)
    {
        $this->entityManager = $manager;
        $this->entityName = '';
    }

    public function update($updateData,$oldData)
    {
        $fieldsName = $this->manager->getClassMetadata($this->entityName)->getFieldNames();

        foreach ($fieldsName as $field){
            //create dynamically current getter
            $getter = "get".ucfirst($field);

            //create dynamically current setter
            $setter = "set".ucfirst($field);
            if($field != 'id'){

                if($updateData->$getter() != $oldData->$getter()){
                    $oldData->$setter($updateData->$getter());
                }
            }
        }

        $this->manager->persist($oldData);
        $this->manager->flush();
        return $oldData;
    }

    public function create($entity){
        $this->manager->persist($entity);
        $this->manager->flush();
        return $entity;
    }

    public function find($id)
    {
        return $this->manager->getRepository($this->entityName)->find($id);
    }

    public function delete($id)
    {
        $entity = $this->find($id);
        if(null == $entity){
            return false;
        }
        $this->manager->remove($entity);
        $this->manager->flush();
        return true;
    }
}