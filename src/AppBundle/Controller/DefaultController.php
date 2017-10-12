<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use AppBundle\Entity\Article;
use AppBundle\Entity\Player;
use AppBundle\Entity\Team;
use AppBundle\Entity\Team_Has_Players;

class DefaultController extends Controller
{
	/**
     * @Route("/", name="homepage")
     */
   
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$articles = $em->getRepository('AppBundle:Article')->findAll();
    	$players = $em->getRepository('AppBundle:Player')->findAll();
    	$teams = $em->getRepository('AppBundle:Team')->findAll();
    	$teamHasPlayers = $em->getRepository('AppBundle:Team_Has_Players')->findAll();
    	

    	$date = new \DateTime("now");


    	/*$teamHasPlayers = new Team_Has_Players();

    	foreach($players as $i => $player)
    	{
    		if ($player->name === "Ds-Kappa")
    		{
    			$idPlayer = $player->id;
    			$teamHasPlayers->setIdPlayer($idPlayer);
    		}
    	}

    	foreach($teams as $i => $team)
    	{
    		if ($team->name === "Orangina")
    		{
    			$idTeam = $team->id;
    			$teamHasPlayers->setIdTeam($idTeam);
    		}
    	}*/

    	foreach ($players as $key => $player) {
    		foreach ($teamHasPlayers as $key => $teamHas) {
    			if ($player->id == $teamHas->idPlayer) {
    				$player->setIdTeam($teamHas->idTeam);
    			}
    		}
    	}

    	/*$teamHasPlayers->setDateStart($date);

    	$em->persist($teamHasPlayers);

    	$em->flush();*/
  

    	

    	dump($teams, $players, $teamHasPlayers, $articles);die;

        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
