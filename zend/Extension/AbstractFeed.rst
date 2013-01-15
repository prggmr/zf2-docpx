.. /Feed/Reader/Extension/AbstractFeed.php generated using docpx on 01/15/13 05:29pm


Zend\\Feed\\Reader\\Extension\\AbstractFeed
*******************************************


@category Zend



Methods
=======

setDomDocument
--------------

.. function:: setDomDocument($dom)


    Set the DOM document

    :param DOMDocument $dom: 

    :rtype: AbstractFeed 



getDomDocument
--------------

.. function:: getDomDocument()


    Get the DOM

    :rtype: DOMDocument 



getEncoding
-----------

.. function:: getEncoding()


    Get the Feed's encoding

    :rtype: string 



setType
-------

.. function:: setType($type)


    Set the feed type

    :param string $type: 

    :rtype: AbstractFeed 



getType
-------

.. function:: getType()


    Get the feed type
    
    If null, it will attempt to autodetect the type.

    :rtype: string 



toArray
-------

.. function:: toArray()


    Return the feed as an array

    :rtype: array 



setXpath
--------

.. function:: setXpath([$xpath = false])


    Set the XPath query

    :param DOMXPath $xpath: 

    :rtype: AbstractEntry 



getXpath
--------

.. function:: getXpath()


    Get the DOMXPath object

    :rtype: string 



getXpathPrefix
--------------

.. function:: getXpathPrefix()


    Get the XPath prefix

    :rtype: string 



setXpathPrefix
--------------

.. function:: setXpathPrefix($prefix)


    Set the XPath prefix

    :param string $prefix: 

    :rtype: void 



registerNamespaces
------------------

.. function:: registerNamespaces()


    Register the default namespaces for the current feed format





