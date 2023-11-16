<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrgunitDocumentResponse StructType
 * @subpackage Structs
 */
class GetOrgunitDocumentResponse extends AbstractStructBase
{
    /**
     * The MidocoOrgunitDocument
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoOrgunitDocument
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrgunitDocument|null
     */
    protected ?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrgunitDocument $MidocoOrgunitDocument = null;
    /**
     * Constructor method for GetOrgunitDocumentResponse
     * @uses GetOrgunitDocumentResponse::setMidocoOrgunitDocument()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrgunitDocument $midocoOrgunitDocument
     */
    public function __construct(?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrgunitDocument $midocoOrgunitDocument = null)
    {
        $this
            ->setMidocoOrgunitDocument($midocoOrgunitDocument);
    }
    /**
     * Get MidocoOrgunitDocument value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrgunitDocument|null
     */
    public function getMidocoOrgunitDocument(): ?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrgunitDocument
    {
        return $this->MidocoOrgunitDocument;
    }
    /**
     * Set MidocoOrgunitDocument value
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrgunitDocument $midocoOrgunitDocument
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgunitDocumentResponse
     */
    public function setMidocoOrgunitDocument(?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrgunitDocument $midocoOrgunitDocument = null): self
    {
        $this->MidocoOrgunitDocument = $midocoOrgunitDocument;
        
        return $this;
    }
}
