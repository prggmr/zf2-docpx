.. /Form/Annotation/ElementAnnotationsListener.php generated using docpx on 01/15/13 05:29pm


Zend\\Form\\Annotation\\ElementAnnotationsListener
**************************************************


Default listeners for element annotations

Defines and attaches a set of default listeners for element annotations
(which are defined on object properties). These include:

- AllowEmpty
- Attributes
- ErrorMessage
- Filter
- Flags
- Input
- Hydrator
- Object
- Required
- Type
- Validator

See the individual annotation classes for more details. The handlers registered
work with the annotation values, as well as the element and input specification
passed in the event object.



Methods
=======

attach
------

.. function:: attach($events)


    Attach listeners

    :param EventManagerInterface $events: 

    :rtype: void 



handleAllowEmptyAnnotation
--------------------------

.. function:: handleAllowEmptyAnnotation($e)


    Handle the AllowEmpty annotation
    
    Sets the allow_empty flag on the input specification array.

    :param \Zend\EventManager\EventInterface $e: 

    :rtype: void 



handleAttributesAnnotation
--------------------------

.. function:: handleAttributesAnnotation($e)


    Handle the Attributes annotation
    
    Sets the attributes array of the element specification.

    :param \Zend\EventManager\EventInterface $e: 

    :rtype: void 



handleComposedObjectAnnotation
------------------------------

.. function:: handleComposedObjectAnnotation($e)


    Allow creating fieldsets from composed entity properties

    :param \Zend\EventManager\EventInterface $e: 

    :rtype: void 



handleErrorMessageAnnotation
----------------------------

.. function:: handleErrorMessageAnnotation($e)


    Handle the ErrorMessage annotation
    
    Sets the error_message of the input specification.

    :param \Zend\EventManager\EventInterface $e: 

    :rtype: void 



handleExcludeAnnotation
-----------------------

.. function:: handleExcludeAnnotation($e)


    Determine if the element has been marked to exclude from the definition

    :param \Zend\EventManager\EventInterface $e: 

    :rtype: bool 



handleFilterAnnotation
----------------------

.. function:: handleFilterAnnotation($e)


    Handle the Filter annotation
    
    Adds a filter to the filter chain specification for the input.

    :param \Zend\EventManager\EventInterface $e: 

    :rtype: void 



handleFlagsAnnotation
---------------------

.. function:: handleFlagsAnnotation($e)


    Handle the Flags annotation
    
    Sets the element flags in the specification (used typically for setting
    priority).

    :param \Zend\EventManager\EventInterface $e: 

    :rtype: void 



handleHydratorAnnotation
------------------------

.. function:: handleHydratorAnnotation($e)


    Handle the Hydrator annotation
    
    Sets the hydrator class to use in the fieldset specification.

    :param \Zend\EventManager\EventInterface $e: 

    :rtype: void 



handleInputAnnotation
---------------------

.. function:: handleInputAnnotation($e)


    Handle the Input annotation
    
    Sets the filter specification for the current element to the specified
    input class name.

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
    
    Sets the element options in the specification.

    :param \Zend\EventManager\EventInterface $e: 

    :rtype: void 



handleRequiredAnnotation
------------------------

.. function:: handleRequiredAnnotation($e)


    Handle the Required annotation
    
    Sets the required flag on the input based on the annotation value.

    :param \Zend\EventManager\EventInterface $e: 

    :rtype: void 



handleTypeAnnotation
--------------------

.. function:: handleTypeAnnotation($e)


    Handle the Type annotation
    
    Sets the element class type to use in the element specification.

    :param \Zend\EventManager\EventInterface $e: 

    :rtype: void 



handleValidatorAnnotation
-------------------------

.. function:: handleValidatorAnnotation($e)


    Handle the Validator annotation
    
    Adds a validator to the validator chain of the input specification.

    :param \Zend\EventManager\EventInterface $e: 

    :rtype: void 





