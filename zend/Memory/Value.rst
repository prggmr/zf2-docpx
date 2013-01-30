.. Memory/Value.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Memory\\Value
===================

String value object

It's an OO string wrapper.
Used to intercept string updates.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Object constructor

    :param string: 
    :param \Zend\Memory\Container\Movable: 



count
+++++

.. function:: count()


    Countable

    :rtype: int 



offsetExists
++++++++++++

.. function:: offsetExists()


    ArrayAccess interface method
    returns true if string offset exists

    :param integer: 

    :rtype: bool 



offsetGet
+++++++++

.. function:: offsetGet()


    ArrayAccess interface method
    Get character at $offset position

    :param integer: 

    :rtype: string 



offsetSet
+++++++++

.. function:: offsetSet()


    ArrayAccess interface method
    Set character at $offset position

    :param integer: 
    :param string: 



offsetUnset
+++++++++++

.. function:: offsetUnset()


    ArrayAccess interface method
    Unset character at $offset position

    :param integer: 



__toString
++++++++++

.. function:: __toString()


    To string conversion

    :rtype: string 



getRef
++++++

.. function:: getRef()


    Get string value reference
    
    _Must_ be used for value access before PHP v 5.2
    or _may_ be used for performance considerations


    :rtype: string 



startTrace
++++++++++

.. function:: startTrace()


    Start modifications trace
    
    _Must_ be used for value access before PHP v 5.2
    or _may_ be used for performance considerations




