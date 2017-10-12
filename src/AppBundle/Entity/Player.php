<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="players")
 */
class Player
{
	/**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	public $id;

	/**
	 * Nom du joueur.
     * @ORM\Column(name="name", type="string", length=255)
     */
	public $name;

	/**
	 * Id de l'équipe
     * @ORM\Column(name="idTeam", type="integer")
     * @ORM\ManyToMany(targetEntity="team")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     */
	public $idTeam;

	public function getId()
	{
		return $id;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setIdTeam($idTeam)
	{
		$this->idTeam = $idTeam;
	}

	public function getIdTeam()
	{
		return $this->idTeam;
	}
}