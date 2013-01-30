.. Code/Scanner/ClassScanner.php generated using docpx on 01/30/13 03:32am


Zend\\Code\\Scanner\\ClassScanner
=================================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    @param  array $classTokens

    :param NameInformation|null: 

    :rtype: ClassScanner 



getAnnotations
--------------

.. function:: getAnnotations()


    Get annotations

    :param Annotation\AnnotationManager: 

    :rtype: Annotation\AnnotationCollection 



getDocComment
-------------

.. function:: getDocComment()


    @return null|string



getDocBlock
-----------

.. function:: getDocBlock()


    @return false|DocBlockScanner



getName
-------

.. function:: getName()


    @return null|string



getShortName
------------

.. function:: getShortName()


    @return null|string



getLineStart
------------

.. function:: getLineStart()


    @return int|null



getLineEnd
----------

.. function:: getLineEnd()


    @return int|null



isFinal
-------

.. function:: isFinal()


    @return bool



isInstantiable
--------------

.. function:: isInstantiable()


    @return bool



isAbstract
----------

.. function:: isAbstract()


    @return bool



isInterface
-----------

.. function:: isInterface()


    @return bool



hasParentClass
--------------

.. function:: hasParentClass()


    @return bool



getParentClass
--------------

.. function:: getParentClass()


    @return null|string



getInterfaces
-------------

.. function:: getInterfaces()


    @return array



getConstants
------------

.. function:: getConstants()


    @return array



getPropertyNames
----------------

.. function:: getPropertyNames()


    Returns a list of property names

    :rtype: array 



getProperties
-------------

.. function:: getProperties()


    Returns a list of properties

    :rtype: array 



getProperty
-----------

.. function:: getProperty()



getMethodNames
--------------

.. function:: getMethodNames()


    @return array



getMethods
----------

.. function:: getMethods()


    @return MethodScanner[]



getMethod
---------

.. function:: getMethod()


    @param  string|int $methodNameOrInfoIndex


    :rtype: MethodScanner 



hasMethod
---------

.. function:: hasMethod()


    @param  string $name

    :rtype: bool 



export
------

.. function:: export()



__toString
----------

.. function:: __toString()



scan
----

.. function:: scan()


    @return void




