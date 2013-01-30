.. Db/Adapter/ParameterContainer.php generated using docpx on 01/30/13 03:32am


Zend\\Db\\Adapter\\ParameterContainer
=====================================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param array: 



offsetExists
------------

.. function:: offsetExists()


    Offset exists

    :param string: 

    :rtype: bool 



offsetGet
---------

.. function:: offsetGet()


    Offset get

    :param string: 

    :rtype: mixed 



offsetSetReference
------------------

.. function:: offsetSetReference()


    @param $name

    :param $from: 



offsetSet
---------

.. function:: offsetSet()


    Offset set

    :param string|integer: 
    :param mixed: 
    :param mixed: 



offsetUnset
-----------

.. function:: offsetUnset()


    Offset unset

    :param string: 

    :rtype: ParameterContainer 



setFromArray
------------

.. function:: setFromArray()


    Set from array

    :param array: 

    :rtype: ParameterContainer 



offsetSetErrata
---------------

.. function:: offsetSetErrata()


    Offset set errata

    :param string|integer: 
    :param mixed: 



offsetGetErrata
---------------

.. function:: offsetGetErrata()


    Offset get errata

    :param string|integer: 

    :throws Exception\InvalidArgumentException: 

    :rtype: mixed 



offsetHasErrata
---------------

.. function:: offsetHasErrata()


    Offset has errata

    :param string|integer: 

    :rtype: bool 



offsetUnsetErrata
-----------------

.. function:: offsetUnsetErrata()


    Offset unset errata

    :param string|integer: 

    :throws Exception\InvalidArgumentException: 



getErrataIterator
-----------------

.. function:: getErrataIterator()


    Get errata iterator

    :rtype: \ArrayIterator 



getNamedArray
-------------

.. function:: getNamedArray()


    getNamedArray

    :rtype: array 



getPositionalArray
------------------

.. function:: getPositionalArray()


    getNamedArray

    :rtype: array 



count
-----

.. function:: count()


    count

    :rtype: integer 



current
-------

.. function:: current()


    Current

    :rtype: mixed 



next
----

.. function:: next()


    Next

    :rtype: mixed 



key
---

.. function:: key()


    Key

    :rtype: mixed 



valid
-----

.. function:: valid()


    Valid

    :rtype: bool 



rewind
------

.. function:: rewind()


    Rewind



merge
-----

.. function:: merge()


    @param array|ParameterContainer $parameters


    :rtype: ParameterContainer 





Constants
+++++++++

TYPE_AUTO
=========

TYPE_NULL
=========

TYPE_DOUBLE
===========

TYPE_INTEGER
============

TYPE_STRING
===========

TYPE_LOB
========

