.. Feed/Reader/AbstractEntry.php generated using docpx on 01/30/13 03:32am


Zend\\Feed\\Reader\\AbstractEntry
=================================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param DOMElement: 
    :param int: 
    :param null|string: 



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

.. function:: setXpath()


    Set the XPath query

    :param DOMXPath: 

    :rtype: \Zend\Feed\Reader\AbstractEntry 



getExtensions
-------------

.. function:: getExtensions()


    Get registered extensions

    :rtype: array 



getExtension
------------

.. function:: getExtension()


    Return an Extension object with the matching name (postfixed with _Entry)

    :param string: 

    :rtype: \Zend\Feed\Reader\Extension\AbstractEntry 



__call
------

.. function:: __call()


    Method overloading: call given method on first extension implementing it

    :param string: 
    :param array: 

    :rtype: mixed 

    :throws: Exception\BadMethodCallException if no extensions implements the method



_loadExtensions
---------------

.. function:: _loadExtensions()


    Load extensions from Zend_Feed_Reader

    :rtype: void 



