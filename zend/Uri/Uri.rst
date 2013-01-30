.. Uri/Uri.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Uri\\Uri
==============

Generic URI handler

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Create a new URI object

    :param Uri|string|null: 

    :throws Exception\InvalidArgumentException: 



setEscaper
++++++++++

.. function:: setEscaper()


    Set Escaper instance

    :param Escaper: 



getEscaper
++++++++++

.. function:: getEscaper()


    Retrieve Escaper instance
    
    Lazy-loads one if none provided

    :rtype: Escaper 



isValid
+++++++

.. function:: isValid()


    Check if the URI is valid
    
    Note that a relative URI may still be valid

    :rtype: bool 



isValidRelative
+++++++++++++++

.. function:: isValidRelative()


    Check if the URI is a valid relative URI

    :rtype: bool 



isAbsolute
++++++++++

.. function:: isAbsolute()


    Check if the URI is an absolute or relative URI

    :rtype: bool 



parse
+++++

.. function:: parse()


    Parse a URI string

    :param string: 

    :rtype: Uri 



toString
++++++++

.. function:: toString()


    Compose the URI into a string

    :rtype: string 

    :throws: Exception\InvalidUriException 



normalize
+++++++++

.. function:: normalize()


    Normalize the URI
    
    Normalizing a URI includes removing any redundant parent directory or
    current directory references from the path (e.g. foo/bar/../baz becomes
    foo/baz), normalizing the scheme case, decoding any over-encoded
    characters etc.
    
    Eventually, two normalized URLs pointing to the same resource should be
    equal even if they were originally represented by two different strings

    :rtype: Uri 



resolve
+++++++

.. function:: resolve()


    Convert a relative URI into an absolute URI using a base absolute URI as
    a reference.
    
    This is similar to merge() - only it uses the supplied URI as the
    base reference instead of using the current URI as the base reference.
    
    Merging algorithm is adapted from RFC-3986 section 5.2
    (@link http://tools.ietf.org/html/rfc3986#section-5.2)

    :param Uri|string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Uri 



makeRelative
++++++++++++

.. function:: makeRelative()


    Convert the link to a relative link by substracting a base URI
    
     This is the opposite of resolving a relative link - i.e. creating a
     relative reference link from an original URI and a base URI.
    
     If the two URIs do not intersect (e.g. the original URI is not in any
     way related to the base URI) the URI will not be modified.

    :param Uri|string: 

    :rtype: Uri 



getScheme
+++++++++

.. function:: getScheme()


    Get the scheme part of the URI

    :rtype: string|null 



getUserInfo
+++++++++++

.. function:: getUserInfo()


    Get the User-info (usually user:password) part

    :rtype: string|null 



getHost
+++++++

.. function:: getHost()


    Get the URI host

    :rtype: string|null 



getPort
+++++++

.. function:: getPort()


    Get the URI port

    :rtype: integer|null 



getPath
+++++++

.. function:: getPath()


    Get the URI path

    :rtype: string|null 



getQuery
++++++++

.. function:: getQuery()


    Get the URI query

    :rtype: string|null 



getQueryAsArray
+++++++++++++++

.. function:: getQueryAsArray()


    Return the query string as an associative array of key => value pairs
    
    This is an extension to RFC-3986 but is quite useful when working with
    most common URI types

    :rtype: array 



getFragment
+++++++++++

.. function:: getFragment()


    Get the URI fragment

    :rtype: string|null 



setScheme
+++++++++

.. function:: setScheme()


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



setUserInfo
+++++++++++

.. function:: setUserInfo()


    Set the URI User-info part (usually user:password)

    :param string: 

    :rtype: Uri 

    :throws: Exception\InvalidUriPartException If the schema definition
does not have this part



setHost
+++++++

.. function:: setHost()


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



setPort
+++++++

.. function:: setPort()


    Set the port part of the URI

    :param integer: 

    :rtype: Uri 



setPath
+++++++

.. function:: setPath()


    Set the path

    :param string: 

    :rtype: Uri 



setQuery
++++++++

.. function:: setQuery()


    Set the query string
    
    If an array is provided, will encode this array of parameters into a
    query string. Array values will be represented in the query string using
    PHP's common square bracket notation.

    :param string|array: 

    :rtype: Uri 



setFragment
+++++++++++

.. function:: setFragment()


    Set the URI fragment part

    :param string: 

    :rtype: Uri 

    :throws: Exception\InvalidUriPartException If the schema definition
does not have this part



__toString
++++++++++

.. function:: __toString()


    Magic method to convert the URI to a string

    :rtype: string 



validateScheme
++++++++++++++

.. function:: validateScheme()


    Check if a scheme is valid or not
    
    Will check $scheme to be valid against the generic scheme syntax defined
    in RFC-3986. If the class also defines specific acceptable schemes, will
    also check that $scheme is one of them.

    :param string: 

    :rtype: bool 



validateUserInfo
++++++++++++++++

.. function:: validateUserInfo()


    Check that the userInfo part of a URI is valid

    :param string: 

    :rtype: bool 



validateHost
++++++++++++

.. function:: validateHost()


    Validate the host part
    
    Users may control which host types to allow by passing a second parameter
    with a bitmask of HOST_* constants which are allowed. If not specified,
    all address types will be allowed.
    
    Note that the generic URI syntax allows different host representations,
    including IPv4 addresses, IPv6 addresses and future IP address formats
    enclosed in square brackets, and registered names which may be DNS names
    or even more complex names. This is different (and is much more loose)
    from what is commonly accepted as valid HTTP URLs for example.

    :param string: 
    :param integer: bitmask of allowed host types

    :rtype: bool 



validatePort
++++++++++++

.. function:: validatePort()


    Validate the port
    
    Valid values include numbers between 1 and 65535, and empty values

    :param integer: 

    :rtype: bool 



validatePath
++++++++++++

.. function:: validatePath()


    Validate the path

    :param string: 

    :rtype: bool 



validateQueryFragment
+++++++++++++++++++++

.. function:: validateQueryFragment()


    Check if a URI query or fragment part is valid or not
    
    Query and Fragment parts are both restricted by the same syntax rules,
    so the same validation method can be used for both.
    
    You can encode a query or fragment part to ensure it is valid by passing
    it through the encodeQueryFragment() method.

    :param string: 

    :rtype: bool 



encodeUserInfo
++++++++++++++

.. function:: encodeUserInfo()


    URL-encode the user info part of a URI

    :param string: 

    :rtype: string 

    :throws: Exception\InvalidArgumentException 



encodePath
++++++++++

.. function:: encodePath()


    Encode the path
    
    Will replace all characters which are not strictly allowed in the path
    part with percent-encoded representation

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: string 



encodeQueryFragment
+++++++++++++++++++

.. function:: encodeQueryFragment()


    URL-encode a query string or fragment based on RFC-3986 guidelines.
    
    Note that query and fragment encoding allows more unencoded characters
    than the usual rawurlencode() function would usually return - for example
    '/' and ':' are allowed as literals.

    :param string: 

    :rtype: string 

    :throws: Exception\InvalidArgumentException 



parseScheme
+++++++++++

.. function:: parseScheme()


    Extract only the scheme part out of a URI string.
    
    This is used by the parse() method, but is useful as a standalone public
    method if one wants to test a URI string for it's scheme before doing
    anything with it.
    
    Will return the scheme if found, or NULL if no scheme found (URI may
    still be valid, but not full)

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: string|null 



removePathDotSegments
+++++++++++++++++++++

.. function:: removePathDotSegments()


    Remove any extra dot segments (/../, /./) from a path
    
    Algorithm is adapted from RFC-3986 section 5.2.4
    (@link http://tools.ietf.org/html/rfc3986#section-5.2.4)


    :param string: 

    :rtype: string 



merge
+++++

.. function:: merge()


    Merge a base URI and a relative URI into a new URI object
    
    This convenience method wraps ::resolve() to allow users to quickly
    create new absolute URLs without the need to instantiate and clone
    URI objects.
    
    If objects are passed in, none of the passed objects will be modified.

    :param Uri|string: 
    :param Uri|string: 

    :rtype: Uri 



isValidIpAddress
++++++++++++++++

.. function:: isValidIpAddress()


    Check if a host name is a valid IP address, depending on allowed IP address types

    :param string: 
    :param integer: allowed address types

    :rtype: bool 



isValidDnsHostname
++++++++++++++++++

.. function:: isValidDnsHostname()


    Check if an address is a valid DNS hostname

    :param string: 

    :rtype: bool 



isValidRegName
++++++++++++++

.. function:: isValidRegName()


    Check if an address is a valid registered name (as defined by RFC-3986) address

    :param string: 

    :rtype: bool 



normalizeScheme
+++++++++++++++

.. function:: normalizeScheme()


    Normalize the scheme
    
    Usually this means simply converting the scheme to lower case

    :param string: 

    :rtype: string 



normalizeHost
+++++++++++++

.. function:: normalizeHost()


    Normalize the host part
    
    By default this converts host names to lower case

    :param string: 

    :rtype: string 



normalizePort
+++++++++++++

.. function:: normalizePort()


    Normalize the port
    
    If the class defines a default port for the current scheme, and the
    current port is default, it will be unset.

    :param integer: 
    :param string: 

    :rtype: integer|null 



normalizePath
+++++++++++++

.. function:: normalizePath()


    Normalize the path
    
    This involves removing redundant dot segments, decoding any over-encoded
    characters and encoding everything that needs to be encoded and is not

    :param string: 

    :rtype: string 



normalizeQuery
++++++++++++++

.. function:: normalizeQuery()


    Normalize the query part
    
    This involves decoding everything that doesn't need to be encoded, and
    encoding everything else

    :param string: 

    :rtype: string 



normalizeFragment
+++++++++++++++++

.. function:: normalizeFragment()


    Normalize the fragment part
    
    Currently this is exactly the same as normalizeQuery().

    :param string: 

    :rtype: string 



decodeUrlEncodedChars
+++++++++++++++++++++

.. function:: decodeUrlEncodedChars()


    Decode all percent encoded characters which are allowed to be represented literally
    
    Will not decode any characters which are not listed in the 'allowed' list

    :param string: 
    :param string: Pattern of allowed characters

    :rtype: mixed 





Constants
---------

CHAR_UNRESERVED
+++++++++++++++

Character classes defined in RFC-3986

CHAR_GEN_DELIMS
+++++++++++++++

CHAR_SUB_DELIMS
+++++++++++++++

CHAR_RESERVED
+++++++++++++

HOST_IPV4
+++++++++

Host part types represented as binary masks
The binary mask consists of 5 bits in the following order:
<RegName> | <DNS> | <IPvFuture> | <IPv6> | <IPv4>
Place 1 or 0 in the different positions for enable or disable the part.
Finally use a hexadecimal representation.

HOST_IPV6
+++++++++

HOST_IPVFUTURE
++++++++++++++

HOST_IPVANY
+++++++++++

HOST_DNS
++++++++

HOST_DNS_OR_IPV4
++++++++++++++++

HOST_DNS_OR_IPV6
++++++++++++++++

HOST_DNS_OR_IPV4_OR_IPV6
++++++++++++++++++++++++

HOST_DNS_OR_IPVANY
++++++++++++++++++

HOST_REGNAME
++++++++++++

HOST_ALL
++++++++

