<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="stats_base_max")
 */

class StatsBaseMax
{
	/**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	private $id;

	private $idPlayer;
	private $idMatch;
	private $idTeam;
	private $pdvMax;
	private $perNeu;
	private $perFeu;
	private $perTer;
	private $perEau;
	private $perAir;
	private $reNeu;
	private $reFeu;
	private $reTer;
	private $reEau;
	private $reAir;
	private $rePou;
	private $esqPA;
	private $esqPM;
	private $tac;
	private $fui;
	private $pa;
	private $pm;

}