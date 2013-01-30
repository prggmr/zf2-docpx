.. Http/Client/Cookies.php generated using docpx on 01/30/13 03:32am


Zend\\Http\\Client\\Cookies
===========================

A Cookies object is designed to contain and maintain HTTP cookies, and should
be used along with Zend_Http_Client in order to manage cookies across HTTP requests and
responses.

The class contains an array of Zend\Http\Header\Cookie objects. Cookies can be added
automatically from a request or manually. Then, the Cookies class can find and return the
cookies needed for a specific HTTP request.

A special parameter can be passed to all methods of this class that return cookies: Cookies
can be returned either in their native form (as Zend\Http\Header\Cookie objects) or as strings -
the later is suitable for sending as the value of the "Cookie" header in an HTTP request.
You can also choose, when returning more than one cookie, whether to get an array of strings
(by passing Zend\Http\Client\Cookies::COOKIE_STRING_ARRAY) or one unified string for all cookies
(by passing Zend\Http\Client\Cookies::COOKIE_STRING_CONCAT).

Methods
+++++++

addCookie
---------

.. function:: addCookie()


    Add a cookie to the class. Cookie should be passed either as a Zend\Http\Header\Cookie object
    or as a string - in which case an object is created from the string.

    :param SetCookie|string: 
    :param Uri\Uri|string: Optional reference URI (for domain, path, secure)

    :throws Exception\InvalidArgumentException: if invalid $cookie value



addCookiesFromResponse
----------------------

.. function:: addCookiesFromResponse()


    Parse an HTTP response, adding all the cookies set in that response

    :param Response: 
    :param Uri\Uri|string: Requested URI



getAllCookies
-------------

.. function:: getAllCookies()


    Get all cookies in the cookie jar as an array

    :param int: Whether to return cookies as objects of \Zend\Http\Header\Cookie or as strings

    :rtype: array|string 



getMatchingCookies
------------------

.. function:: getMatchingCookies()


    Return an array of all cookies matching a specific request according to the request URI,
    whether session cookies should be sent or not, and the time to consider as "now" when
    checking cookie expiry time.

    :param string|Uri\Uri: URI to check against (secure, domain, path)
    :param bool: Whether to send session cookies
    :param int: Whether to return cookies as objects of \Zend\Http\Header\Cookie or as strings
    :param int: Override the current time when checking for expiry time

    :throws Exception\InvalidArgumentException: if invalid URI

    :rtype: array|string 



getCookie
---------

.. function:: getCookie()


    Get a specific cookie according to a URI and name

    :param Uri\Uri|string: The uri (domain and path) to match
    :param string: The cookie's name
    :param int: Whether to return cookies as objects of \Zend\Http\Header\Cookie or as strings

    :throws Exception\InvalidArgumentException: if invalid URI specified or invalid $retAs value

    :rtype: Cookie|string 



_flattenCookiesArray
--------------------

.. function:: _flattenCookiesArray()


    Helper function to recursively flatten an array. Should be used when exporting the
    cookies array (or parts of it)

    :param \Zend\Http\Header\Cookie|array: 
    :param int: What value to return

    :rtype: array|string 



_matchDomain
------------

.. function:: _matchDomain()


    Return a subset of the cookies array matching a specific domain

    :param string: 

    :rtype: array 



_matchPath
----------

.. function:: _matchPath()


    Return a subset of a domain-matching cookies that also match a specified path

    :param array: 
    :param string: 

    :rtype: array 



fromResponse
------------

.. function:: fromResponse()


    Create a new Cookies object and automatically load into it all the
    cookies set in an Http_Response object. If $uri is set, it will be
    considered as the requested URI for setting default domain and path
    of the cookie.

    :param Response: HTTP Response object
    :param Uri\Uri|string: The requested URI

    :rtype: Cookies 

    :todo:  



count
-----

.. function:: count()


    Required by Countable interface

    :rtype: int 



getIterator
-----------

.. function:: getIterator()


    Required by IteratorAggregate interface

    :rtype: ArrayIterator 



isEmpty
-------

.. function:: isEmpty()


    Tells if the array of cookies is empty

    :rtype: bool 



reset
-----

.. function:: reset()


    Empties the cookieJar of any cookie

    :rtype: Cookies 



offsetExists
------------

.. function:: offsetExists()


    (PHP 5 &gt;= 5.1.0)<br/>
    Whether a offset exists


    :param mixed: <p>
An offset to check for.
</p>

    :rtype: bool Returns true on success or false on failure.
</p>
<p>
The return value will be casted to boolean if non-boolean was returned.



offsetGet
---------

.. function:: offsetGet()


    (PHP 5 &gt;= 5.1.0)<br/>
    Offset to retrieve


    :param mixed: <p>
The offset to retrieve.
</p>

    :rtype: mixed Can return all value types.



offsetSet
---------

.. function:: offsetSet()


    (PHP 5 &gt;= 5.1.0)<br/>
    Offset to set


    :param mixed: <p>
The offset to assign the value to.
</p>
    :param mixed: <p>
The value to set.
</p>

    :rtype: void 



offsetUnset
-----------

.. function:: offsetUnset()


    (PHP 5 &gt;= 5.1.0)<br/>
    Offset to unset


    :param mixed: <p>
The offset to unset.
</p>

    :rtype: void 



serialize
---------

.. function:: serialize()


    (PHP 5 &gt;= 5.1.0)<br/>
    String representation of object


    :rtype: string the string representation of the object or &null;



unserialize
-----------

.. function:: unserialize()


    (PHP 5 &gt;= 5.1.0)<br/>
    Constructs the object


    :param string: <p>
The string representation of the object.
</p>

    :rtype: mixed the original value unserialized.



fromArray
---------

.. function:: fromArray()



fromString
----------

.. function:: fromString()



toArray
-------

.. function:: toArray()



toString
--------

.. function:: toString()



get
---

.. function:: get()



set
---

.. function:: set()





Constants
+++++++++

COOKIE_OBJECT
=============

Return cookie(s) as a Zend\Http\Header\Cookie object

COOKIE_STRING_ARRAY
===================

Return cookie(s) as a string (suitable for sending in an HTTP request)

COOKIE_STRING_CONCAT
====================

Return all cookies as one long string (suitable for sending in an HTTP request)

