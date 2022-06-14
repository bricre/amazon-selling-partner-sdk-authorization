<?php

namespace Amz\Authorization\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The response schema for the GetAuthorizationCode operation.
 */
class GetAuthorizationCodeResponse extends AbstractModel
{
    /**
     * @var \Amz\Authorization\Model\AuthorizationCode
     */
    public $payload = null;

    /**
     * @var \Amz\Authorization\Model\ErrorList
     */
    public $errors = null;
}
