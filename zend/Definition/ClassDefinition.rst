.. Di/Definition/ClassDefinition.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Di\\Definition\\ClassDefinition
=====================================

Class definitions for a single class

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    @param string $class



setInstantiator
+++++++++++++++

.. function:: setInstantiator()


    @param  null|\Callable|array|string $instantiator

    :rtype: self 



setSupertypes
+++++++++++++

.. function:: setSupertypes()


    @param  string[] $supertypes

    :rtype: self 



addMethod
+++++++++

.. function:: addMethod()


    @param  string    $method

    :param bool|null: 

    :rtype: self 



addMethodParameter
++++++++++++++++++

.. function:: addMethodParameter()


    @param $method

    :param $parameterName: 
    :param array: (keys: required, type)

    :rtype: ClassDefinition 



getClasses
++++++++++

.. function:: getClasses()


    {@inheritDoc}



hasClass
++++++++

.. function:: hasClass()


    {@inheritDoc}



getClassSupertypes
++++++++++++++++++

.. function:: getClassSupertypes()


    {@inheritDoc}



getInstantiator
+++++++++++++++

.. function:: getInstantiator()


    {@inheritDoc}



hasMethods
++++++++++

.. function:: hasMethods()


    {@inheritDoc}



getMethods
++++++++++

.. function:: getMethods()


    {@inheritDoc}



hasMethod
+++++++++

.. function:: hasMethod()


    {@inheritDoc}



hasMethodParameters
+++++++++++++++++++

.. function:: hasMethodParameters()


    {@inheritDoc}



getMethodParameters
+++++++++++++++++++

.. function:: getMethodParameters()


    {@inheritDoc}



