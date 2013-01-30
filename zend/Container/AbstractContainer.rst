.. View/Helper/Placeholder/Container/AbstractContainer.php generated using docpx on 01/30/13 03:32am


Zend\\View\\Helper\\Placeholder\\Container\\AbstractContainer
=============================================================

Abstract class representing container for placeholder values

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor - This is needed so that we can attach a class member as the ArrayObject container



set
---

.. function:: set()


    Set a single value

    :param mixed: 

    :rtype: void 



prepend
-------

.. function:: prepend()


    Prepend a value to the top of the container

    :param mixed: 

    :rtype: void 



getValue
--------

.. function:: getValue()


    Retrieve container value
    
    If single element registered, returns that element; otherwise,
    serializes to array.

    :rtype: mixed 



setPrefix
---------

.. function:: setPrefix()


    Set prefix for __toString() serialization

    :param string: 

    :rtype: \Zend\View\Helper\Placeholder\Container\AbstractContainer 



getPrefix
---------

.. function:: getPrefix()


    Retrieve prefix

    :rtype: string 



setPostfix
----------

.. function:: setPostfix()


    Set postfix for __toString() serialization

    :param string: 

    :rtype: \Zend\View\Helper\Placeholder\Container\AbstractContainer 



getPostfix
----------

.. function:: getPostfix()


    Retrieve postfix

    :rtype: string 



setSeparator
------------

.. function:: setSeparator()


    Set separator for __toString() serialization
    
    Used to implode elements in container

    :param string: 

    :rtype: \Zend\View\Helper\Placeholder\Container\AbstractContainer 



getSeparator
------------

.. function:: getSeparator()


    Retrieve separator

    :rtype: string 



setIndent
---------

.. function:: setIndent()


    Set the indentation string for __toString() serialization,
    optionally, if a number is passed, it will be the number of spaces

    :param string|int: 

    :rtype: \Zend\View\Helper\Placeholder\Container\AbstractContainer 



getIndent
---------

.. function:: getIndent()


    Retrieve indentation

    :rtype: string 



getWhitespace
-------------

.. function:: getWhitespace()


    Retrieve whitespace representation of $indent

    :param int|string: 

    :rtype: string 



captureStart
------------

.. function:: captureStart()


    Start capturing content to push into placeholder

    :param string: How to capture content into placeholder; append, prepend, or set
    :param mixed: Key to which to capture content

    :rtype: void 

    :throws: Exception\RuntimeException if nested captures detected



captureEnd
----------

.. function:: captureEnd()


    End content capture

    :rtype: void 



getKeys
-------

.. function:: getKeys()


    Get keys

    :rtype: array 



nextIndex
---------

.. function:: nextIndex()


    Next Index
    
    as defined by the PHP manual

    :rtype: int 



toString
--------

.. function:: toString()


    Render the placeholder

    :param null|int|string: 

    :rtype: string 



__toString
----------

.. function:: __toString()


    Serialize object to string

    :rtype: string 





Constants
+++++++++

SET
===

Whether or not to override all contents of placeholder

APPEND
======

Whether or not to append contents to placeholder

PREPEND
=======

Whether or not to prepend contents to placeholder

