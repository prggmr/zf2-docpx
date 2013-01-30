.. Form/Annotation/ElementAnnotationsListener.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Form\\Annotation\\ElementAnnotationsListener
==================================================

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
-------

attach
++++++

.. function:: attach()


    Attach listeners

    :param EventManagerInterface: 

    :rtype: void 



handleAllowEmptyAnnotation
++++++++++++++++++++++++++

.. function:: handleAllowEmptyAnnotation()


    Handle the AllowEmpty annotation
    
    Sets the allow_empty flag on the input specification array.

    :param \Zend\EventManager\EventInterface: 

    :rtype: void 



handleAttributesAnnotation
++++++++++++++++++++++++++

.. function:: handleAttributesAnnotation()


    Handle the Attributes annotation
    
    Sets the attributes array of the element specification.

    :param \Zend\EventManager\EventInterface: 

    :rtype: void 



handleComposedObjectAnnotation
++++++++++++++++++++++++++++++

.. function:: handleComposedObjectAnnotation()


    Allow creating fieldsets from composed entity properties

    :param \Zend\EventManager\EventInterface: 

    :rtype: void 



handleErrorMessageAnnotation
++++++++++++++++++++++++++++

.. function:: handleErrorMessageAnnotation()


    Handle the ErrorMessage annotation
    
    Sets the error_message of the input specification.

    :param \Zend\EventManager\EventInterface: 

    :rtype: void 



handleExcludeAnnotation
+++++++++++++++++++++++

.. function:: handleExcludeAnnotation()


    Determine if the element has been marked to exclude from the definition

    :param \Zend\EventManager\EventInterface: 

    :rtype: bool 



handleFilterAnnotation
++++++++++++++++++++++

.. function:: handleFilterAnnotation()


    Handle the Filter annotation
    
    Adds a filter to the filter chain specification for the input.

    :param \Zend\EventManager\EventInterface: 

    :rtype: void 



handleFlagsAnnotation
+++++++++++++++++++++

.. function:: handleFlagsAnnotation()


    Handle the Flags annotation
    
    Sets the element flags in the specification (used typically for setting
    priority).

    :param \Zend\EventManager\EventInterface: 

    :rtype: void 



handleHydratorAnnotation
++++++++++++++++++++++++

.. function:: handleHydratorAnnotation()


    Handle the Hydrator annotation
    
    Sets the hydrator class to use in the fieldset specification.

    :param \Zend\EventManager\EventInterface: 

    :rtype: void 



handleInputAnnotation
+++++++++++++++++++++

.. function:: handleInputAnnotation()


    Handle the Input annotation
    
    Sets the filter specification for the current element to the specified
    input class name.

    :param \Zend\EventManager\EventInterface: 

    :rtype: void 



handleObjectAnnotation
++++++++++++++++++++++

.. function:: handleObjectAnnotation()


    Handle the Object annotation
    
    Sets the object to bind to the form or fieldset

    :param \Zend\EventManager\EventInterface: 

    :rtype: void 



handleOptionsAnnotation
+++++++++++++++++++++++

.. function:: handleOptionsAnnotation()


    Handle the Options annotation
    
    Sets the element options in the specification.

    :param \Zend\EventManager\EventInterface: 

    :rtype: void 



handleRequiredAnnotation
++++++++++++++++++++++++

.. function:: handleRequiredAnnotation()


    Handle the Required annotation
    
    Sets the required flag on the input based on the annotation value.

    :param \Zend\EventManager\EventInterface: 

    :rtype: void 



handleTypeAnnotation
++++++++++++++++++++

.. function:: handleTypeAnnotation()


    Handle the Type annotation
    
    Sets the element class type to use in the element specification.

    :param \Zend\EventManager\EventInterface: 

    :rtype: void 



handleValidatorAnnotation
+++++++++++++++++++++++++

.. function:: handleValidatorAnnotation()


    Handle the Validator annotation
    
    Adds a validator to the validator chain of the input specification.

    :param \Zend\EventManager\EventInterface: 

    :rtype: void 



