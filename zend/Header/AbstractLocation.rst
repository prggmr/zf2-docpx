.. Http/Header/AbstractLocation.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Http\\Header\\AbstractLocation
====================================

Abstract Location Header
Supports headers that have URI as value

Methods
-------

fromString
++++++++++

.. function:: fromString()


    Create location-based header from string

    :param string: 

    :rtype: AbstractLocation 

    :throws: Exception\InvalidArgumentException 



setUri
++++++

.. function:: setUri()


    Set the URI/URL for this header, this can be a string or an instance of Zend\Uri\Http

    :param string|UriInterface: 

    :rtype: AbstractLocation 

    :throws: Exception\InvalidArgumentException 



getUri
++++++

.. function:: getUri()


    Return the URI for this header

    :rtype: string 



uri
+++

.. function:: uri()


    Return the URI for this header as an instance of Zend\Uri\Http

    :rtype: UriInterface 



getFieldValue
+++++++++++++

.. function:: getFieldValue()


    Get header value as URI string

    :rtype: string 



toString
++++++++

.. function:: toString()


    Output header line

    :rtype: string 



__toString
++++++++++

.. function:: __toString()


    Allow casting to string

    :rtype: string 



