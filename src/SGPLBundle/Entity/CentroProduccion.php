<?php

namespace SGPLBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CentroProduccion
 *
 * @ORM\Table(name="centro_produccion", indexes={@ORM\Index(name="fk_centro_produccion_ciudad1_idx", columns={"ciudad"})})
 * @ORM\Entity
 */
class CentroProduccion
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
     * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="calle_numero", type="string", length=60, nullable=false)
     */
    private $calleNumero;

    /**
     * @var string
     *
     * @ORM\Column(name="colonia", type="string", length=45, nullable=false)
     */
    private $colonia;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo_postal", type="integer", nullable=false)
     */
    private $codigoPostal;

    /**
     * @var float
     *
     * @ORM\Column(name="longitud", type="float", precision=10, scale=0, nullable=false)
     */
    private $longitud;

    /**
     * @var float
     *
     * @ORM\Column(name="latitud", type="float", precision=10, scale=0, nullable=false)
     */
    private $latitud;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=17, nullable=false)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="correo_electronico", type="string", length=45, nullable=false)
     */
    private $correoElectronico;

    /**
     * @var string
     *
     * @ORM\Column(name="sitio_web", type="string", length=60, nullable=false)
     */
    private $sitioWeb;

    /**
     * @var \Ciudad
     *
     * @ORM\ManyToOne(targetEntity="Ciudad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ciudad", referencedColumnName="id")
     * })
     */
    private $ciudad;



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
     * Set nombre
     *
     * @param string $nombre
     * @return CentroProduccion
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set calleNumero
     *
     * @param string $calleNumero
     * @return CentroProduccion
     */
    public function setCalleNumero($calleNumero)
    {
        $this->calleNumero = $calleNumero;

        return $this;
    }

    /**
     * Get calleNumero
     *
     * @return string 
     */
    public function getCalleNumero()
    {
        return $this->calleNumero;
    }

    /**
     * Set colonia
     *
     * @param string $colonia
     * @return CentroProduccion
     */
    public function setColonia($colonia)
    {
        $this->colonia = $colonia;

        return $this;
    }

    /**
     * Get colonia
     *
     * @return string 
     */
    public function getColonia()
    {
        return $this->colonia;
    }

    /**
     * Set codigoPostal
     *
     * @param integer $codigoPostal
     * @return CentroProduccion
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get codigoPostal
     *
     * @return integer 
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    /**
     * Set longitud
     *
     * @param float $longitud
     * @return CentroProduccion
     */
    public function setLongitud($longitud)
    {
        $this->longitud = $longitud;

        return $this;
    }

    /**
     * Get longitud
     *
     * @return float 
     */
    public function getLongitud()
    {
        return $this->longitud;
    }

    /**
     * Set latitud
     *
     * @param float $latitud
     * @return CentroProduccion
     */
    public function setLatitud($latitud)
    {
        $this->latitud = $latitud;

        return $this;
    }

    /**
     * Get latitud
     *
     * @return float 
     */
    public function getLatitud()
    {
        return $this->latitud;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return CentroProduccion
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set correoElectronico
     *
     * @param string $correoElectronico
     * @return CentroProduccion
     */
    public function setCorreoElectronico($correoElectronico)
    {
        $this->correoElectronico = $correoElectronico;

        return $this;
    }

    /**
     * Get correoElectronico
     *
     * @return string 
     */
    public function getCorreoElectronico()
    {
        return $this->correoElectronico;
    }

    /**
     * Set sitioWeb
     *
     * @param string $sitioWeb
     * @return CentroProduccion
     */
    public function setSitioWeb($sitioWeb)
    {
        $this->sitioWeb = $sitioWeb;

        return $this;
    }

    /**
     * Get sitioWeb
     *
     * @return string 
     */
    public function getSitioWeb()
    {
        return $this->sitioWeb;
    }

    /**
     * Set ciudad
     *
     * @param \SGPLBundle\Entity\Ciudad $ciudad
     * @return CentroProduccion
     */
    public function setCiudad(\SGPLBundle\Entity\Ciudad $ciudad = null)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return \SGPLBundle\Entity\Ciudad 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }
}
