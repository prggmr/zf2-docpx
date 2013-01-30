.. Dom/NodeList.php generated using docpx on 01/30/13 03:32am


Zend\\Dom\\NodeList
===================

Nodelist for DOM XPath query

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param string: 
    :param string|array: 
    :param DOMDocument: 
    :param DOMNodeList: 

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



offsetExists
------------

.. function:: offsetExists()


    ArrayAccess: offset exists

    :rtype: bool 



offsetGet
---------

.. function:: offsetGet()


    ArrayAccess: get offset

    :rtype: mixed 



offsetSet
---------

.. function:: offsetSet()


    ArrayAccess: set offset

    :rtype: void 

    :throws: Exception\BadMethodCallException when attemptingn to write to a read-only item



offsetUnset
-----------

.. function:: offsetUnset()


    ArrayAccess: unset offset

    :rtype: void 

    :throws: Exception\BadMethodCallException when attemptingn to unset a read-only item



