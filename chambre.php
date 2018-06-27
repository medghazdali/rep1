<?php

namespace GA\GABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * chambre
 *
 * @ORM\Table(name="chambre")
 * @ORM\Entity(repositoryClass="GA\GABundle\Repository\chambreRepository")
 */
class chambre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="id_chambre", type="string", length=55)
     */
    private $id_chambre;


    /**
     * @var string
     *
     * @ORM\Column(name="title_chambre", type="string", length=255)
     */
    private $title_chambre;


    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
    *@ORM\ManyToOne(targetEntity="\GA\GABundle\Entity\etab")
    *@ORM\JoinColumn(name="etab_id",referencedColumnName="id")
    */
    private $etab;




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
     * Set idChambre
     *
     * @param string $idChambre
     *
     * @return chambre
     */
    public function setIdChambre($idChambre)
    {
        $this->id_chambre = $idChambre;

        return $this;
    }

    /**
     * Get idChambre
     *
     * @return string
     */
    public function getIdChambre()
    {
        return $this->id_chambre;
    }

    /**
     * Set titleChambre
     *
     * @param string $titleChambre
     *
     * @return chambre
     */
    public function setTitleChambre($titleChambre)
    {
        $this->title_chambre = $titleChambre;

        return $this;
    }

    /**
     * Get titleChambre
     *
     * @return string
     */
    public function getTitleChambre()
    {
        return $this->title_chambre;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return chambre
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set titleLinetarifaire
     *
     * @param string $titleLinetarifaire
     *
     * @return chambre
     */
    public function setTitleLinetarifaire($titleLinetarifaire)
    {
        $this->title_linetarifaire = $titleLinetarifaire;

        return $this;
    }

    /**
     * Get titleLinetarifaire
     *
     * @return string
     */
    public function getTitleLinetarifaire()
    {
        return $this->title_linetarifaire;
    }

    /**
     * Set titleCondition
     *
     * @param string $titleCondition
     *
     * @return chambre
     */
    public function setTitleCondition($titleCondition)
    {
        $this->title_condition = $titleCondition;

        return $this;
    }

    /**
     * Get titleCondition
     *
     * @return string
     */
    public function getTitleCondition()
    {
        return $this->title_condition;
    }

    /**
     * Set idLinetarifaire
     *
     * @param string $idLinetarifaire
     *
     * @return chambre
     */
    public function setIdLinetarifaire($idLinetarifaire)
    {
        $this->id_linetarifaire = $idLinetarifaire;

        return $this;
    }

    /**
     * Get idLinetarifaire
     *
     * @return string
     */
    public function getIdLinetarifaire()
    {
        return $this->id_linetarifaire;
    }

    /**
     * Set etab
     *
     * @param \GA\GABundle\Entity\etab $etab
     *
     * @return chambre
     */
    public function setEtab(\GA\GABundle\Entity\etab $etab = null)
    {
        $this->etab = $etab;

        return $this;
    }

    /**
     * Get etab
     *
     * @return \GA\GABundle\Entity\etab
     */
    public function getEtab()
    {
        return $this->etab;
    }
}
