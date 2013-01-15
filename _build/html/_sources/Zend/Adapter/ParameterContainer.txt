.. /Db/Adapter/ParameterContainer.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\Adapter\\ParameterContainer
*************************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$data = false])


    Constructor

    :param array $data: 



offsetExists
------------

.. function:: offsetExists($name)


    Offset exists

    :param string $name: 

    :rtype: bool 



offsetGet
---------

.. function:: offsetGet($name)


    Offset get

    :param string $name: 

    :rtype: mixed 



offsetSetReference
------------------

.. function:: offsetSetReference($name, $from)


    @param $name

    :param $from: 



offsetSet
---------

.. function:: offsetSet($name, $value, [$errata = false])


    Offset set

    :param string|integer $name: 
    :param mixed $value: 
    :param mixed $errata: 



offsetUnset
-----------

.. function:: offsetUnset($name)


    Offset unset

    :param string $name: 

    :rtype: ParameterContainer 



setFromArray
------------

.. function:: setFromArray($data)


    Set from array

    :param array $data: 

    :rtype: ParameterContainer 



offsetSetErrata
---------------

.. function:: offsetSetErrata($name, $errata)


    Offset set errata

    :param string|integer $name: 
    :param mixed $errata: 



offsetGetErrata
---------------

.. function:: offsetGetErrata($name)


    Offset get errata

    :param string|integer $name: 

    :throws Exception\InvalidArgumentException: 

    :rtype: mixed 



offsetHasErrata
---------------

.. function:: offsetHasErrata($name)


    Offset has errata

    :param string|integer $name: 

    :rtype: bool 



offsetUnsetErrata
-----------------

.. function:: offsetUnsetErrata($name)


    Offset unset errata

    :param string|integer $name: 

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

.. function:: merge($parameters)


    @param array|ParameterContainer $parameters


    :rtype: ParameterContainer 





Constants
---------

TYPE_AUTO
+++++++++

TYPE_NULL
+++++++++

TYPE_DOUBLE
+++++++++++

TYPE_INTEGER
++++++++++++

TYPE_STRING
+++++++++++

TYPE_LOB
++++++++

