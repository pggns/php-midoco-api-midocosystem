<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RevokePrintsFromRemarkRequest StructType
 * @subpackage Structs
 */
class RevokePrintsFromRemarkRequest extends AbstractStructBase
{
    /**
     * The MidocoPrintDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPrintDescription
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO[]
     */
    protected array $MidocoPrintDescription = [];
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The printDestId
     * @var string|null
     */
    protected ?string $printDestId = null;
    /**
     * Constructor method for RevokePrintsFromRemarkRequest
     * @uses RevokePrintsFromRemarkRequest::setMidocoPrintDescription()
     * @uses RevokePrintsFromRemarkRequest::setUnitName()
     * @uses RevokePrintsFromRemarkRequest::setPrintDestId()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO[] $midocoPrintDescription
     * @param string $unitName
     * @param string $printDestId
     */
    public function __construct(array $midocoPrintDescription = [], ?string $unitName = null, ?string $printDestId = null)
    {
        $this
            ->setMidocoPrintDescription($midocoPrintDescription)
            ->setUnitName($unitName)
            ->setPrintDestId($printDestId);
    }
    /**
     * Get MidocoPrintDescription value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO[]
     */
    public function getMidocoPrintDescription(): array
    {
        return $this->MidocoPrintDescription;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoPrintDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPrintDescription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPrintDescriptionForArrayConstraintsFromSetMidocoPrintDescription(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $revokePrintsFromRemarkRequestMidocoPrintDescriptionItem) {
            // validation for constraint: itemType
            if (!$revokePrintsFromRemarkRequestMidocoPrintDescriptionItem instanceof \Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO) {
                $invalidValues[] = is_object($revokePrintsFromRemarkRequestMidocoPrintDescriptionItem) ? get_class($revokePrintsFromRemarkRequestMidocoPrintDescriptionItem) : sprintf('%s(%s)', gettype($revokePrintsFromRemarkRequestMidocoPrintDescriptionItem), var_export($revokePrintsFromRemarkRequestMidocoPrintDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPrintDescription property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPrintDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO[] $midocoPrintDescription
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\RevokePrintsFromRemarkRequest
     */
    public function setMidocoPrintDescription(array $midocoPrintDescription = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPrintDescriptionArrayErrorMessage = self::validateMidocoPrintDescriptionForArrayConstraintsFromSetMidocoPrintDescription($midocoPrintDescription))) {
            throw new InvalidArgumentException($midocoPrintDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoPrintDescription = $midocoPrintDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoPrintDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\RevokePrintsFromRemarkRequest
     */
    public function addToMidocoPrintDescription(\Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoPrintDescription property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPrintDescription[] = $item;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\RevokePrintsFromRemarkRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get printDestId value
     * @return string|null
     */
    public function getPrintDestId(): ?string
    {
        return $this->printDestId;
    }
    /**
     * Set printDestId value
     * @param string $printDestId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\RevokePrintsFromRemarkRequest
     */
    public function setPrintDestId(?string $printDestId = null): self
    {
        // validation for constraint: string
        if (!is_null($printDestId) && !is_string($printDestId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printDestId, true), gettype($printDestId)), __LINE__);
        }
        $this->printDestId = $printDestId;
        
        return $this;
    }
}
