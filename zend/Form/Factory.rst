.. /Form/Factory.php generated using docpx on 01/15/13 05:29pm


Zend\\Form\\Factory
*******************


@category   Zend



Methods
=======

setInputFilterFactory
---------------------

.. function:: setInputFilterFactory($inputFilterFactory)


    Set input filter factory to use when creating forms

    :param InputFilterFactory $inputFilterFactory: 

    :rtype: Factory 



getInputFilterFactory
---------------------

.. function:: getInputFilterFactory()


    Get current input filter factory
    
    If none provided, uses an unconfigured instance.

    :rtype: InputFilterFactory 



create
------

.. function:: create($spec)


    Create an element, fieldset, or form
    
    Introspects the 'type' key of the provided $spec, and determines what
    type is being requested; if none is provided, assumes the spec
    represents simply an element.

    :param array|Traversable $spec: 

    :rtype: ElementInterface 

    :throws: Exception\DomainException 



createElement
-------------

.. function:: createElement($spec)


    Create an element based on the provided specification
    
    Specification can contain any of the following:
    - type: the Element class to use; defaults to \Zend\Form\Element
    - name: what name to provide the element, if any
    - options: an array, Traversable, or ArrayAccess object of element options
    - attributes: an array, Traversable, or ArrayAccess object of element
      attributes to assign

    :param array|Traversable|ArrayAccess $spec: 

    :rtype: ElementInterface 

    :throws: Exception\InvalidArgumentException for an invalid $spec
    :throws: Exception\DomainException for an invalid element type



createFieldset
--------------

.. function:: createFieldset($spec)


    Create a fieldset based on the provided specification
    
    Specification can contain any of the following:
    - type: the Fieldset class to use; defaults to \Zend\Form\Fieldset
    - name: what name to provide the fieldset, if any
    - options: an array, Traversable, or ArrayAccess object of element options
    - attributes: an array, Traversable, or ArrayAccess object of element
      attributes to assign
    - elements: an array or Traversable object where each entry is an array
      or ArrayAccess object containing the keys:
      - flags: (optional) array of flags to pass to FieldsetInterface::add()
      - spec: the actual element specification, per {@link createElement()}

    :param array|Traversable|ArrayAccess $spec: 

    :rtype: FieldsetInterface 

    :throws: Exception\InvalidArgumentException for an invalid $spec
    :throws: Exception\DomainException for an invalid fieldset type



createForm
----------

.. function:: createForm($spec)


    Create a form based on the provided specification
    
    Specification follows that of {@link createFieldset()}, and adds the
    following keys:
    
    - input_filter: input filter instance, named input filter class, or
      array specification for the input filter factory
    - hydrator: hydrator instance or named hydrator class

    :param array|Traversable|ArrayAccess $spec: 

    :rtype: FormInterface 

    :throws: Exception\InvalidArgumentException for an invalid $spec
    :throws: Exception\DomainException for an invalid form type



validateSpecification
---------------------

.. function:: validateSpecification($spec, $method)


    Validate a provided specification
    
    Ensures we have an array, Traversable, or ArrayAccess object, and returns it.

    :param array|Traversable|ArrayAccess $spec: 
    :param string $method: Method invoking the validator

    :rtype: array|ArrayAccess 

    :throws: Exception\InvalidArgumentException for invalid $spec



prepareAndInjectElements
------------------------

.. function:: prepareAndInjectElements($elements, $fieldset, $method)


    Takes a list of element specifications, creates the elements, and injects them into the provided fieldset

    :param array|Traversable|ArrayAccess $elements: 
    :param FieldsetInterface $fieldset: 
    :param string $method: Method invoking this one (for exception messages)

    :rtype: void 



prepareAndInjectFieldsets
-------------------------

.. function:: prepareAndInjectFieldsets($fieldsets, $masterFieldset, $method)


    Takes a list of fieldset specifications, creates the fieldsets, and injects them into the master fieldset

    :param array|Traversable|ArrayAccess $fieldsets: 
    :param FieldsetInterface $masterFieldset: 
    :param string $method: Method invoking this one (for exception messages)

    :rtype: void 



prepareAndInjectObject
----------------------

.. function:: prepareAndInjectObject($objectName, $fieldset, $method)


    Prepare and inject an object
    
    Takes a string indicating a class name, instantiates the class
    by that name, and injects the class instance as the bound object.

    :param string $objectName: 
    :param FieldsetInterface $fieldset: 
    :param string $method: 

    :throws Exception\DomainException: 

    :rtype: void 



prepareAndInjectHydrator
------------------------

.. function:: prepareAndInjectHydrator($hydratorOrName, $fieldset, $method)


    Prepare and inject a named hydrator
    
    Takes a string indicating a hydrator class name (or a concrete instance), instantiates the class
    by that name, and injects the hydrator instance into the form.

    :param string $hydratorOrName: 
    :param FieldsetInterface $fieldset: 
    :param string $method: 

    :rtype: void 

    :throws: Exception\DomainException If $hydratorOrName is not a string, does not resolve to a known class, or
                                  the class does not implement Hydrator\HydratorInterface



prepareAndInjectInputFilter
---------------------------

.. function:: prepareAndInjectInputFilter($spec, $form, $method)


    Prepare an input filter instance and inject in the provided form
    
    If the input filter specified is a string, assumes it is a class name,
    and attempts to instantiate it. If the class does not exist, or does
    not extend InputFilterInterface, an exception is raised.
    
    Otherwise, $spec is passed on to the attached InputFilter Factory
    instance in order to create the input filter.

    :param string|array|Traversable $spec: 
    :param FormInterface $form: 
    :param string $method: 

    :rtype: void 

    :throws: Exception\DomainException for unknown InputFilter class or invalid InputFilter instance



prepareAndInjectValidationGroup
-------------------------------

.. function:: prepareAndInjectValidationGroup($spec, $form, $method)


    Prepare a validation group and inject in the provided form
    
    Takes an array of elements names

    :param string|array|Traversable $spec: 
    :param FormInterface $form: 
    :param string $method: 

    :rtype: void 

    :throws: Exception\DomainException if validation group given is not an array



isSubclassOf
------------

.. function:: isSubclassOf($className, $type)


    Checks if the object has this class as one of its parents


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param string $className: 
    :param string $type: 

    :rtype: bool 





