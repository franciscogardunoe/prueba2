<?php

namespace SGPLBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Variable
 *
 * @ORM\Table(name="variable", uniqueConstraints={@ORM\UniqueConstraint(name="identificador_UNIQUE", columns={"identificador"})})
 * @ORM\Entity
 */
class Variable
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
     * @ORM\Column(name="identificador", type="string", length=10, nullable=false)
     */
    private $identificador;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=25, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_min", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $valorMin;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_max", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $valorMax;

    /**
     * @var string
     *
     * @ORM\Column(name="unidad", type="string", length=10, nullable=false)
     */
    private $unidad;



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
     * @return Variable
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Variable
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set valorMin
     *
     * @param string $valorMin
     * @return Variable
     */
    public function setValorMin($valorMin)
    {
        $this->valorMin = $valorMin;

        return $this;
    }

    /**
     * Get valorMin
     *
     * @return string 
     */
    public function getValorMin()
    {
        return $this->valorMin;
    }

    /**
     * Set valorMax
     *
     * @param string $valorMax
     * @return Variable
     */
    public function setValorMax($valorMax)
    {
        $this->valorMax = $valorMax;

        return $this;
    }

    /**
     * Get valorMax
     *
     * @return string 
     */
    public function getValorMax()
    {
        return $this->valorMax;
    }

    /**
     * Set unidad
     *
     * @param string $unidad
     * @return Variable
     */
    public function setUnidad($unidad)
    {
        $this->unidad = $unidad;

        return $this;
    }

    /**
     * Get unidad
     *
     * @return string 
     */
    public function getUnidad()
    {
        return $this->unidad;
    }
}
