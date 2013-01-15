.. /Code/Annotation/Parser/GenericAnnotationParser.php generated using docpx on 01/15/13 05:29pm


Zend\\Code\\Annotation\\Parser\\GenericAnnotationParser
*******************************************************


Generic annotation parser

Expects registration of AnnotationInterface instances. Such instances
will be passed annotation content to their initialize() method, which
they are then responsible for parsing.



Methods
=======

onCreateAnnotation
------------------

.. function:: onCreateAnnotation($e)


    Listen to onCreateAnnotation, and attempt to return an annotation object
    instance.
    
    If the annotation class or alias is not registered, immediately returns
    false. Otherwise, resolves the class, clones it, and, if any content is
    present, calls {@link AnnotationInterface::initialize()} with the
    content.

    :param EventInterface $e: 

    :rtype: false|AnnotationInterface 



registerAnnotation
------------------

.. function:: registerAnnotation($annotation)


    Register annotations

    :param string|AnnotationInterface $annotation: String class name of an
        AnnotationInterface implementation, or actual instance

    :rtype: GenericAnnotationParser 

    :throws: Exception\InvalidArgumentException 



registerAnnotations
-------------------

.. function:: registerAnnotations($annotations)


    Register many annotations at once

    :param array|Traversable $annotations: 

    :throws Exception\InvalidArgumentException: 

    :rtype: GenericAnnotationParser 



hasAnnotation
-------------

.. function:: hasAnnotation($class)


    Checks if the manager has annotations for a class

    :param string $class: 

    :rtype: bool 



setAlias
--------

.. function:: setAlias($alias, $class)


    Alias an annotation name

    :param string $alias: 
    :param string $class: May be either a registered annotation name or another alias

    :throws Exception\InvalidArgumentException: 

    :rtype: GenericAnnotationParser 



normalizeAlias
--------------

.. function:: normalizeAlias($alias)


    Normalize an alias name

    :param string $alias: 

    :rtype: string 



hasAlias
--------

.. function:: hasAlias($alias)


    Do we have an alias by the provided name?

    :param string $alias: 

    :rtype: bool 



resolveAlias
------------

.. function:: resolveAlias($alias)


    Resolve an alias to a class name

    :param string $alias: 

    :rtype: string 





