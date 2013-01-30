.. Form/Factory.php generated using docpx on 01/30/13 03:32am


Zend\\Form\\Factory
===================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    @param FormElementManager $formElementManager



setInputFilterFactory
---------------------

.. function:: setInputFilterFactory()


    Set input filter factory to use when creating forms

    :param InputFilterFactory: 

    :rtype: Factory 



getInputFilterFactory
---------------------

.. function:: getInputFilterFactory()


    Get current input filter factory
    
    If none provided, uses an unconfigured instance.

    :rtype: InputFilterFactory 



setFormElementManager
---------------------

.. function:: setFormElementManager()


    Set the form element manager

    :param FormElementManager: 

    :rtype: Factory 



getFormElementManager
---------------------

.. function:: getFormElementManager()


    Get form element manager

    :rtype: FormElementManager 



create
------

.. function:: create()


    Create an element, fieldset, or form
    
    Introspects the 'type' key of the provided $spec, and determines what
    type is being requested; if none is provided, assumes the spec
    represents simply an element.

    :param array|Traversable: 

    :rtype: ElementInterface 

    :throws: Exception\DomainException 



createElement
-------------

.. function:: createElement()


    Create an element

    :param array: 

    :rtype: ElementInterface 



createFieldset
--------------

.. function:: createFieldset()


    Create a fieldset

    :param array: 

    :rtype: ElementInterface 



createForm
----------

.. function:: createForm()


    Create a form

    :param array: 

    :rtype: ElementInterface 



configureElement
----------------

.. function:: configureElement()


    Configure an element based on the provided specification
    
    Specification can contain any of the following:
    - type: the Element class to use; defaults to \Zend\Form\Element
    - name: what name to provide the element, if any
    - options: an array, Traversable, or ArrayAccess object of element options
    - attributes: an array, Traversable, or ArrayAccess object of element
      attributes to assign

    :param ElementInterface: 
    :param array|Traversable|ArrayAccess: 

    :throws Exception\DomainException: 

    :rtype: ElementInterface 



configureFieldset
-----------------

.. function:: configureFieldset()


    Configure a fieldset based on the provided specification
    
    Specification can contain any of the following:
    - type: the Fieldset class to use; defaults to \Zend\Form\Fieldset
    - name: what name to provide the fieldset, if any
    - options: an array, Traversable, or ArrayAccess object of element options
    - attributes: an array, Traversable, or ArrayAccess object of element
      attributes to assign
    - elements: an array or Traversable object where each entry is an array
      or ArrayAccess object containing the keys:
      - flags: (optional) array of flags to pass to FieldsetInterface::add()
      - spec: the actual element specification, per {@link configureElement()}

    :param FieldsetInterface: 
    :param array|Traversable|ArrayAccess: 

    :throws Exception\DomainException: 

    :rtype: FieldsetInterface 



configureForm
-------------

.. function:: configureForm()


    Configure a form based on the provided specification
    
    Specification follows that of {@link configureFieldset()}, and adds the
    following keys:
    
    - input_filter: input filter instance, named input filter class, or
      array specification for the input filter factory
    - hydrator: hydrator instance or named hydrator class

    :param FormInterface: 
    :param array|Traversable|ArrayAccess: 

    :rtype: FormInterface 



validateSpecification
---------------------

.. function:: validateSpecification()


    Validate a provided specification
    
    Ensures we have an array, Traversable, or ArrayAccess object, and returns it.

    :param array|Traversable|ArrayAccess: 
    :param string: Method invoking the validator

    :rtype: array|ArrayAccess 

    :throws: Exception\InvalidArgumentException for invalid $spec



prepareAndInjectElements
------------------------

.. function:: prepareAndInjectElements()


    Takes a list of element specifications, creates the elements, and injects them into the provided fieldset

    :param array|Traversable|ArrayAccess: 
    :param FieldsetInterface: 
    :param string: Method invoking this one (for exception messages)

    :rtype: void 



prepareAndInjectFieldsets
-------------------------

.. function:: prepareAndInjectFieldsets()


    Takes a list of fieldset specifications, creates the fieldsets, and injects them into the master fieldset

    :param array|Traversable|ArrayAccess: 
    :param FieldsetInterface: 
    :param string: Method invoking this one (for exception messages)

    :rtype: void 



prepareAndInjectObject
----------------------

.. function:: prepareAndInjectObject()


    Prepare and inject an object
    
    Takes a string indicating a class name, instantiates the class
    by that name, and injects the class instance as the bound object.

    :param string: 
    :param FieldsetInterface: 
    :param string: 

    :throws Exception\DomainException: 

    :rtype: void 



prepareAndInjectHydrator
------------------------

.. function:: prepareAndInjectHydrator()


    Prepare and inject a named hydrator
    
    Takes a string indicating a hydrator class name (or a concrete instance), try first to instantiates the class
    by pulling it from service manager, and injects the hydrator instance into the form.

    :param string|array|Hydrator\HydratorInterface: 
    :param FieldsetInterface: 
    :param string: 

    :rtype: void 

    :throws: Exception\DomainException If $hydratorOrName is not a string, does not resolve to a known class, or
                                  the class does not implement Hydrator\HydratorInterface



prepareAndInjectInputFilter
---------------------------

.. function:: prepareAndInjectInputFilter()


    Prepare an input filter instance and inject in the provided form
    
    If the input filter specified is a string, assumes it is a class name,
    and attempts to instantiate it. If the class does not exist, or does
    not extend InputFilterInterface, an exception is raised.
    
    Otherwise, $spec is passed on to the attached InputFilter Factory
    instance in order to create the input filter.

    :param string|array|Traversable: 
    :param FormInterface: 
    :param string: 

    :rtype: void 

    :throws: Exception\DomainException for unknown InputFilter class or invalid InputFilter instance



prepareAndInjectValidationGroup
-------------------------------

.. function:: prepareAndInjectValidationGroup()


    Prepare a validation group and inject in the provided form
    
    Takes an array of elements names

    :param string|array|Traversable: 
    :param FormInterface: 
    :param string: 

    :rtype: void 

    :throws: Exception\DomainException if validation group given is not an array



getHydratorFromName
-------------------

.. function:: getHydratorFromName()


    Try to pull hydrator from service manager, or instantiates it from its name

    :param string: 

    :rtype: mixed 

    :throws: Exception\DomainException 



