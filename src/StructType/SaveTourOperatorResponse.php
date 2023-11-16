<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTourOperatorResponse StructType
 * @subpackage Structs
 */
class SaveTourOperatorResponse extends AbstractStructBase
{
    /**
     * The MidocoTourOperator
     * Meta information extracted from the WSDL
     * - ref: MidocoTourOperator
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperator|null
     */
    protected ?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperator $MidocoTourOperator = null;
    /**
     * Constructor method for SaveTourOperatorResponse
     * @uses SaveTourOperatorResponse::setMidocoTourOperator()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperator $midocoTourOperator
     */
    public function __construct(?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperator $midocoTourOperator = null)
    {
        $this
            ->setMidocoTourOperator($midocoTourOperator);
    }
    /**
     * Get MidocoTourOperator value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperator|null
     */
    public function getMidocoTourOperator(): ?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperator
    {
        return $this->MidocoTourOperator;
    }
    /**
     * Set MidocoTourOperator value
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperator $midocoTourOperator
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SaveTourOperatorResponse
     */
    public function setMidocoTourOperator(?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperator $midocoTourOperator = null): self
    {
        $this->MidocoTourOperator = $midocoTourOperator;
        
        return $this;
    }
}
