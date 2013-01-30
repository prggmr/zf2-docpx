.. Code/Annotation/Parser/GenericAnnotationParser.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Code\\Annotation\\Parser\\GenericAnnotationParser
=======================================================

Generic annotation parser

Expects registration of AnnotationInterface instances. Such instances
will be passed annotation content to their initialize() method, which
they are then responsible for parsing.

Methods
-------

onCreateAnnotation
++++++++++++++++++

.. function:: onCreateAnnotation()


    Listen to onCreateAnnotation, and attempt to return an annotation object
    instance.
    
    If the annotation class or alias is not registered, immediately returns
    false. Otherwise, resolves the class, clones it, and, if any content is
    present, calls {@link AnnotationInterface::initialize()} with the
    content.

    :param EventInterface: 

    :rtype: false|AnnotationInterface 



registerAnnotation
++++++++++++++++++

.. function:: registerAnnotation()


    Register annotations

    :param string|AnnotationInterface: String class name of an
        AnnotationInterface implementation, or actual instance

    :rtype: GenericAnnotationParser 

    :throws: Exception\InvalidArgumentException 



registerAnnotations
+++++++++++++++++++

.. function:: registerAnnotations()


    Register many annotations at once

    :param array|Traversable: 

    :throws Exception\InvalidArgumentException: 

    :rtype: GenericAnnotationParser 



hasAnnotation
+++++++++++++

.. function:: hasAnnotation()


    Checks if the manager has annotations for a class

    :param string: 

    :rtype: bool 



setAlias
++++++++

.. function:: setAlias()


    Alias an annotation name

    :param string: 
    :param string: May be either a registered annotation name or another alias

    :throws Exception\InvalidArgumentException: 

    :rtype: GenericAnnotationParser 



normalizeAlias
++++++++++++++

.. function:: normalizeAlias()


    Normalize an alias name

    :param string: 

    :rtype: string 



hasAlias
++++++++

.. function:: hasAlias()


    Do we have an alias by the provided name?

    :param string: 

    :rtype: bool 



resolveAlias
++++++++++++

.. function:: resolveAlias()


    Resolve an alias to a class name

    :param string: 

    :rtype: string 



