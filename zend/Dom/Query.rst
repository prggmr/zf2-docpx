.. Dom/Query.php generated using docpx on 01/30/13 03:32am


Zend\\Dom\\Query
================

Query DOM structures based on CSS selectors and/or XPath

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param null|string: 
    :param null|string: 



setEncoding
-----------

.. function:: setEncoding()


    Set document encoding

    :param string: 

    :rtype: Query 



getEncoding
-----------

.. function:: getEncoding()


    Get document encoding

    :rtype: null|string 



setDocument
-----------

.. function:: setDocument()


    Set document to query

    :param string: 
    :param null|string: Document encoding

    :rtype: Query 



setDocumentHtml
---------------

.. function:: setDocumentHtml()


    Register HTML document

    :param string: 
    :param null|string: Document encoding

    :rtype: Query 



setDocumentXhtml
----------------

.. function:: setDocumentXhtml()


    Register XHTML document

    :param string: 
    :param null|string: Document encoding

    :rtype: Query 



setDocumentXml
--------------

.. function:: setDocumentXml()


    Register XML document

    :param string: 
    :param null|string: Document encoding

    :rtype: Query 



getDocument
-----------

.. function:: getDocument()


    Retrieve current document

    :rtype: string 



getDocumentType
---------------

.. function:: getDocumentType()


    Get document type

    :rtype: string 



getDocumentErrors
-----------------

.. function:: getDocumentErrors()


    Get any DOMDocument errors found

    :rtype: false|array 



execute
-------

.. function:: execute()


    Perform a CSS selector query

    :param string: 

    :rtype: NodeList 



queryXpath
----------

.. function:: queryXpath()


    Perform an XPath query

    :param string|array: 
    :param string|null: CSS selector query

    :throws Exception\RuntimeException: 

    :rtype: NodeList 



registerXpathNamespaces
-----------------------

.. function:: registerXpathNamespaces()


    Register XPath namespaces

    :param array: 

    :rtype: void 



registerXpathPhpFunctions
-------------------------

.. function:: registerXpathPhpFunctions()


    Register PHP Functions to use in internal DOMXPath

    :param bool: 

    :rtype: void 



getNodeList
-----------

.. function:: getNodeList()


    Prepare node list

    :param DOMDocument: 
    :param string|array: 

    :rtype: array 





Constants
+++++++++

DOC_XML
=======

DOC_HTML
========

DOC_XHTML
=========

