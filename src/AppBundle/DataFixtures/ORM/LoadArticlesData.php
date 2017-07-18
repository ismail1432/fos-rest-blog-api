<?php
/**
 * Created by PhpStorm.
 * User: contact@smaine.me
 * Date: 19/07/2017
 * Time: 00:00
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Article;
use AppBundle\Entity\Author;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadArticlesData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        //Author Fixtures
        $author = new Author();
        $author->setFullname('Eniams Dev');
        $author->setBiography('I love code, learn new things, practice and share...');

        $author1 = new Author();
        $author1->setFullname('Darficops');
        $author1->setBiography('Software engineer');



        //Articles Fixtures
        $article = new Article();
        $article->setTitle('Alaska and cold case');
        $article->setContent('Loin, très loin, au delà des monts Mots, à mille lieues des pays Voyellie et Consonnia, demeurent les Bolos Bolos. 
        Ils vivent en retrait, à Bourg-en-Lettres, sur les côtes de la Sémantique, un vaste océan de langues. Un petit ruisseau, du nom de Larousse, 
        coule en leur lieu et les approvisionne en règlalades nécessaires en tout genre; un pays paradisiagmatique, 
        dans lequel des pans entiers de phrases prémâchées vous volent litéralement tout cuit dans la bouche. 
        Pas même la toute puissante Ponctuation ne régit les Bolos Bolos - une vie on ne peut moins orthodoxographique. 
        Un jour pourtant, une petite ligne de Bolo Bolo du nom de Lorem Ipsum décida de s\'aventurer dans la vaste Grammaire. 
        Le grand Oxymore voulut l\'en dissuader, le prevenant que là-bas cela fourmillait de vils Virgulos, de sauvages Pointdexclamators et de sournois
         Semicolons qui l\'attendraient pour sûr au prochain paragraphe');
        $article->setAuthor($author);

        $article1 = new Article();
        $article1->setTitle('Paris in love');
        $article1->setContent('Loin, très loin, au delà des monts Mots, à mille lieues des pays Voyellie et Consonnia, demeurent les Bolos Bolos. 
        Ils vivent en retrait, à Bourg-en-Lettres, sur les côtes de la Sémantique, un vaste océan de langues. Un petit ruisseau, du nom de Larousse, 
        coule en leur lieu et les approvisionne en règlalades nécessaires en tout genre; un pays paradisiagmatique, 
        dans lequel des pans entiers de phrases prémâchées vous volent litéralement tout cuit dans la bouche. 
        Pas même la toute puissante Ponctuation ne régit les Bolos Bolos - une vie on ne peut moins orthodoxographique. 
        Un jour pourtant, une petite ligne de Bolo Bolo du nom de Lorem Ipsum décida de s\'aventurer dans la vaste Grammaire. 
        Le grand Oxymore voulut l\'en dissuader, le prevenant que là-bas cela fourmillait de vils Virgulos, de sauvages Pointdexclamators et de sournois
         Semicolons qui l\'attendraient pour sûr au prochain paragraphe');
        $article1->setAuthor($author);

        $article2 = new Article();
        $article2->setTitle('New-york open mind');
        $article2->setContent('Loin, très loin, au delà des monts Mots, à mille lieues des pays Voyellie et Consonnia, demeurent les Bolos Bolos. 
        Ils vivent en retrait, à Bourg-en-Lettres, sur les côtes de la Sémantique, un vaste océan de langues. Un petit ruisseau, du nom de Larousse, 
        coule en leur lieu et les approvisionne en règlalades nécessaires en tout genre; un pays paradisiagmatique, 
        dans lequel des pans entiers de phrases prémâchées vous volent litéralement tout cuit dans la bouche. 
        Pas même la toute puissante Ponctuation ne régit les Bolos Bolos - une vie on ne peut moins orthodoxographique. 
        Un jour pourtant, une petite ligne de Bolo Bolo du nom de Lorem Ipsum décida de s\'aventurer dans la vaste Grammaire. 
        Le grand Oxymore voulut l\'en dissuader, le prevenant que là-bas cela fourmillait de vils Virgulos, de sauvages Pointdexclamators et de sournois
         Semicolons qui l\'attendraient pour sûr au prochain paragraphe');
        $article2->setAuthor($author);

        $article3 = new Article();
        $article3->setTitle('Istanbul zer');
        $article3->setContent('Loin, très loin, au delà des monts Mots, à mille lieues des pays Voyellie et Consonnia, demeurent les Bolos Bolos. 
        Ils vivent en retrait, à Bourg-en-Lettres, sur les côtes de la Sémantique, un vaste océan de langues. Un petit ruisseau, du nom de Larousse, 
        coule en leur lieu et les approvisionne en règlalades nécessaires en tout genre; un pays paradisiagmatique, 
        dans lequel des pans entiers de phrases prémâchées vous volent litéralement tout cuit dans la bouche. 
        Pas même la toute puissante Ponctuation ne régit les Bolos Bolos - une vie on ne peut moins orthodoxographique. 
        Un jour pourtant, une petite ligne de Bolo Bolo du nom de Lorem Ipsum décida de s\'aventurer dans la vaste Grammaire. 
        Le grand Oxymore voulut l\'en dissuader, le prevenant que là-bas cela fourmillait de vils Virgulos, de sauvages Pointdexclamators et de sournois
         Semicolons qui l\'attendraient pour sûr au prochain paragraphe');
        $article3->setAuthor($author1);

        $article4 = new Article();
        $article4->setTitle('London forever');
        $article4->setContent('Loin, très loin, au delà des monts Mots, à mille lieues des pays Voyellie et Consonnia, demeurent les Bolos Bolos. 
        Ils vivent en retrait, à Bourg-en-Lettres, sur les côtes de la Sémantique, un vaste océan de langues. Un petit ruisseau, du nom de Larousse, 
        coule en leur lieu et les approvisionne en règlalades nécessaires en tout genre; un pays paradisiagmatique, 
        dans lequel des pans entiers de phrases prémâchées vous volent litéralement tout cuit dans la bouche. 
        Pas même la toute puissante Ponctuation ne régit les Bolos Bolos - une vie on ne peut moins orthodoxographique. 
        Un jour pourtant, une petite ligne de Bolo Bolo du nom de Lorem Ipsum décida de s\'aventurer dans la vaste Grammaire. 
        Le grand Oxymore voulut l\'en dissuader, le prevenant que là-bas cela fourmillait de vils Virgulos, de sauvages Pointdexclamators et de sournois
         Semicolons qui l\'attendraient pour sûr au prochain paragraphe');
        $article4->setAuthor($author1);

        $tabArticles = [ $article, $article1, $article2, $article3, $article4 ];

        foreach ($tabArticles as $art)
        {
            $manager->persist($art);
        }

        $manager->flush();
    }
}