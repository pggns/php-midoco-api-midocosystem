<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccessibleComponentsByRoleRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAccessibleComponentsByRoleRequest extends AbstractStructBase
{
    /**
     * The MidocoAccessibleComponentByRole
     * Meta information extracted from the WSDL
     * - ref: MidocoAccessibleComponentByRole
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\MidocoAccessibleComponentByRoleType|null
     */
    protected ?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoAccessibleComponentByRoleType $MidocoAccessibleComponentByRole = null;
    /**
     * Constructor method for GetAccessibleComponentsByRoleRequest
     * @uses GetAccessibleComponentsByRoleRequest::setMidocoAccessibleComponentByRole()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole
     */
    public function __construct(?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole = null)
    {
        $this
            ->setMidocoAccessibleComponentByRole($midocoAccessibleComponentByRole);
    }
    /**
     * Get MidocoAccessibleComponentByRole value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\MidocoAccessibleComponentByRoleType|null
     */
    public function getMidocoAccessibleComponentByRole(): ?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoAccessibleComponentByRoleType
    {
        return $this->MidocoAccessibleComponentByRole;
    }
    /**
     * Set MidocoAccessibleComponentByRole value
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetAccessibleComponentsByRoleRequest
     */
    public function setMidocoAccessibleComponentByRole(?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole = null): self
    {
        $this->MidocoAccessibleComponentByRole = $midocoAccessibleComponentByRole;
        
        return $this;
    }
}
