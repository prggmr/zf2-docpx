.. /Code/Annotation/Parser/DoctrineAnnotationParser.php generated using docpx on 01/15/13 05:29pm


Zend\\Code\\Annotation\\Parser\\DoctrineAnnotationParser
********************************************************


A parser for docblock annotations that utilizes the annotation parser from
Doctrine\Common.

Consumes Doctrine\Common\Annotations\DocParser, and responds to events from
AnnotationManager. If the annotation examined is in the list of classes we
are interested in, the raw annotation is passed to the DocParser in order to
retrieve the annotation object instance. Otherwise, it is skipped.



Methods
=======

__construct
-----------

.. function:: __construct()


    @var DocParser



$class
------

.. function:: $class()



setDocParser
------------

.. function:: setDocParser($docParser)


    Set the DocParser instance

    :param DocParser $docParser: 

    :rtype: DoctrineAnnotationParser 



getDocParser
------------

.. function:: getDocParser()


    Retrieve the DocParser instance
    
    If none is registered, lazy-loads a new instance.

    :rtype: DocParser 



onCreateAnnotation
------------------

.. function:: onCreateAnnotation($e)


    Handle annotation creation

    :param EventInterface $e: 

    :rtype: false|\stdClass 



registerAnnotation
------------------

.. function:: registerAnnotation($annotation)


    Specify an allowed annotation class

    :param string $annotation: 

    :rtype: DoctrineAnnotationParser 



registerAnnotations
-------------------

.. function:: registerAnnotations($annotations)


    Set many allowed annotations at once

    :param array|Traversable $annotations: Array or traversable object of
        annotation class names

    :throws Exception\InvalidArgumentException: 

    :rtype: DoctrineAnnotationParser 





