<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use AppBundle\Entity\Player;
use AppBundle\Entity\Team;
use AppBundle\Entity\Team_Has_Players;

class PlayerController extends Controller
{
	/**
     * @Route("/player/controller")
     */
   
    public function addPlayer(Request $request)
    {

        $players = new Player();
    	$teamHasPlayers = new Team_Has_Players();

        $playerTeam = [$teamHasPlayers];

        $form = $this->get('form.factory')->createBuilder(FormType::class, $players)
            ->add('name',       TextType::class)
            ->add('save',       SubmitType::class)
            ->getForm()
        ;

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($players);
                $em->flush();

                $request->getSession()->getFlashBag()->add('notice', 'Joueur bien enregistré.');
            }
        }

        $em = $this->getDoctrine()->getManager();
        $players = $em->getRepository('AppBundle:Player')->findAll();
        $teams = $em->getRepository('AppBundle:Team')->findAll();
        $teamHasPlayers = $em->getRepository('AppBundle:Team_Has_Players')->findAll();

        foreach ($players as $player) {
            foreach ($teamHasPlayers as $teamHas) {
                if ($player->id == $teamHas->idPlayer) {
                    $player->setIdTeam($teamHas->idTeam);
                }
            }
        }
        
        return $this->render('form-player.html.twig', array(
            'form_player' => $form->createView(),
            'all_player' => $players,
            'all_teams' => $teams,
        ));
    }

    public function modPlayer(Request $request)
    {

    }
}
