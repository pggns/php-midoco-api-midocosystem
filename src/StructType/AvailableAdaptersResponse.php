<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailableAdaptersResponse StructType
 * @subpackage Structs
 */
class AvailableAdaptersResponse extends AbstractStructBase
{
    /**
     * The MidocoAdapter
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAdapter
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\MidocoAdapterType[]
     */
    protected array $MidocoAdapter = [];
    /**
     * Constructor method for AvailableAdaptersResponse
     * @uses AvailableAdaptersResponse::setMidocoAdapter()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoAdapterType[] $midocoAdapter
     */
    public function __construct(array $midocoAdapter = [])
    {
        $this
            ->setMidocoAdapter($midocoAdapter);
    }
    /**
     * Get MidocoAdapter value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\MidocoAdapterType[]
     */
    public function getMidocoAdapter(): array
    {
        return $this->MidocoAdapter;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAdapter method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAdapter method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAdapterForArrayConstraintsFromSetMidocoAdapter(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $availableAdaptersResponseMidocoAdapterItem) {
            // validation for constraint: itemType
            if (!$availableAdaptersResponseMidocoAdapterItem instanceof \Pggns\MidocoApi\MidocoSystem\StructType\MidocoAdapterType) {
                $invalidValues[] = is_object($availableAdaptersResponseMidocoAdapterItem) ? get_class($availableAdaptersResponseMidocoAdapterItem) : sprintf('%s(%s)', gettype($availableAdaptersResponseMidocoAdapterItem), var_export($availableAdaptersResponseMidocoAdapterItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAdapter property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\MidocoAdapterType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAdapter value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoAdapterType[] $midocoAdapter
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\AvailableAdaptersResponse
     */
    public function setMidocoAdapter(array $midocoAdapter = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAdapterArrayErrorMessage = self::validateMidocoAdapterForArrayConstraintsFromSetMidocoAdapter($midocoAdapter))) {
            throw new InvalidArgumentException($midocoAdapterArrayErrorMessage, __LINE__);
        }
        $this->MidocoAdapter = $midocoAdapter;
        
        return $this;
    }
    /**
     * Add item to MidocoAdapter value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoAdapterType $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\AvailableAdaptersResponse
     */
    public function addToMidocoAdapter(\Pggns\MidocoApi\MidocoSystem\StructType\MidocoAdapterType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\MidocoSystem\StructType\MidocoAdapterType) {
            throw new InvalidArgumentException(sprintf('The MidocoAdapter property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\MidocoAdapterType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAdapter[] = $item;
        
        return $this;
    }
}
