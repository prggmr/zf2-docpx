.. /Config/Config.php generated using docpx on 01/15/13 05:29pm


Zend\\Config\\Config
********************


Provides a property based interface to an array.
The data are read-only unless $allowModifications is set to true
on construction.

Implements Countable, Iterator and ArrayAccess
to facilitate easy access to the data.



Methods
=======

__construct
-----------

.. function:: __construct($array, [$allowModifications = false])


    Constructor.
    
    Data is read-only unless $allowModifications is set to true
    on construction.

    :param array $array: 
    :param bool $allowModifications: 



get
---

.. function:: get($name, [$default = false])


    Retrieve a value and return $default if there is no element set.

    :param string $name: 
    :param mixed $default: 

    :rtype: mixed 



__get
-----

.. function:: __get($name)


    Magic function so that $obj->value will work.

    :param string $name: 

    :rtype: mixed 



__set
-----

.. function:: __set($name, $value)


    Set a value in the config.
    
    Only allow setting of a property if $allowModifications  was set to true
    on construction. Otherwise, throw an exception.

    :param string $name: 
    :param mixed $value: 

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

.. function:: __isset($name)


    isset() overloading

    :param string $name: 

    :rtype: bool 



__unset
-------

.. function:: __unset($name)


    unset() overloading

    :param string $name: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException 



count
-----

.. function:: count()


    count(): defined by Countable interface.


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :rtype: integer 



current
-------

.. function:: current()


    current(): defined by Iterator interface.


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :rtype: mixed 



key
---

.. function:: key()


    key(): defined by Iterator interface.


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :rtype: mixed 



next
----

.. function:: next()


    next(): defined by Iterator interface.


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :rtype: void 



rewind
------

.. function:: rewind()


    rewind(): defined by Iterator interface.


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :rtype: void 



valid
-----

.. function:: valid()


    valid(): defined by Iterator interface.


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :rtype: bool 



offsetExists
------------

.. function:: offsetExists($offset)


    offsetExists(): defined by ArrayAccess interface.


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param mixed $offset: 

    :rtype: bool 



offsetGet
---------

.. function:: offsetGet($offset)


    offsetGet(): defined by ArrayAccess interface.


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param mixed $offset: 

    :rtype: mixed 



offsetSet
---------

.. function:: offsetSet($offset, $value)


    offsetSet(): defined by ArrayAccess interface.


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param mixed $offset: 
    :param mixed $value: 

    :rtype: void 



offsetUnset
-----------

.. function:: offsetUnset($offset)


    offsetUnset(): defined by ArrayAccess interface.


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param mixed $offset: 

    :rtype: void 



merge
-----

.. function:: merge($merge)


    Merge another Config with this one.
    
    For duplicate keys, the following will be performed:
    - Nested Configs will be recursively merged.
    - Items in $merge with INTEGER keys will be appended.
    - Items in $merge with STRING keys will overwrite current values.

    :param Config $merge: 

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





