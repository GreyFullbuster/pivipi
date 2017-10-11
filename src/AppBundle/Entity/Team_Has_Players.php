<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="team_has_players")
 */

class Team_Has_Players
{
	/**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	public $id;

	/**
     * Id du joueur lié à une équipe.
     * @ORM\Column(name="idPlayer", type="integer")
     * @ORM\OneToMany(targetEntity="player")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     */
	public $idPlayer;

	/**
     * Id de l'équipe lié à un joueur.
     * @ORM\Column(name="idTeam", type="integer")
     * @ORM\ManyToMany(targetEntity="team")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     */
     public $idTeam;

     /**
     * Date de la liaison.
     * @ORM\Column(name="date", type="datetime")
     */
     public $dateStart;

     public function getId()
     {
          return $id;
     }

     public function setIdPlayer($idPlayer)
     {
          $this->idPlayer = $idPlayer;
     }

     public function getIdPlayer()
     {
          return $this->idPlayer;
     }

     public function setIdTeam($idTeam)
     {
          $this->idTeam = $idTeam;
     }

     public function getIdTeam()
     {
          return $this->idTeam;
     }

     public function setDateStart($dateStart)
     {
          $this->dateStart = $dateStart;
     }

     public function getDateStart()
     {
          return $this->dateStart;
     }

}