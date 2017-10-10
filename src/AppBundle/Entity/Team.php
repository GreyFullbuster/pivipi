<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="teams")
 */

class Team
{
	/**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	private $id;

	/**
	 * Nom de l'équipe.
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