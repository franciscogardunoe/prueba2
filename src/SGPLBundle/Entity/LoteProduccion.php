<?php

namespace SGPLBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LoteProduccion
 *
 * @ORM\Table(name="lote_produccion", indexes={@ORM\Index(name="fk_lote_produccion_tanque1_idx", columns={"tanque"})})
 * @ORM\Entity
 */
class LoteProduccion
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
     * @var string
     *
     * @ORM\Column(name="identificador", type="string", length=15, nullable=false)
     */
    private $identificador;

    /**
     * @var string
     *
     * @ORM\Column(name="materia_principal", type="text", length=65535, nullable=false)
     */
    private $materiaPrincipal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="date", nullable=false)
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_cierre", type="date", nullable=true)
     */
    private $fechaCierre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_cierre_tentativo", type="date", nullable=false)
     */
    private $fechaCierreTentativo;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

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
     * Set identificador
     *
     * @param string $identificador
     * @return LoteProduccion
     */
    public function setIdentificador($identificador)
    {
        $this->identificador = $identificador;

        return $this;
    }

    /**
     * Get identificador
     *
     * @return string 
     */
    public function getIdentificador()
    {
        return $this->identificador;
    }

    /**
     * Set materiaPrincipal
     *
     * @param string $materiaPrincipal
     * @return LoteProduccion
     */
    public function setMateriaPrincipal($materiaPrincipal)
    {
        $this->materiaPrincipal = $materiaPrincipal;

        return $this;
    }

    /**
     * Get materiaPrincipal
     *
     * @return string 
     */
    public function getMateriaPrincipal()
    {
        return $this->materiaPrincipal;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return LoteProduccion
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaCierre
     *
     * @param \DateTime $fechaCierre
     * @return LoteProduccion
     */
    public function setFechaCierre($fechaCierre)
    {
        $this->fechaCierre = $fechaCierre;

        return $this;
    }

    /**
     * Get fechaCierre
     *
     * @return \DateTime 
     */
    public function getFechaCierre()
    {
        return $this->fechaCierre;
    }

    /**
     * Set fechaCierreTentativo
     *
     * @param \DateTime $fechaCierreTentativo
     * @return LoteProduccion
     */
    public function setFechaCierreTentativo($fechaCierreTentativo)
    {
        $this->fechaCierreTentativo = $fechaCierreTentativo;

        return $this;
    }

    /**
     * Get fechaCierreTentativo
     *
     * @return \DateTime 
     */
    public function getFechaCierreTentativo()
    {
        return $this->fechaCierreTentativo;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return LoteProduccion
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set tanque
     *
     * @param \SGPLBundle\Entity\Tanque $tanque
     * @return LoteProduccion
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
