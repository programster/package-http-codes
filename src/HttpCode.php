<?php

namespace iRAP\Http;

class HttpCode
{
    /**
     * Response for OK.
     */
    const OK = 200;
    
    /**
     * Response for if the user made an invalid request.
     */
    const BAD_REQUEST = 400;
    const REDIRECT_PERMANENT = 301;
    const REDIRECT_TERMPORARY = 302;
    
    
    const FORBIDDEN = 403;
    const NOT_FOUND = 404;
    const SERVER_ERROR = 500;
}




