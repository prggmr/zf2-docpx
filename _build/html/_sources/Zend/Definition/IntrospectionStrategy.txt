.. /Di/Definition/IntrospectionStrategy.php generated using docpx on 01/15/13 05:29pm


Zend\\Di\\Definition\\IntrospectionStrategy
*******************************************


Strategy used to discover methods to be considered as endpoints for dependency injection based on implemented
interfaces, annotations and method names



Methods
=======

__construct
-----------

.. function:: __construct([$annotationManager = false])


    Constructor

    :param null|AnnotationManager $annotationManager: 



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

.. function:: setUseAnnotations($useAnnotations)


    set use annotations

    :param bool $useAnnotations: 



getUseAnnotations
-----------------

.. function:: getUseAnnotations()


    Get use annotations

    :rtype: bool 



setMethodNameInclusionPatterns
------------------------------

.. function:: setMethodNameInclusionPatterns($methodNameInclusionPatterns)


    Set method name inclusion pattern

    :param array $methodNameInclusionPatterns: 



getMethodNameInclusionPatterns
------------------------------

.. function:: getMethodNameInclusionPatterns()


    Get method name inclusion pattern

    :rtype: array 



setInterfaceInjectionInclusionPatterns
--------------------------------------

.. function:: setInterfaceInjectionInclusionPatterns($interfaceInjectionInclusionPatterns)


    Set interface injection inclusion patterns

    :param array $interfaceInjectionInclusionPatterns: 



getInterfaceInjectionInclusionPatterns
--------------------------------------

.. function:: getInterfaceInjectionInclusionPatterns()


    Get interface injection inclusion patterns

    :rtype: array 





