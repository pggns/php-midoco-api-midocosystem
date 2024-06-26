<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrderRetentionPeriodResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveOrderRetentionPeriodResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderRetentionPeriod
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoOrderRetentionPeriod
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrderRetentionPeriod|null
     */
    protected ?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrderRetentionPeriod $MidocoOrderRetentionPeriod = null;
    /**
     * Constructor method for SaveOrderRetentionPeriodResponse
     * @uses SaveOrderRetentionPeriodResponse::setMidocoOrderRetentionPeriod()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod
     */
    public function __construct(?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod = null)
    {
        $this
            ->setMidocoOrderRetentionPeriod($midocoOrderRetentionPeriod);
    }
    /**
     * Get MidocoOrderRetentionPeriod value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrderRetentionPeriod|null
     */
    public function getMidocoOrderRetentionPeriod(): ?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrderRetentionPeriod
    {
        return $this->MidocoOrderRetentionPeriod;
    }
    /**
     * Set MidocoOrderRetentionPeriod value
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SaveOrderRetentionPeriodResponse
     */
    public function setMidocoOrderRetentionPeriod(?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod = null): self
    {
        $this->MidocoOrderRetentionPeriod = $midocoOrderRetentionPeriod;
        
        return $this;
    }
}
