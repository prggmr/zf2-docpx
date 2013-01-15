.. /Form/Annotation/AbstractAnnotationsListener.php generated using docpx on 01/15/13 05:29pm


Zend\\Form\\Annotation\\AbstractAnnotationsListener
***************************************************


Base annotations listener.

Provides an implementation of detach() that should work with any listener.
Also provides listeners for the "Name" annotation -- handleNameAnnotation()
will listen for the "Name" annotation, while discoverFallbackName() listens
on the "discoverName" event and will use the class or property name, as
discovered via reflection, if no other annotation has provided the name
already.



Methods
=======

detach
------

.. function:: detach($events)


    Detach listeners

    :param EventManagerInterface $events: 

    :rtype: void 



handleNameAnnotation
--------------------

.. function:: handleNameAnnotation($e)


    Attempt to discover a name set via annotation

    :param \Zend\EventManager\EventInterface $e: 

    :rtype: false|string 



discoverFallbackName
--------------------

.. function:: discoverFallbackName($e)


    Discover the fallback name via reflection

    :param \Zend\EventManager\EventInterface $e: 

    :rtype: string 





