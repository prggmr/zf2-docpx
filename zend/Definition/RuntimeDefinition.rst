.. /Di/Definition/RuntimeDefinition.php generated using docpx on 01/15/13 05:29pm


Zend\\Di\\Definition\\RuntimeDefinition
***************************************


Class definitions based on runtime reflection



Methods
=======

__construct
-----------

.. function:: __construct([$introspectionStrategy = false, [$explicitClasses = false]])


    Constructor

    :param null|IntrospectionStrategy $introspectionStrategy: 
    :param array|null $explicitClasses: 



setIntrospectionStrategy
------------------------

.. function:: setIntrospectionStrategy($introspectionStrategy)


    @param  IntrospectionStrategy $introspectionStrategy

    :rtype: void 



getIntrospectionStrategy
------------------------

.. function:: getIntrospectionStrategy()


    @return IntrospectionStrategy



setExplicitClasses
------------------

.. function:: setExplicitClasses($explicitClasses)


    Set explicit classes

    :param array $explicitClasses: 



forceLoadClass
--------------

.. function:: forceLoadClass($class)


    @param string $class



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



hasMethod
---------

.. function:: hasMethod($class, $method)


    {@inheritDoc}



getMethods
----------

.. function:: getMethods($class)


    {@inheritDoc}



hasMethodParameters
-------------------

.. function:: hasMethodParameters($class, $method)


    {@inheritDoc}



getMethodParameters
-------------------

.. function:: getMethodParameters($class, $method)


    {@inheritDoc}



processClass
------------

.. function:: processClass($class)


    @param string $class



processParams
-------------

.. function:: processParams($def, $rClass, $rMethod)


    @param array                                  $def

    :param \Zend\Code\Reflection\ClassReflection $rClass: 
    :param \Zend\Code\Reflection\MethodReflection $rMethod: 





