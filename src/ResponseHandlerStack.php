<?php

namespace Amz\Authorization;

use OpenAPI\Runtime\ResponseHandler\GenericResponseHandler;
use OpenAPI\Runtime\ResponseHandler\JsonResponseHandler;
use OpenAPI\Runtime\ResponseHandlerStack\ResponseHandlerStack as BaseClass;

class ResponseHandlerStack extends BaseClass
{
    public function __construct()
    {
        $handlers[] = new GenericResponseHandler();
        $jsonResponsHandler = new JsonResponseHandler();
        $jsonResponsHandler->setResponseTypes(new ResponseTypes());
        $handlers[] = $jsonResponsHandler;
        parent::__construct($handlers);
    }
}
