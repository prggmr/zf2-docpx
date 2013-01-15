.. /Dom/NodeList.php generated using docpx on 01/15/13 05:29pm


Zend\\Dom\\NodeList
*******************


Nodelist for DOM XPath query



Methods
=======

__construct
-----------

.. function:: __construct($cssQuery, $xpathQuery, $document, $nodeList)


    Constructor

    :param string $cssQuery: 
    :param string|array $xpathQuery: 
    :param DOMDocument $document: 
    :param DOMNodeList $nodeList: 

    :rtype: void 



getCssQuery
-----------

.. function:: getCssQuery()


    Retrieve CSS Query

    :rtype: string 



getXpathQuery
-------------

.. function:: getXpathQuery()


    Retrieve XPath query

    :rtype: string 



getDocument
-----------

.. function:: getDocument()


    Retrieve DOMDocument

    :rtype: DOMDocument 



rewind
------

.. function:: rewind()


    Iterator: rewind to first element

    :rtype: DOMNode 



valid
-----

.. function:: valid()


    Iterator: is current position valid?

    :rtype: bool 



current
-------

.. function:: current()


    Iterator: return current element

    :rtype: DOMNode 



key
---

.. function:: key()


    Iterator: return key of current element

    :rtype: int 



next
----

.. function:: next()


    Iterator: move to next element

    :rtype: DOMNode 



count
-----

.. function:: count()


    Countable: get count

    :rtype: int 





