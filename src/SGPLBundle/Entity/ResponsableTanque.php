<?php

namespace SGPLBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResponsableTanque
 *
 * @ORM\Table(name="responsable_tanque", indexes={@ORM\Index(name="fk_responsable_tanque_persona1_idx", columns={"persona"}), @ORM\Index(name="fk_responsable_tanque_tanque1_idx", columns={"tanque"})})
 * @ORM\Entity
 */
class ResponsableTanque
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Persona
     *
     * @ORM\ManyToOne(targetEntity="Persona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="persona", referencedColumnName="id")
     * })
     */
    private $persona;

    /**
     * @var \Tanque
     *
     * @ORM\ManyToOne(targetEntity="Tanque")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tanque", referencedColumnName="id")
     * })
     */
    private $tanque;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set persona
     *
     * @param \SGPLBundle\Entity\Persona $persona
     * @return ResponsableTanque
     */
    public function setPersona(\SGPLBundle\Entity\Persona $persona = null)
    {
        $this->persona = $persona;

        return $this;
    }

    /**
     * Get persona
     *
     * @return \SGPLBundle\Entity\Persona 
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * Set tanque
     *
     * @param \SGPLBundle\Entity\Tanque $tanque
     * @return ResponsableTanque
     */
    public function setTanque(\SGPLBundle\Entity\Tanque $tanque = null)
    {
        $this->tanque = $tanque;

        return $this;
    }

    /**
     * Get tanque
     *
     * @return \SGPLBundle\Entity\Tanque 
     */
    public function getTanque()
    {
        return $this->tanque;
    }
}
