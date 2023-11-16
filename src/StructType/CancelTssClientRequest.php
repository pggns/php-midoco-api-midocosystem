<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelTssClientRequest StructType
 * @subpackage Structs
 */
class CancelTssClientRequest extends AbstractStructBase
{
    /**
     * The MidocoTssClient
     * Meta information extracted from the WSDL
     * - ref: MidocoTssClient
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTssClient|null
     */
    protected ?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoTssClient $MidocoTssClient = null;
    /**
     * Constructor method for CancelTssClientRequest
     * @uses CancelTssClientRequest::setMidocoTssClient()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTssClient $midocoTssClient
     */
    public function __construct(?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoTssClient $midocoTssClient = null)
    {
        $this
            ->setMidocoTssClient($midocoTssClient);
    }
    /**
     * Get MidocoTssClient value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTssClient|null
     */
    public function getMidocoTssClient(): ?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoTssClient
    {
        return $this->MidocoTssClient;
    }
    /**
     * Set MidocoTssClient value
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTssClient $midocoTssClient
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\CancelTssClientRequest
     */
    public function setMidocoTssClient(?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoTssClient $midocoTssClient = null): self
    {
        $this->MidocoTssClient = $midocoTssClient;
        
        return $this;
    }
}
