<?php

namespace SGPLBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TanqueVariable
 *
 * @ORM\Table(name="tanque_variable", indexes={@ORM\Index(name="fk_variable_has_tanque_tanque1_idx", columns={"tanque"}), @ORM\Index(name="fk_variable_has_tanque_variable_idx", columns={"variable"})})
 * @ORM\Entity
 */
class TanqueVariable
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
     * @var \Tanque
     *
     * @ORM\ManyToOne(targetEntity="Tanque")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tanque", referencedColumnName="id")
     * })
     */
    private $tanque;

    /**
     * @var \Variable
     *
     * @ORM\ManyToOne(targetEntity="Variable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="variable", referencedColumnName="id")
     * })
     */
    private $variable;



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
     * Set tanque
     *
     * @param \SGPLBundle\Entity\Tanque $tanque
     * @return TanqueVariable
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

    /**
     * Set variable
     *
     * @param \SGPLBundle\Entity\Variable $variable
     * @return TanqueVariable
     */
    public function setVariable(\SGPLBundle\Entity\Variable $variable = null)
    {
        $this->variable = $variable;

        return $this;
    }

    /**
     * Get variable
     *
     * @return \SGPLBundle\Entity\Variable 
     */
    public function getVariable()
    {
        return $this->variable;
    }
}
