.. /Dom/Query.php generated using docpx on 01/15/13 05:29pm


Zend\\Dom\\Query
****************


Query DOM structures based on CSS selectors and/or XPath



Methods
=======

__construct
-----------

.. function:: __construct([$document = false, [$encoding = false]])


    Constructor

    :param null|string $document: 
    :param null|string $encoding: 



setEncoding
-----------

.. function:: setEncoding($encoding)


    Set document encoding

    :param string $encoding: 

    :rtype: Query 



getEncoding
-----------

.. function:: getEncoding()


    Get document encoding

    :rtype: null|string 



setDocument
-----------

.. function:: setDocument($document, [$encoding = false])


    Set document to query

    :param string $document: 
    :param null|string $encoding: Document encoding

    :rtype: Query 



setDocumentHtml
---------------

.. function:: setDocumentHtml($document, [$encoding = false])


    Register HTML document

    :param string $document: 
    :param null|string $encoding: Document encoding

    :rtype: Query 



setDocumentXhtml
----------------

.. function:: setDocumentXhtml($document, [$encoding = false])


    Register XHTML document

    :param string $document: 
    :param null|string $encoding: Document encoding

    :rtype: Query 



setDocumentXml
--------------

.. function:: setDocumentXml($document, [$encoding = false])


    Register XML document

    :param string $document: 
    :param null|string $encoding: Document encoding

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

.. function:: execute($query)


    Perform a CSS selector query

    :param string $query: 

    :rtype: NodeList 



queryXpath
----------

.. function:: queryXpath($xpathQuery, [$query = false])


    Perform an XPath query

    :param string|array $xpathQuery: 
    :param string|null $query: CSS selector query

    :throws Exception\RuntimeException: 

    :rtype: NodeList 



registerXpathNamespaces
-----------------------

.. function:: registerXpathNamespaces($xpathNamespaces)


    Register XPath namespaces

    :param array $xpathNamespaces: 

    :rtype: void 



registerXpathPhpFunctions
-------------------------

.. function:: registerXpathPhpFunctions([$xpathPhpFunctions = true])


    Register PHP Functions to use in internal DOMXPath

    :param bool $xpathPhpFunctions: 

    :rtype: void 



getNodeList
-----------

.. function:: getNodeList($document, $xpathQuery)


    Prepare node list

    :param DOMDocument $document: 
    :param string|array $xpathQuery: 

    :rtype: array 





Constants
---------

DOC_XML
+++++++

DOC_HTML
++++++++

DOC_XHTML
+++++++++

