<?php

namespace zaporylie\Tripletex\Model\Address;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\IdTrait;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\RequestDetailsBase;

class RequestAddressDetails extends RequestDetailsBase implements ModelInterface
{
    use IdTrait;
}
