<?php

namespace SGPLBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medicion
 *
 * @ORM\Table(name="medicion", indexes={@ORM\Index(name="fk_medicion_variable1_idx", columns={"variable"})})
 * @ORM\Entity
 */
class Medicion
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_registro", type="datetime", nullable=false)
     */
    private $fechaRegistro;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $valor;

    /**
     * @var string
     *
     * @ORM\Column(name="tanque", type="string", length=15, nullable=false)
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
     * Set fechaRegistro
     *
     * @param \DateTime $fechaRegistro
     * @return Medicion
     */
    public function setFechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;

        return $this;
    }

    /**
     * Get fechaRegistro
     *
     * @return \DateTime 
     */
    public function getFechaRegistro()
    {
        return $this->fechaRegistro;
    }

    /**
     * Set valor
     *
     * @param string $valor
     * @return Medicion
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return string 
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set tanque
     *
     * @param string $tanque
     * @return Medicion
     */
    public function setTanque($tanque)
    {
        $this->tanque = $tanque;

        return $this;
    }

    /**
     * Get tanque
     *
     * @return string 
     */
    public function getTanque()
    {
        return $this->tanque;
    }

    /**
     * Set variable
     *
     * @param \SGPLBundle\Entity\Variable $variable
     * @return Medicion
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
