.. Form/Annotation/FormAnnotationsListener.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Form\\Annotation\\FormAnnotationsListener
===============================================

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
-------

attach
++++++

.. function:: attach()


    Attach listeners

    :param EventManagerInterface: 

    :rtype: void 



handleAttributesAnnotation
++++++++++++++++++++++++++

.. function:: handleAttributesAnnotation()


    Handle the Attributes annotation
    
    Sets the attributes key of the form specification.

    :param \Zend\EventManager\EventInterface: 

    :rtype: void 



handleFlagsAnnotation
+++++++++++++++++++++

.. function:: handleFlagsAnnotation()


    Handle the Flags annotation
    
    Sets the flags key of the form specification.

    :param \Zend\EventManager\EventInterface: 

    :rtype: void 



handleHydratorAnnotation
++++++++++++++++++++++++

.. function:: handleHydratorAnnotation()


    Handle the Hydrator annotation
    
    Sets the hydrator class to use in the form specification.

    :param \Zend\EventManager\EventInterface: 

    :rtype: void 



handleInputFilterAnnotation
+++++++++++++++++++++++++++

.. function:: handleInputFilterAnnotation()


    Handle the InputFilter annotation
    
    Sets the input filter class to use in the form specification.

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
    
    Sets the options key of the form specification.

    :param \Zend\EventManager\EventInterface: 

    :rtype: void 



handleTypeAnnotation
++++++++++++++++++++

.. function:: handleTypeAnnotation()


    Handle the Type annotation
    
    Sets the form class to use in the form specification.

    :param \Zend\EventManager\EventInterface: 

    :rtype: void 



handleValidationGroupAnnotation
+++++++++++++++++++++++++++++++

.. function:: handleValidationGroupAnnotation()


    Handle the ValidationGroup annotation
    
    Sets the validation group to use in the form specification.

    :param \Zend\EventManager\EventInterface: 

    :rtype: void 



