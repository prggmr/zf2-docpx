.. /Feed/Reader/Extension/AbstractEntry.php generated using docpx on 01/15/13 05:29pm


Zend\\Feed\\Reader\\Extension\\AbstractEntry
********************************************


@category Zend



Methods
=======

setEntryElement
---------------

.. function:: setEntryElement($entry)


    Set the entry DOMElement
    
    Has side effect of setting the DOMDocument for the entry.

    :param DOMElement $entry: 

    :rtype: AbstractEntry 



getEntryElement
---------------

.. function:: getEntryElement()


    Get the entry DOMElement

    :rtype: DOMElement 



setEntryKey
-----------

.. function:: setEntryKey($entryKey)


    Set the entry key

    :param string $entryKey: 

    :rtype: AbstractEntry 



getDomDocument
--------------

.. function:: getDomDocument()


    Get the DOM

    :rtype: DOMDocument 



getEncoding
-----------

.. function:: getEncoding()


    Get the Entry's encoding

    :rtype: string 



setType
-------

.. function:: setType($type)


    Set the entry type
    
    Has side effect of setting xpath prefix

    :param string $type: 

    :rtype: AbstractEntry 



getType
-------

.. function:: getType()


    Get the entry type

    :rtype: string 



setXpath
--------

.. function:: setXpath($xpath)


    Set the XPath query

    :param DOMXPath $xpath: 

    :rtype: AbstractEntry 



getXpath
--------

.. function:: getXpath()


    Get the XPath query object

    :rtype: DOMXPath 



toArray
-------

.. function:: toArray()


    Serialize the entry to an array

    :rtype: array 



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

    :rtype: AbstractEntry 



registerNamespaces
------------------

.. function:: registerNamespaces()


    Register XML namespaces

    :rtype: void 





