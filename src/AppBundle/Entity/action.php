<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="action")
 */

class Actions
{
	/**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	private $id;

	/**
	 * ID du joueur qui fait l'action.
     * @ORM\ManyToOne(targetEntity="action")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     */
	private $idStriker;
	private $idTarget;
	private $idTeamStriker;
	private $idTeamTarget;
	private $idMatch;
	private $idTurn;

}