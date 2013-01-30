.. Form/Annotation/AbstractAnnotationsListener.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Form\\Annotation\\AbstractAnnotationsListener
===================================================

Base annotations listener.

Provides an implementation of detach() that should work with any listener.
Also provides listeners for the "Name" annotation -- handleNameAnnotation()
will listen for the "Name" annotation, while discoverFallbackName() listens
on the "discoverName" event and will use the class or property name, as
discovered via reflection, if no other annotation has provided the name
already.

Methods
-------

detach
++++++

.. function:: detach()


    Detach listeners

    :param EventManagerInterface: 

    :rtype: void 



handleNameAnnotation
++++++++++++++++++++

.. function:: handleNameAnnotation()


    Attempt to discover a name set via annotation

    :param \Zend\EventManager\EventInterface: 

    :rtype: false|string 



discoverFallbackName
++++++++++++++++++++

.. function:: discoverFallbackName()


    Discover the fallback name via reflection

    :param \Zend\EventManager\EventInterface: 

    :rtype: string 



