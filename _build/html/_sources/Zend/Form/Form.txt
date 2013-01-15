.. /Form/Form.php generated using docpx on 01/15/13 05:29pm


Zend\\Form\\Form
****************


@category   Zend



Methods
=======

add
---

.. function:: add($elementOrFieldset, [$flags = false])


    Add an element or fieldset
    
    If $elementOrFieldset is an array or Traversable, passes the argument on
    to the composed factory to create the object before attaching it.
    
    $flags could contain metadata such as the alias under which to register
    the element or fieldset, order in which to prioritize it, etc.

    :param array|Traversable|ElementInterface $elementOrFieldset: 
    :param array $flags: 

    :rtype: \Zend\Form\Fieldset|\Zend\Form\FieldsetInterface|\Zend\Form\FormInterface 



prepare
-------

.. function:: prepare()


    Ensures state is ready for use
    
    Marshalls the input filter, to ensure validation error messages are
    available, and prepares any elements and/or fieldsets that require
    preparation.

    :rtype: Form 



setData
-------

.. function:: setData($data)


    Set data to validate and/or populate elements
    
    Typically, also passes data on to the composed input filter.

    :param array|\ArrayAccess|\Traversable $data: 

    :rtype: Form|FormInterface 

    :throws: Exception\InvalidArgumentException 



bind
----

.. function:: bind($object, [$flags = 17])


    Bind an object to the form
    
    Ensures the object is populated with validated values.

    :param object $object: 
    :param int $flags: 

    :rtype: mixed|void 

    :throws: Exception\InvalidArgumentException 



setHydrator
-----------

.. function:: setHydrator($hydrator)


    Set the hydrator to use when binding an object to the element

    :param HydratorInterface $hydrator: 

    :rtype: FieldsetInterface 



bindValues
----------

.. function:: bindValues([$values = false])


    Bind values to the bound object

    :param array $values: 

    :rtype: mixed 



prepareBindData
---------------

.. function:: prepareBindData($values, $match)


    Parse filtered values and return only posted fields for binding

    :param array $values: 
    :param array $match: 

    :rtype: array 



setBindOnValidate
-----------------

.. function:: setBindOnValidate($bindOnValidateFlag)


    Set flag indicating whether or not to bind values on successful validation

    :param int $bindOnValidateFlag: 

    :rtype: void|Form 

    :throws: Exception\InvalidArgumentException 



bindOnValidate
--------------

.. function:: bindOnValidate()


    Will we bind values to the bound object on successful validation?

    :rtype: bool 



setBaseFieldset
---------------

.. function:: setBaseFieldset($baseFieldset)


    Set the base fieldset to use when hydrating

    :param FieldsetInterface $baseFieldset: 

    :rtype: Form 

    :throws: Exception\InvalidArgumentException 



getBaseFieldset
---------------

.. function:: getBaseFieldset()


    Get the base fieldset to use when hydrating

    :rtype: FieldsetInterface 



hasValidated
------------

.. function:: hasValidated()


    Check if the form has been validated

    :rtype: bool 



isValid
-------

.. function:: isValid()


    Validate the form
    
    Typically, will proxy to the composed input filter.

    :rtype: bool 

    :throws: Exception\DomainException 



getData
-------

.. function:: getData([$flag = 17])


    Retrieve the validated data
    
    By default, retrieves normalized values; pass one of the
    FormInterface::VALUES_* constants to shape the behavior.

    :param int $flag: 

    :rtype: array|object 

    :throws: Exception\DomainException 



setValidationGroup
------------------

.. function:: setValidationGroup()


    Set the validation group (set of values to validate)
    
    Typically, proxies to the composed input filter


    :rtype: Form|FormInterface 



prepareValidationGroup
----------------------

.. function:: prepareValidationGroup($formOrFieldset, $data, $validationGroup)


    Prepare the validation group in case Collection elements were used (this function also handle the case where elements
    could have been dynamically added or removed from a collection using JavaScript)

    :param FieldsetInterface $formOrFieldset: 
    :param array $data: 
    :param array $validationGroup: 



setInputFilter
--------------

.. function:: setInputFilter($inputFilter)


    Set the input filter used by this form

    :param InputFilterInterface $inputFilter: 

    :rtype: FormInterface 



getInputFilter
--------------

.. function:: getInputFilter()


    Retrieve input filter used by this form

    :rtype: null|InputFilterInterface 



setUseInputFilterDefaults
-------------------------

.. function:: setUseInputFilterDefaults($useInputFilterDefaults)


    Set flag indicating whether or not to scan elements and fieldsets for defaults

    :param bool $useInputFilterDefaults: 

    :rtype: Form 



useInputFilterDefaults
----------------------

.. function:: useInputFilterDefaults()


    Should we use input filter defaults from elements and fieldsets?

    :rtype: bool 



attachInputFilterDefaults
-------------------------

.. function:: attachInputFilterDefaults($inputFilter, $fieldset)


    Attach defaults provided by the elements to the input filter

    :param InputFilterInterface $inputFilter: 
    :param FieldsetInterface $fieldset: Fieldset to traverse when looking for default inputs

    :rtype: void 



setWrapElements
---------------

.. function:: setWrapElements($wrapElements)


    Are the form elements/fieldsets names wrapped by the form name ?

    :param bool $wrapElements: 

    :rtype: Form 



wrapElements
------------

.. function:: wrapElements()


    If true, form elements/fieldsets name's are wrapped around the form name itself

    :rtype: bool 



extract
-------

.. function:: extract()


    Recursively extract values for elements and sub-fieldsets, and populate form values

    :rtype: array 





