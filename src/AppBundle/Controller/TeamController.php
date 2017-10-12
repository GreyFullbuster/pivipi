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

class TeamController extends Controller
{
    /**
     * @Route("/team/controller")
     */
    public function addTeam(Request $request)
    {
        $teams = new Team();

        $form = $this->get('form.factory')->createBuilder(FormType::class, $teams)
            ->add('name',   TextType::class)
            ->add('save',   SubmitType::class)
            ->getForm()
        ;

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($teams);
                $em->flush();

                $request->getSession()->getFlashBag()->add('notice', 'Equipe bien enregistré.');
            }
        }

        return $this->render('form-team.html.twig', array(
            'form_team' => $form->createView(),
        ));
    }
}