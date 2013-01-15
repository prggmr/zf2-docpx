.. /Feed/Reader/AbstractEntry.php generated using docpx on 01/15/13 05:29pm


Zend\\Feed\\Reader\\AbstractEntry
*********************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct($entry, $entryKey, [$type = false])


    Constructor

    :param DOMElement $entry: 
    :param int $entryKey: 
    :param null|string $type: 



getDomDocument
--------------

.. function:: getDomDocument()


    Get the DOM

    :rtype: DOMDocument 



getElement
----------

.. function:: getElement()


    Get the entry element

    :rtype: DOMElement 



getEncoding
-----------

.. function:: getEncoding()


    Get the Entry's encoding

    :rtype: string 



saveXml
-------

.. function:: saveXml()


    Get entry as xml

    :rtype: string 



getType
-------

.. function:: getType()


    Get the entry type

    :rtype: string 



getXpath
--------

.. function:: getXpath()


    Get the XPath query object

    :rtype: DOMXPath 



setXpath
--------

.. function:: setXpath($xpath)


    Set the XPath query

    :param DOMXPath $xpath: 

    :rtype: \Zend\Feed\Reader\AbstractEntry 



getExtensions
-------------

.. function:: getExtensions()


    Get registered extensions

    :rtype: array 



getExtension
------------

.. function:: getExtension($name)


    Return an Extension object with the matching name (postfixed with _Entry)

    :param string $name: 

    :rtype: \Zend\Feed\Reader\Extension\AbstractEntry 



__call
------

.. function:: __call($method, $args)


    Method overloading: call given method on first extension implementing it

    :param string $method: 
    :param array $args: 

    :rtype: mixed 

    :throws: Exception\BadMethodCallException if no extensions implements the method



_loadExtensions
---------------

.. function:: _loadExtensions()


    Load extensions from Zend_Feed_Reader

    :rtype: void 





