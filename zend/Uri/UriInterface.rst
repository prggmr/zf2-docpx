.. Uri/UriInterface.php generated using docpx on 01/30/13 03:32am


Zend\\Uri\\__construct
======================

.. function:: Zend\Uri\__construct()


    Create a new URI object

    :param Uri|string|null: 

    :throws Exception\InvalidArgumentException: 



Zend\\Uri\\isValid
==================

.. function:: Zend\Uri\isValid()


    Check if the URI is valid
    
    Note that a relative URI may still be valid

    :rtype: bool 



Zend\\Uri\\isValidRelative
==========================

.. function:: Zend\Uri\isValidRelative()


    Check if the URI is a valid relative URI

    :rtype: bool 



Zend\\Uri\\isAbsolute
=====================

.. function:: Zend\Uri\isAbsolute()


    Check if the URI is an absolute or relative URI

    :rtype: bool 



Zend\\Uri\\parse
================

.. function:: Zend\Uri\parse()


    Parse a URI string

    :param string: 

    :rtype: Uri 



Zend\\Uri\\toString
===================

.. function:: Zend\Uri\toString()


    Compose the URI into a string

    :rtype: string 

    :throws: Exception\InvalidUriException 



Zend\\Uri\\normalize
====================

.. function:: Zend\Uri\normalize()


    Normalize the URI
    
    Normalizing a URI includes removing any redundant parent directory or
    current directory references from the path (e.g. foo/bar/../baz becomes
    foo/baz), normalizing the scheme case, decoding any over-encoded
    characters etc.
    
    Eventually, two normalized URLs pointing to the same resource should be
    equal even if they were originally represented by two different strings

    :rtype: Uri 



Zend\\Uri\\makeRelative
=======================

.. function:: Zend\Uri\makeRelative()


    Convert the link to a relative link by substracting a base URI
    
     This is the opposite of resolving a relative link - i.e. creating a
     relative reference link from an original URI and a base URI.
    
     If the two URIs do not intersect (e.g. the original URI is not in any
     way related to the base URI) the URI will not be modified.

    :param Uri|string: 

    :rtype: Uri 



Zend\\Uri\\getScheme
====================

.. function:: Zend\Uri\getScheme()


    Get the scheme part of the URI

    :rtype: string|null 



Zend\\Uri\\getUserInfo
======================

.. function:: Zend\Uri\getUserInfo()


    Get the User-info (usually user:password) part

    :rtype: string|null 



Zend\\Uri\\getHost
==================

.. function:: Zend\Uri\getHost()


    Get the URI host

    :rtype: string|null 



Zend\\Uri\\getPort
==================

.. function:: Zend\Uri\getPort()


    Get the URI port

    :rtype: integer|null 



Zend\\Uri\\getPath
==================

.. function:: Zend\Uri\getPath()


    Get the URI path

    :rtype: string|null 



Zend\\Uri\\getQuery
===================

.. function:: Zend\Uri\getQuery()


    Get the URI query

    :rtype: string|null 



Zend\\Uri\\getQueryAsArray
==========================

.. function:: Zend\Uri\getQueryAsArray()


    Return the query string as an associative array of key => value pairs
    
    This is an extension to RFC-3986 but is quite useful when working with
    most common URI types

    :rtype: array 



Zend\\Uri\\getFragment
======================

.. function:: Zend\Uri\getFragment()


    Get the URI fragment

    :rtype: string|null 



Zend\\Uri\\setScheme
====================

.. function:: Zend\Uri\setScheme()


    Set the URI scheme
    
    If the scheme is not valid according to the generic scheme syntax or
    is not acceptable by the specific URI class (e.g. 'http' or 'https' are
    the only acceptable schemes for the Zend\Uri\Http class) an exception
    will be thrown.
    
    You can check if a scheme is valid before setting it using the
    validateScheme() method.

    :param string: 

    :throws Exception\InvalidUriPartException: 

    :rtype: Uri 



Zend\\Uri\\setUserInfo
======================

.. function:: Zend\Uri\setUserInfo()


    Set the URI User-info part (usually user:password)

    :param string: 

    :rtype: Uri 

    :throws: Exception\InvalidUriPartException If the schema definition
does not have this part



Zend\\Uri\\setHost
==================

.. function:: Zend\Uri\setHost()


    Set the URI host
    
    Note that the generic syntax for URIs allows using host names which
    are not necessarily IPv4 addresses or valid DNS host names. For example,
    IPv6 addresses are allowed as well, and also an abstract "registered name"
    which may be any name composed of a valid set of characters, including,
    for example, tilda (~) and underscore (_) which are not allowed in DNS
    names.
    
    Subclasses of Uri may impose more strict validation of host names - for
    example the HTTP RFC clearly states that only IPv4 and valid DNS names
    are allowed in HTTP URIs.

    :param string: 

    :throws Exception\InvalidUriPartException: 

    :rtype: Uri 



Zend\\Uri\\setPort
==================

.. function:: Zend\Uri\setPort()


    Set the port part of the URI

    :param integer: 

    :rtype: Uri 



Zend\\Uri\\setPath
==================

.. function:: Zend\Uri\setPath()


    Set the path

    :param string: 

    :rtype: Uri 



Zend\\Uri\\setQuery
===================

.. function:: Zend\Uri\setQuery()


    Set the query string
    
    If an array is provided, will encode this array of parameters into a
    query string. Array values will be represented in the query string using
    PHP's common square bracket notation.

    :param string|array: 

    :rtype: Uri 



Zend\\Uri\\setFragment
======================

.. function:: Zend\Uri\setFragment()


    Set the URI fragment part

    :param string: 

    :rtype: Uri 

    :throws: Exception\InvalidUriPartException If the schema definition
does not have this part



Zend\\Uri\\__toString
=====================

.. function:: Zend\Uri\__toString()


    Magic method to convert the URI to a string

    :rtype: string 



