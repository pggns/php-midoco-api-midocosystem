<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAccessibleComponentsByRoleResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: Provide the unsuccessfully saved components
 * @subpackage Structs
 */
class SaveAccessibleComponentsByRoleResponse extends AbstractStructBase
{
    /**
     * The success
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $success = null;
    /**
     * The MidocoAccessibleComponentByRole
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAccessibleComponentByRole
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\MidocoAccessibleComponentByRoleType[]
     */
    protected array $MidocoAccessibleComponentByRole = [];
    /**
     * Constructor method for SaveAccessibleComponentsByRoleResponse
     * @uses SaveAccessibleComponentsByRoleResponse::setSuccess()
     * @uses SaveAccessibleComponentsByRoleResponse::setMidocoAccessibleComponentByRole()
     * @param bool $success
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoAccessibleComponentByRoleType[] $midocoAccessibleComponentByRole
     */
    public function __construct(?bool $success = false, array $midocoAccessibleComponentByRole = [])
    {
        $this
            ->setSuccess($success)
            ->setMidocoAccessibleComponentByRole($midocoAccessibleComponentByRole);
    }
    /**
     * Get success value
     * @return bool|null
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }
    /**
     * Set success value
     * @param bool $success
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SaveAccessibleComponentsByRoleResponse
     */
    public function setSuccess(?bool $success = false): self
    {
        // validation for constraint: boolean
        if (!is_null($success) && !is_bool($success)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($success, true), gettype($success)), __LINE__);
        }
        $this->success = $success;
        
        return $this;
    }
    /**
     * Get MidocoAccessibleComponentByRole value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\MidocoAccessibleComponentByRoleType[]
     */
    public function getMidocoAccessibleComponentByRole(): array
    {
        return $this->MidocoAccessibleComponentByRole;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAccessibleComponentByRole method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAccessibleComponentByRole method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAccessibleComponentByRoleForArrayConstraintsFromSetMidocoAccessibleComponentByRole(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveAccessibleComponentsByRoleResponseMidocoAccessibleComponentByRoleItem) {
            // validation for constraint: itemType
            if (!$saveAccessibleComponentsByRoleResponseMidocoAccessibleComponentByRoleItem instanceof \Pggns\MidocoApi\MidocoSystem\StructType\MidocoAccessibleComponentByRoleType) {
                $invalidValues[] = is_object($saveAccessibleComponentsByRoleResponseMidocoAccessibleComponentByRoleItem) ? get_class($saveAccessibleComponentsByRoleResponseMidocoAccessibleComponentByRoleItem) : sprintf('%s(%s)', gettype($saveAccessibleComponentsByRoleResponseMidocoAccessibleComponentByRoleItem), var_export($saveAccessibleComponentsByRoleResponseMidocoAccessibleComponentByRoleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAccessibleComponentByRole property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\MidocoAccessibleComponentByRoleType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAccessibleComponentByRole value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoAccessibleComponentByRoleType[] $midocoAccessibleComponentByRole
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SaveAccessibleComponentsByRoleResponse
     */
    public function setMidocoAccessibleComponentByRole(array $midocoAccessibleComponentByRole = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAccessibleComponentByRoleArrayErrorMessage = self::validateMidocoAccessibleComponentByRoleForArrayConstraintsFromSetMidocoAccessibleComponentByRole($midocoAccessibleComponentByRole))) {
            throw new InvalidArgumentException($midocoAccessibleComponentByRoleArrayErrorMessage, __LINE__);
        }
        $this->MidocoAccessibleComponentByRole = $midocoAccessibleComponentByRole;
        
        return $this;
    }
    /**
     * Add item to MidocoAccessibleComponentByRole value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoAccessibleComponentByRoleType $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SaveAccessibleComponentsByRoleResponse
     */
    public function addToMidocoAccessibleComponentByRole(\Pggns\MidocoApi\MidocoSystem\StructType\MidocoAccessibleComponentByRoleType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\MidocoSystem\StructType\MidocoAccessibleComponentByRoleType) {
            throw new InvalidArgumentException(sprintf('The MidocoAccessibleComponentByRole property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\MidocoAccessibleComponentByRoleType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAccessibleComponentByRole[] = $item;
        
        return $this;
    }
}
