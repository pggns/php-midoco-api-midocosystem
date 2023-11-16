<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListPrintSelectsResponse StructType
 * @subpackage Structs
 */
class ListPrintSelectsResponse extends AbstractStructBase
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
     * Constructor method for ListPrintSelectsResponse
     * @uses ListPrintSelectsResponse::setMidocoPrintDescription()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO[] $midocoPrintDescription
     */
    public function __construct(array $midocoPrintDescription = [])
    {
        $this
            ->setMidocoPrintDescription($midocoPrintDescription);
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
        foreach ($values as $listPrintSelectsResponseMidocoPrintDescriptionItem) {
            // validation for constraint: itemType
            if (!$listPrintSelectsResponseMidocoPrintDescriptionItem instanceof \Pggns\MidocoApi\MidocoSystem\StructType\PrintDescriptionDTO) {
                $invalidValues[] = is_object($listPrintSelectsResponseMidocoPrintDescriptionItem) ? get_class($listPrintSelectsResponseMidocoPrintDescriptionItem) : sprintf('%s(%s)', gettype($listPrintSelectsResponseMidocoPrintDescriptionItem), var_export($listPrintSelectsResponseMidocoPrintDescriptionItem, true));
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
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ListPrintSelectsResponse
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
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ListPrintSelectsResponse
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
}