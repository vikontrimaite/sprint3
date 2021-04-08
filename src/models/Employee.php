<?php
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
    protected $name;

    /**
     * One Employee has One Project.
     * @ORM\OneToOne(targetEntity="project", mappedBy="employee")
     */
    private $project;

    public function getName()
    {
        return $this->name;
    }

    public function getProject()
    {
        return $this->project;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setProject($project)
    {
        $this->project = $project;
    }
}