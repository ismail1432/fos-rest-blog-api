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
class ArticleManager implements InterfaceEntityManager
{
    public function __construct(EntityManager $manager){
        $this->manager = $manager;
    }

    public function update($updateData, $article)
    {
        //Check if new title is different of old title

        if($updateData->getTitle() != $article->getTitle()){
            $article->setTitle($updateData->getTitle());
        }

        //Check if new content is different of old title

        if($updateData->getContent() != $article->getContent()){
            $article->setContent($updateData->getContent());
        }
        $this->manager->persist($article);
        $this->manager->flush();

        return $article;

    }

    public function create($article)
    {
        $this->manager->persist($article);
        $this->manager->flush();

        return;
    }

}