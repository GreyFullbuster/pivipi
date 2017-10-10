<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ko")
 */

class Ko
{
	/**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	private $id;

	private $idStriker;
	private $idTarget;
	private $idTeamStriker;
	private $idTeamTarget;
	private $idMatch;
	private $idTurn;
	private $killStriker;
	private $killLibe;
	private $killInvo;
	private $killBuff;

}