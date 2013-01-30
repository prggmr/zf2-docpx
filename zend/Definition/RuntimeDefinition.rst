.. Di/Definition/RuntimeDefinition.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Di\\Definition\\RuntimeDefinition
=======================================

Class definitions based on runtime reflection

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param null|IntrospectionStrategy: 
    :param array|null: 



setIntrospectionStrategy
++++++++++++++++++++++++

.. function:: setIntrospectionStrategy()


    @param  IntrospectionStrategy $introspectionStrategy

    :rtype: void 



getIntrospectionStrategy
++++++++++++++++++++++++

.. function:: getIntrospectionStrategy()


    @return IntrospectionStrategy



setExplicitClasses
++++++++++++++++++

.. function:: setExplicitClasses()


    Set explicit classes

    :param array: 



forceLoadClass
++++++++++++++

.. function:: forceLoadClass()


    @param string $class



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



hasMethod
+++++++++

.. function:: hasMethod()


    {@inheritDoc}



getMethods
++++++++++

.. function:: getMethods()


    {@inheritDoc}



hasMethodParameters
+++++++++++++++++++

.. function:: hasMethodParameters()


    {@inheritDoc}



getMethodParameters
+++++++++++++++++++

.. function:: getMethodParameters()


    {@inheritDoc}



processClass
++++++++++++

.. function:: processClass()


    @param string $class



processParams
+++++++++++++

.. function:: processParams()


    @param array                                  $def

    :param \Zend\Code\Reflection\ClassReflection: 
    :param \Zend\Code\Reflection\MethodReflection: 



