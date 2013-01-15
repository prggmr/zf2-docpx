.. /Di/Definition/ClassDefinition.php generated using docpx on 01/15/13 05:29pm


Zend\\Di\\Definition\\ClassDefinition
*************************************


Class definitions for a single class



Methods
=======

__construct
-----------

.. function:: __construct($class)


    @param string $class



setInstantiator
---------------

.. function:: setInstantiator($instantiator)


    @param  null|\Callable|array|string $instantiator

    :rtype: self 



setSupertypes
-------------

.. function:: setSupertypes($supertypes)


    @param  string[] $supertypes

    :rtype: self 



addMethod
---------

.. function:: addMethod($method, [$isRequired = false])


    @param  string    $method

    :param bool|null $isRequired: 

    :rtype: self 



addMethodParameter
------------------

.. function:: addMethodParameter($method, $parameterName, $parameterInfo)


    @param $method

    :param $parameterName: 
    :param array $parameterInfo: (keys: required, type)

    :rtype: ClassDefinition 



getClasses
----------

.. function:: getClasses()


    {@inheritDoc}



hasClass
--------

.. function:: hasClass($class)


    {@inheritDoc}



getClassSupertypes
------------------

.. function:: getClassSupertypes($class)


    {@inheritDoc}



getInstantiator
---------------

.. function:: getInstantiator($class)


    {@inheritDoc}



hasMethods
----------

.. function:: hasMethods($class)


    {@inheritDoc}



getMethods
----------

.. function:: getMethods($class)


    {@inheritDoc}



hasMethod
---------

.. function:: hasMethod($class, $method)


    {@inheritDoc}



hasMethodParameters
-------------------

.. function:: hasMethodParameters($class, $method)


    {@inheritDoc}



getMethodParameters
-------------------

.. function:: getMethodParameters($class, $method)


    {@inheritDoc}





