.. Di/Definition/IntrospectionStrategy.php generated using docpx on 01/30/13 03:32am


Zend\\Di\\Definition\\IntrospectionStrategy
===========================================

Strategy used to discover methods to be considered as endpoints for dependency injection based on implemented
interfaces, annotations and method names

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param null|AnnotationManager: 



getAnnotationManager
--------------------

.. function:: getAnnotationManager()


    Get annotation manager

    :rtype: null|AnnotationManager 



createDefaultAnnotationManager
------------------------------

.. function:: createDefaultAnnotationManager()


    Create default annotation manager

    :rtype: AnnotationManager 



setUseAnnotations
-----------------

.. function:: setUseAnnotations()


    set use annotations

    :param bool: 



getUseAnnotations
-----------------

.. function:: getUseAnnotations()


    Get use annotations

    :rtype: bool 



setMethodNameInclusionPatterns
------------------------------

.. function:: setMethodNameInclusionPatterns()


    Set method name inclusion pattern

    :param array: 



getMethodNameInclusionPatterns
------------------------------

.. function:: getMethodNameInclusionPatterns()


    Get method name inclusion pattern

    :rtype: array 



setInterfaceInjectionInclusionPatterns
--------------------------------------

.. function:: setInterfaceInjectionInclusionPatterns()


    Set interface injection inclusion patterns

    :param array: 



getInterfaceInjectionInclusionPatterns
--------------------------------------

.. function:: getInterfaceInjectionInclusionPatterns()


    Get interface injection inclusion patterns

    :rtype: array 



