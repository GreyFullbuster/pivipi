<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Nicolas Grévin <nicolas@butterfly-dev.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Article;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$totos = $em->getRepository('AppBundle:Toto')->findAll();
    	$articles = $em->getRepository('AppBundle:Article')->findAll();

    	#$date = new \DateTime("now");
    	#$article = new Article();
	    #$article->setTitle('Titre');
	    #$article->setContent('LOOOOOOOOOOOOOOOOOONG TEXTE');
	    #$article->setDate($date);
	    #$article->setAuthor('AC');

	    #$em->persist($article);

	    #$em->flush();

    	dump($totos, $articles);die;

        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
