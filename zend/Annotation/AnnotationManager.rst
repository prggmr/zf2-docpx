.. /Code/Annotation/AnnotationManager.php generated using docpx on 01/15/13 05:29pm


Zend\\Code\\Annotation\\AnnotationManager
*****************************************


Pluggable annotation manager

Simply composes an EventManager. When createAnnotation() is called, it fires
off an event of the same name, passing it the resolved annotation class, the
annotation content, and the raw annotation string; the first listener to
return an object will halt execution of the event, and that object will be
returned as the annotation.



Methods
=======

setEventManager
---------------

.. function:: setEventManager($events)


    Set the event manager instance

    :param EventManagerInterface $events: 

    :rtype: AnnotationManager 



getEventManager
---------------

.. function:: getEventManager()


    Retrieve event manager
    
    Lazy loads an instance if none registered.

    :rtype: EventManagerInterface 



attach
------

.. function:: attach($parser)


    Attach a parser to listen to the createAnnotation event

    :param Parser\ParserInterface $parser: 

    :rtype: AnnotationManager 



createAnnotation
----------------

.. function:: createAnnotation($annotationData)


    Create Annotation

    :param array $annotationData: 

    :rtype: false|\stdClass 



$r
--

.. function:: $r()





Constants
---------

EVENT_CREATE_ANNOTATION
+++++++++++++++++++++++

