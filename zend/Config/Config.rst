.. Config/Config.php generated using docpx on 01/30/13 03:32am


Zend\\Config\\Config
====================

Provides a property based interface to an array.
The data are read-only unless $allowModifications is set to true
on construction.

Implements Countable, Iterator and ArrayAccess
to facilitate easy access to the data.

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor.
    
    Data is read-only unless $allowModifications is set to true
    on construction.

    :param array: 
    :param bool: 



get
---

.. function:: get()


    Retrieve a value and return $default if there is no element set.

    :param string: 
    :param mixed: 

    :rtype: mixed 



__get
-----

.. function:: __get()


    Magic function so that $obj->value will work.

    :param string: 

    :rtype: mixed 



__set
-----

.. function:: __set()


    Set a value in the config.
    
    Only allow setting of a property if $allowModifications  was set to true
    on construction. Otherwise, throw an exception.

    :param string: 
    :param mixed: 

    :rtype: void 

    :throws: Exception\RuntimeException 



__clone
-------

.. function:: __clone()


    Deep clone of this instance to ensure that nested Zend\Configs are also
    cloned.

    :rtype: void 



toArray
-------

.. function:: toArray()


    Return an associative array of the stored data.

    :rtype: array 



__isset
-------

.. function:: __isset()


    isset() overloading

    :param string: 

    :rtype: bool 



__unset
-------

.. function:: __unset()


    unset() overloading

    :param string: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException 



count
-----

.. function:: count()


    count(): defined by Countable interface.


    :rtype: integer 



current
-------

.. function:: current()


    current(): defined by Iterator interface.


    :rtype: mixed 



key
---

.. function:: key()


    key(): defined by Iterator interface.


    :rtype: mixed 



next
----

.. function:: next()


    next(): defined by Iterator interface.


    :rtype: void 



rewind
------

.. function:: rewind()


    rewind(): defined by Iterator interface.


    :rtype: void 



valid
-----

.. function:: valid()


    valid(): defined by Iterator interface.


    :rtype: bool 



offsetExists
------------

.. function:: offsetExists()


    offsetExists(): defined by ArrayAccess interface.


    :param mixed: 

    :rtype: bool 



offsetGet
---------

.. function:: offsetGet()


    offsetGet(): defined by ArrayAccess interface.


    :param mixed: 

    :rtype: mixed 



offsetSet
---------

.. function:: offsetSet()


    offsetSet(): defined by ArrayAccess interface.


    :param mixed: 
    :param mixed: 

    :rtype: void 



offsetUnset
-----------

.. function:: offsetUnset()


    offsetUnset(): defined by ArrayAccess interface.


    :param mixed: 

    :rtype: void 



merge
-----

.. function:: merge()


    Merge another Config with this one.
    
    For duplicate keys, the following will be performed:
    - Nested Configs will be recursively merged.
    - Items in $merge with INTEGER keys will be appended.
    - Items in $merge with STRING keys will overwrite current values.

    :param Config: 

    :rtype: Config 



setReadOnly
-----------

.. function:: setReadOnly()


    Prevent any more modifications being made to this instance.
    
    Useful after merge() has been used to merge multiple Config objects
    into one object which should then not be modified again.

    :rtype: void 



isReadOnly
----------

.. function:: isReadOnly()


    Returns whether this Config object is read only or not.

    :rtype: bool 



