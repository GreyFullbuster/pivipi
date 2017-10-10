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
	private $id;

	/**
	 * Nom du joueur.
     * @ORM\Column(name="name", type="string", length=255)
     */
	private $name;

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
		return $name;
	}
}