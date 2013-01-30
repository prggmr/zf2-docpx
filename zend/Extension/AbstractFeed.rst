.. Feed/Reader/Extension/AbstractFeed.php generated using docpx on 01/30/13 03:32am


Zend\\Feed\\Reader\\Extension\\AbstractFeed
===========================================

Methods
+++++++

setDomDocument
--------------

.. function:: setDomDocument()


    Set the DOM document

    :param DOMDocument: 

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

.. function:: setType()


    Set the feed type

    :param string: 

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

.. function:: setXpath()


    Set the XPath query

    :param DOMXPath: 

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

.. function:: setXpathPrefix()


    Set the XPath prefix

    :param string: 

    :rtype: void 



registerNamespaces
------------------

.. function:: registerNamespaces()


    Register the default namespaces for the current feed format



