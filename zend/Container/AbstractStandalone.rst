.. View/Helper/Placeholder/Container/AbstractStandalone.php generated using docpx on 01/30/13 03:32am


Zend\\View\\Helper\\Placeholder\\Container\\AbstractStandalone
==============================================================

Base class for targeted placeholder helpers

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor



getRegistry
-----------

.. function:: getRegistry()


    Retrieve registry

    :rtype: \Zend\View\Helper\Placeholder\Registry 



setRegistry
-----------

.. function:: setRegistry()


    Set registry object

    :param \Zend\View\Helper\Placeholder\Registry: 

    :rtype: \Zend\View\Helper\Placeholder\Container\AbstractStandalone 



setEscaper
----------

.. function:: setEscaper()


    Set Escaper instance

    :param Escaper: 

    :rtype: AbstractStandalone 



getEscaper
----------

.. function:: getEscaper()


    Get Escaper instance
    
    Lazy-loads one if none available

    :rtype: mixed 



setAutoEscape
-------------

.. function:: setAutoEscape()


    Set whether or not auto escaping should be used

    :param bool: whether or not to auto escape output

    :rtype: \Zend\View\Helper\Placeholder\Container\AbstractStandalone 



getAutoEscape
-------------

.. function:: getAutoEscape()


    Return whether autoEscaping is enabled or disabled
    
    return bool



escape
------

.. function:: escape()


    Escape a string

    :param string: 

    :rtype: string 



setContainer
------------

.. function:: setContainer()


    Set container on which to operate

    :param \Zend\View\Helper\Placeholder\Container\AbstractContainer: 

    :rtype: \Zend\View\Helper\Placeholder\Container\AbstractStandalone 



getContainer
------------

.. function:: getContainer()


    Retrieve placeholder container

    :rtype: \Zend\View\Helper\Placeholder\Container\AbstractContainer 



__set
-----

.. function:: __set()


    Overloading: set property value

    :param string: 
    :param mixed: 

    :rtype: void 



__get
-----

.. function:: __get()


    Overloading: retrieve property

    :param string: 

    :rtype: mixed 



__isset
-------

.. function:: __isset()


    Overloading: check if property is set

    :param string: 

    :rtype: bool 



__unset
-------

.. function:: __unset()


    Overloading: unset property

    :param string: 

    :rtype: void 



__call
------

.. function:: __call()


    Overload
    
    Proxy to container methods

    :param string: 
    :param array: 

    :rtype: mixed 

    :throws: Exception\BadMethodCallException 



toString
--------

.. function:: toString()


    String representation

    :rtype: string 



__toString
----------

.. function:: __toString()


    Cast to string representation

    :rtype: string 



count
-----

.. function:: count()


    Countable

    :rtype: int 



offsetExists
------------

.. function:: offsetExists()


    ArrayAccess: offsetExists

    :param string|int: 

    :rtype: bool 



offsetGet
---------

.. function:: offsetGet()


    ArrayAccess: offsetGet

    :param string|int: 

    :rtype: mixed 



offsetSet
---------

.. function:: offsetSet()


    ArrayAccess: offsetSet

    :param string|int: 
    :param mixed: 

    :rtype: void 



offsetUnset
-----------

.. function:: offsetUnset()


    ArrayAccess: offsetUnset

    :param string|int: 

    :rtype: void 



getIterator
-----------

.. function:: getIterator()


    IteratorAggregate: get Iterator

    :rtype: \Iterator 



