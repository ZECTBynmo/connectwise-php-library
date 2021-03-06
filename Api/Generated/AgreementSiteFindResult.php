<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AgreementSiteFindResult
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $AgreementId
     */
    protected $AgreementId = null;

    /**
     * @var int $CompanyId
     */
    protected $CompanyId = null;

    /**
     * @var int $AddressId
     */
    protected $AddressId = null;

    /**
     * @var \DateTime $LastUpdate
     */
    protected $LastUpdate = null;

    /**
     * @var string $UpdatedBy
     */
    protected $UpdatedBy = null;

    /**
     * @param int $Id
     * @param \DateTime $LastUpdate
     * @param string $UpdatedBy
     */
    public function __construct($Id = null, \DateTime $LastUpdate = null, $UpdatedBy = null)
    {
        $this->Id         = $Id;
        $this->LastUpdate = $LastUpdate ? $LastUpdate->format(\DateTime::ATOM) : null;
        $this->UpdatedBy  = $UpdatedBy;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementSiteFindResult
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return int
     */
    public function getAgreementId()
    {
        return $this->AgreementId;
    }

    /**
     * @param int $AgreementId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementSiteFindResult
     */
    public function setAgreementId($AgreementId)
    {
        $this->AgreementId = $AgreementId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCompanyId()
    {
        return $this->CompanyId;
    }

    /**
     * @param int $CompanyId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementSiteFindResult
     */
    public function setCompanyId($CompanyId)
    {
        $this->CompanyId = $CompanyId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAddressId()
    {
        return $this->AddressId;
    }

    /**
     * @param int $AddressId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementSiteFindResult
     */
    public function setAddressId($AddressId)
    {
        $this->AddressId = $AddressId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdate()
    {
        if ($this->LastUpdate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->LastUpdate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $LastUpdate
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementSiteFindResult
     */
    public function setLastUpdate(\DateTime $LastUpdate)
    {
        $this->LastUpdate = $LastUpdate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->UpdatedBy;
    }

    /**
     * @param string $UpdatedBy
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementSiteFindResult
     */
    public function setUpdatedBy($UpdatedBy)
    {
        $this->UpdatedBy = $UpdatedBy;
        return $this;
    }

}
