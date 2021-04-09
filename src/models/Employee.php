<?php
namespace Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="employees")
 */
class Employee
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

       /** 
     * @ORM\Column(type="string") 
     */
    protected $empl_name;

    /**
     * Many employees have one project. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Project", inversedBy="employees")
     * @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     */
    private $project;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->empl_name;
    }

    public function setName($empl_name)
    {
        $this->empl_name = $empl_name;
    }
}