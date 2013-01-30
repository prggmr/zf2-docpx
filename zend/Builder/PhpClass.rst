.. Di/Definition/Builder/PhpClass.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Di\\Definition\\Builder\\PhpClass
=======================================

Object containing definitions for a single class

Methods
-------

setName
+++++++

.. function:: setName()


    Set name

    :param string: 

    :rtype: PhpClass 



getName
+++++++

.. function:: getName()


    Get name

    :rtype: string 



setInstantiator
+++++++++++++++

.. function:: setInstantiator()


    @param  string|\Callable|array $instantiator

    :rtype: PhpClass 



getInstantiator
+++++++++++++++

.. function:: getInstantiator()


    @return array|\Callable|string



addSuperType
++++++++++++

.. function:: addSuperType()


    @param  string   $superType

    :rtype: PhpClass 



getSuperTypes
+++++++++++++

.. function:: getSuperTypes()


    Get super types

    :rtype: array 



addInjectionMethod
++++++++++++++++++

.. function:: addInjectionMethod()


    Add injection method

    :param InjectionMethod: 

    :rtype: PhpClass 



createInjectionMethod
+++++++++++++++++++++

.. function:: createInjectionMethod()


    Create and register an injection method
    
    Optionally takes the method name.
    
    This method may be used in lieu of addInjectionMethod() in
    order to provide a more fluent interface for building classes with
    injection methods.

    :param null|string: 

    :rtype: InjectionMethod 



setMethodBuilder
++++++++++++++++

.. function:: setMethodBuilder()


    Override which class will be used by {@link createInjectionMethod()}

    :param string: 

    :rtype: PhpClass 



getMethodBuilder
++++++++++++++++

.. function:: getMethodBuilder()


    Determine what class will be used by {@link createInjectionMethod()}
    
    Mainly to provide the ability to temporarily override the class used.

    :rtype: string 



getInjectionMethods
+++++++++++++++++++

.. function:: getInjectionMethods()


    @return InjectionMethod[]



