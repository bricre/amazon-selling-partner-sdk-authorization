<?php

namespace Amz\Authorization\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A Login with Amazon (LWA) authorization code.
 */
class AuthorizationCode extends AbstractModel
{
    /**
     * A Login with Amazon (LWA) authorization code that can be exchanged for a refresh
     * token and access token that authorize you to make calls to a Selling Partner
     * API.
     *
     * @var string
     */
    public $authorizationCode = null;
}
