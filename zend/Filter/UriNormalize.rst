.. Filter/UriNormalize.php generated using docpx on 01/30/13 03:32am


Zend\\Filter\\UriNormalize
==========================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Sets filter options

    :param string|array|\Zend\Config\Config: 

    :rtype: void 



setDefaultScheme
----------------

.. function:: setDefaultScheme()


    Set the default scheme to use when parsing scheme-less URIs
    
    The scheme used when parsing URIs may affect the specific object used to
    normalize the URI and thus may affect the resulting normalize URI.

    :param string: 

    :rtype: \Zend\Filter\UriNormalize 



setEnforcedScheme
-----------------

.. function:: setEnforcedScheme()


    Set a URI scheme to enforce on schemeless URIs
    
    This allows forcing input values such as 'www.example.com/foo' into
    'http://www.example.com/foo'.
    
    This should be used with caution, as a standard-compliant URI parser
    would regard 'www.example.com' in the above input URI to be the path and
    not host part of the URI. While this option can assist in solving
    real-world user mishaps, it may yield unexpected results at times.

    :param string: 

    :rtype: \Zend\Filter\UriNormalize 



filter
------

.. function:: filter()


    Filter the URL by normalizing it and applying a default scheme if set

    :param string: 

    :rtype: string 



enforceScheme
-------------

.. function:: enforceScheme()


    Enforce the defined scheme on the URI
    
    This will also adjust the host and path parts of the URI as expected in
    the case of scheme-less network URIs

    :param Uri: 



