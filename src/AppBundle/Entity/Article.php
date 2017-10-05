<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="article")
 */
class Article
{
	/**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	private $id;

	/**
     * @ORM\Column(name="title", type="string", length=255)
     */
	private $title;


	/**
     * @ORM\Column(name="content", type="text", length=8000)
     */
	private $content;

	/**
     * @ORM\Column(name="author", type="string", length=255)
     */
	private $author;

	/**
     * @ORM\Column(name="date", type="date")
     */
	private $date;

	public function getId()
	{
		return $id;
	}

	public function setTitle($title)
	{
		$this->title = $title;
	}

	public function getTitle()
	{
		return $title;
	}

	public function setContent($content)
	{
		$this->content = $content;
	}

	public function getContent()
	{
		return $content;
	}

	public function setAuthor($author)
	{
		$this->author = $author;
	}

	public function getAuthor()
	{
		return $author;
	}

	public function setDate($date)
	{
		$this->date = $date;
	}

	public function getDate()
	{
		return $date;
	}

}