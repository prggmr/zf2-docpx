.. View/Helper/HeadMeta.php generated using docpx on 01/30/13 03:32am


Zend\\View\\Helper\\HeadMeta
============================

Zend_Layout_View_Helper_HeadMeta

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor
    
    Set separator to PHP_EOL



__invoke
--------

.. function:: __invoke()


    Retrieve object instance; optionally add meta tag

    :param string: 
    :param string: 
    :param string: 
    :param array: 
    :param string: 

    :rtype: \Zend\View\Helper\HeadMeta 



normalizeType
-------------

.. function:: normalizeType()


    Normalize type attribute of meta

    :param string: type in CamelCase

    :rtype: string 

    :throws: Exception\DomainException 



__call
------

.. function:: __call()


    Overload method access
    
    Allows the following 'virtual' methods:
    - appendName($keyValue, $content, $modifiers = array())
    - offsetGetName($index, $keyValue, $content, $modifiers = array())
    - prependName($keyValue, $content, $modifiers = array())
    - setName($keyValue, $content, $modifiers = array())
    - appendHttpEquiv($keyValue, $content, $modifiers = array())
    - offsetGetHttpEquiv($index, $keyValue, $content, $modifiers = array())
    - prependHttpEquiv($keyValue, $content, $modifiers = array())
    - setHttpEquiv($keyValue, $content, $modifiers = array())
    - appendProperty($keyValue, $content, $modifiers = array())
    - offsetGetProperty($index, $keyValue, $content, $modifiers = array())
    - prependProperty($keyValue, $content, $modifiers = array())
    - setProperty($keyValue, $content, $modifiers = array())

    :param string: 
    :param array: 

    :rtype: \Zend\View\Helper\HeadMeta 

    :throws: Exception\BadMethodCallException 



setCharset
----------

.. function:: setCharset()


    Create an HTML5-style meta charset tag. Something like <meta charset="utf-8">
    
    Not valid in a non-HTML5 doctype

    :param string: 

    :rtype: \Zend\View\Helper\HeadMeta Provides a fluent interface



isValid
-------

.. function:: isValid()


    Determine if item is valid

    :param mixed: 

    :rtype: bool 



append
------

.. function:: append()


    Append

    :param string: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException 



offsetSet
---------

.. function:: offsetSet()


    OffsetSet

    :param string|int: 
    :param string: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException 



offsetUnset
-----------

.. function:: offsetUnset()


    OffsetUnset

    :param string|int: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException 



prepend
-------

.. function:: prepend()


    Prepend

    :param string: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException 



set
---

.. function:: set()


    Set

    :param string: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException 



itemToString
------------

.. function:: itemToString()


    Build meta HTML string

    :param stdClass: 

    :throws Exception\InvalidArgumentException: 

    :rtype: string 



toString
--------

.. function:: toString()


    Render placeholder as string

    :param string|int: 

    :rtype: string 



createData
----------

.. function:: createData()


    Create data item for inserting into stack

    :param string: 
    :param string: 
    :param string: 
    :param array: 

    :rtype: stdClass 



