.. /Form/Annotation/FormAnnotationsListener.php generated using docpx on 01/15/13 05:29pm


Zend\\Form\\Annotation\\FormAnnotationsListener
***********************************************


Default listeners for form annotations

Defines and attaches a set of default listeners for form annotations
(which are defined on object properties). These include:

- Attributes
- Flags
- Hydrator
- Object
- InputFilter
- Type
- ValidationGroup

See the individual annotation classes for more details. The handlers
registered work with the annotation values, as well as the form
specification passed in the event object.



Methods
=======

attach
------

.. function:: attach($events)


    Attach listeners

    :param EventManagerInterface $events: 

    :rtype: void 



handleAttributesAnnotation
--------------------------

.. function:: handleAttributesAnnotation($e)


    Handle the Attributes annotation
    
    Sets the attributes key of the form specification.

    :param \Zend\EventManager\EventInterface $e: 

    :rtype: void 



handleFlagsAnnotation
---------------------

.. function:: handleFlagsAnnotation($e)


    Handle the Flags annotation
    
    Sets the flags key of the form specification.

    :param \Zend\EventManager\EventInterface $e: 

    :rtype: void 



handleHydratorAnnotation
------------------------

.. function:: handleHydratorAnnotation($e)


    Handle the Hydrator annotation
    
    Sets the hydrator class to use in the form specification.

    :param \Zend\EventManager\EventInterface $e: 

    :rtype: void 



handleInputFilterAnnotation
---------------------------

.. function:: handleInputFilterAnnotation($e)


    Handle the InputFilter annotation
    
    Sets the input filter class to use in the form specification.

    :param \Zend\EventManager\EventInterface $e: 

    :rtype: void 



handleObjectAnnotation
----------------------

.. function:: handleObjectAnnotation($e)


    Handle the Object annotation
    
    Sets the object to bind to the form or fieldset

    :param \Zend\EventManager\EventInterface $e: 

    :rtype: void 



handleOptionsAnnotation
-----------------------

.. function:: handleOptionsAnnotation($e)


    Handle the Options annotation
    
    Sets the options key of the form specification.

    :param \Zend\EventManager\EventInterface $e: 

    :rtype: void 



handleTypeAnnotation
--------------------

.. function:: handleTypeAnnotation($e)


    Handle the Type annotation
    
    Sets the form class to use in the form specification.

    :param \Zend\EventManager\EventInterface $e: 

    :rtype: void 



handleValidationGroupAnnotation
-------------------------------

.. function:: handleValidationGroupAnnotation($e)


    Handle the ValidationGroup annotation
    
    Sets the validation group to use in the form specification.

    :param \Zend\EventManager\EventInterface $e: 

    :rtype: void 





