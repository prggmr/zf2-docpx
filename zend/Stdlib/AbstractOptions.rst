.. Stdlib/AbstractOptions.php generated using docpx on 01/30/13 03:32am


Zend\\Stdlib\\AbstractOptions
=============================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    @param  array|Traversable|null $options



setFromArray
------------

.. function:: setFromArray()


    @param  array|Traversable $options


    :rtype: AbstractOptions Provides fluent interface



toArray
-------

.. function:: toArray()


    Cast to array

    :rtype: array 



__set
-----

.. function:: __set()


    @see ParameterObject::__set()

    :param string: 
    :param mixed: 

    :throws Exception\BadMethodCallException: 

    :rtype: void 



__get
-----

.. function:: __get()


    @see ParameterObject::__get()

    :param string: 

    :throws Exception\BadMethodCallException: 

    :rtype: mixed 



__isset
-------

.. function:: __isset()


    @see ParameterObject::__isset()

    :param string: 

    :rtype: bool 



__unset
-------

.. function:: __unset()


    @see ParameterObject::__unset()

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: void 



