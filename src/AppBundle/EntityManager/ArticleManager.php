<?php

namespace AppBundle\EntityManager;

use AppBundle\Entity\Article;
use Doctrine\ORM\EntityManager;
/**
 * Created by PhpStorm.
 * User: contact@smaine.me
 * Date: 21/07/2017
 * Time: 00:53
 */
class ArticleManager extends AbstractEntityOwnManager
{
    public function __construct(EntityManager $manager){
        $this->manager = $manager;
        $this->entityName = Article::class;
    }

}