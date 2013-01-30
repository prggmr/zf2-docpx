.. Code/Annotation/AnnotationManager.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Code\\Annotation\\AnnotationManager
=========================================

Pluggable annotation manager

Simply composes an EventManager. When createAnnotation() is called, it fires
off an event of the same name, passing it the resolved annotation class, the
annotation content, and the raw annotation string; the first listener to
return an object will halt execution of the event, and that object will be
returned as the annotation.

Methods
-------

setEventManager
+++++++++++++++

.. function:: setEventManager()


    Set the event manager instance

    :param EventManagerInterface: 

    :rtype: AnnotationManager 



getEventManager
+++++++++++++++

.. function:: getEventManager()


    Retrieve event manager
    
    Lazy loads an instance if none registered.

    :rtype: EventManagerInterface 



attach
++++++

.. function:: attach()


    Attach a parser to listen to the createAnnotation event

    :param ParserInterface: 

    :rtype: AnnotationManager 



createAnnotation
++++++++++++++++

.. function:: createAnnotation()


    Create Annotation

    :param array: 

    :rtype: false|\stdClass 





Constants
---------

EVENT_CREATE_ANNOTATION
+++++++++++++++++++++++

