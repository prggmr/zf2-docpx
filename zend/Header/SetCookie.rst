.. Http/Header/SetCookie.php generated using docpx on 01/30/13 03:32am


Zend\\Http\\Header\\SetCookie
=============================

@throws Exception\InvalidArgumentException

Methods
+++++++

fromString
----------

.. function:: fromString()


    @static


    :param $headerLine: 
    :param bool: 

    :rtype: array|SetCookie 



__construct
-----------

.. function:: __construct()


    Cookie object constructor


    :param string: 
    :param string: 
    :param int: 
    :param string: 
    :param string: 
    :param bool: 
    :param bool: 
    :param string: 
    :param int: 

    :rtype: SetCookie 



getFieldName
------------

.. function:: getFieldName()


    @return string 'Set-Cookie'



getFieldValue
-------------

.. function:: getFieldValue()


    @throws Exception\RuntimeException

    :rtype: string 



setName
-------

.. function:: setName()


    @param string $name


    :rtype: SetCookie 



getName
-------

.. function:: getName()


    @return string



setValue
--------

.. function:: setValue()


    @param string $value



getValue
--------

.. function:: getValue()


    @return string



setVersion
----------

.. function:: setVersion()


    Set version

    :param integer: 

    :throws Exception\InvalidArgumentException: 



getVersion
----------

.. function:: getVersion()


    Get version

    :rtype: integer 



setMaxAge
---------

.. function:: setMaxAge()


    Set Max-Age

    :param integer: 

    :throws Exception\InvalidArgumentException: 



getMaxAge
---------

.. function:: getMaxAge()


    Get Max-Age

    :rtype: integer 



setExpires
----------

.. function:: setExpires()


    @param int $expires


    :rtype: SetCookie 



getExpires
----------

.. function:: getExpires()


    @param bool $inSeconds

    :rtype: int 



setDomain
---------

.. function:: setDomain()


    @param string $domain



getDomain
---------

.. function:: getDomain()


    @return string



setPath
-------

.. function:: setPath()


    @param string $path



getPath
-------

.. function:: getPath()


    @return string



setSecure
---------

.. function:: setSecure()


    @param  bool $secure



isSecure
--------

.. function:: isSecure()


    @return bool



setHttponly
-----------

.. function:: setHttponly()


    @param  bool $httponly



isHttponly
----------

.. function:: isHttponly()


    @return bool



isExpired
---------

.. function:: isExpired()


    Check whether the cookie has expired
    
    Always returns false if the cookie is a session cookie (has no expiry time)

    :param int: Timestamp to consider as "now"

    :rtype: bool 



isSessionCookie
---------------

.. function:: isSessionCookie()


    Check whether the cookie is a session cookie (has no expiry time set)

    :rtype: bool 



isValidForRequest
-----------------

.. function:: isValidForRequest()



match
-----

.. function:: match()


    Checks whether the cookie should be sent or not in a specific scenario

    :param string|Zend\Uri\Uri: URI to check against (secure, domain, path)
    :param boolean: Whether to send session cookies
    :param int: Override the current time when checking for expiry time

    :rtype: boolean 



matchCookieDomain
-----------------

.. function:: matchCookieDomain()


    Check if a cookie's domain matches a host name.
    
    Used by Zend\Http\Cookies for cookie matching

    :param string: 
    :param string: 

    :rtype: boolean 



matchCookiePath
---------------

.. function:: matchCookiePath()


    Check if a cookie's path matches a URL path
    
    Used by Zend\Http\Cookies for cookie matching

    :param string: 
    :param string: 

    :rtype: boolean 



toString
--------

.. function:: toString()



toStringMultipleHeaders
-----------------------

.. function:: toStringMultipleHeaders()



