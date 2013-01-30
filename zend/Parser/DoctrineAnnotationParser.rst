.. Code/Annotation/Parser/DoctrineAnnotationParser.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Code\\Annotation\\Parser\\DoctrineAnnotationParser
========================================================

A parser for docblock annotations that utilizes the annotation parser from
Doctrine\Common.

Consumes Doctrine\Common\Annotations\DocParser, and responds to events from
AnnotationManager. If the annotation examined is in the list of classes we
are interested in, the raw annotation is passed to the DocParser in order to
retrieve the annotation object instance. Otherwise, it is skipped.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    @var DocParser



setDocParser
++++++++++++

.. function:: setDocParser()


    Set the DocParser instance

    :param DocParser: 

    :rtype: DoctrineAnnotationParser 



getDocParser
++++++++++++

.. function:: getDocParser()


    Retrieve the DocParser instance
    
    If none is registered, lazy-loads a new instance.

    :rtype: DocParser 



onCreateAnnotation
++++++++++++++++++

.. function:: onCreateAnnotation()


    Handle annotation creation

    :param EventInterface: 

    :rtype: false|\stdClass 



registerAnnotation
++++++++++++++++++

.. function:: registerAnnotation()


    Specify an allowed annotation class

    :param string: 

    :rtype: DoctrineAnnotationParser 



registerAnnotations
+++++++++++++++++++

.. function:: registerAnnotations()


    Set many allowed annotations at once

    :param array|Traversable: Array or traversable object of
        annotation class names

    :throws Exception\InvalidArgumentException: 

    :rtype: DoctrineAnnotationParser 



