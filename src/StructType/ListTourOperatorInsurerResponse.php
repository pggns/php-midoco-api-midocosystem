<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListTourOperatorInsurerResponse StructType
 * @subpackage Structs
 */
class ListTourOperatorInsurerResponse extends AbstractStructBase
{
    /**
     * The MidocoTourOperatorInsurer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTourOperatorInsurer
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorInsurer[]
     */
    protected array $MidocoTourOperatorInsurer = [];
    /**
     * Constructor method for ListTourOperatorInsurerResponse
     * @uses ListTourOperatorInsurerResponse::setMidocoTourOperatorInsurer()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorInsurer[] $midocoTourOperatorInsurer
     */
    public function __construct(array $midocoTourOperatorInsurer = [])
    {
        $this
            ->setMidocoTourOperatorInsurer($midocoTourOperatorInsurer);
    }
    /**
     * Get MidocoTourOperatorInsurer value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorInsurer[]
     */
    public function getMidocoTourOperatorInsurer(): array
    {
        return $this->MidocoTourOperatorInsurer;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTourOperatorInsurer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTourOperatorInsurer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTourOperatorInsurerForArrayConstraintsFromSetMidocoTourOperatorInsurer(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $listTourOperatorInsurerResponseMidocoTourOperatorInsurerItem) {
            // validation for constraint: itemType
            if (!$listTourOperatorInsurerResponseMidocoTourOperatorInsurerItem instanceof \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorInsurer) {
                $invalidValues[] = is_object($listTourOperatorInsurerResponseMidocoTourOperatorInsurerItem) ? get_class($listTourOperatorInsurerResponseMidocoTourOperatorInsurerItem) : sprintf('%s(%s)', gettype($listTourOperatorInsurerResponseMidocoTourOperatorInsurerItem), var_export($listTourOperatorInsurerResponseMidocoTourOperatorInsurerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTourOperatorInsurer property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorInsurer, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTourOperatorInsurer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorInsurer[] $midocoTourOperatorInsurer
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ListTourOperatorInsurerResponse
     */
    public function setMidocoTourOperatorInsurer(array $midocoTourOperatorInsurer = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTourOperatorInsurerArrayErrorMessage = self::validateMidocoTourOperatorInsurerForArrayConstraintsFromSetMidocoTourOperatorInsurer($midocoTourOperatorInsurer))) {
            throw new InvalidArgumentException($midocoTourOperatorInsurerArrayErrorMessage, __LINE__);
        }
        $this->MidocoTourOperatorInsurer = $midocoTourOperatorInsurer;
        
        return $this;
    }
    /**
     * Add item to MidocoTourOperatorInsurer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorInsurer $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ListTourOperatorInsurerResponse
     */
    public function addToMidocoTourOperatorInsurer(\Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorInsurer $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorInsurer) {
            throw new InvalidArgumentException(sprintf('The MidocoTourOperatorInsurer property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorInsurer, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTourOperatorInsurer[] = $item;
        
        return $this;
    }
}
