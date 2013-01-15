.. /Form/View/Helper/FormSelect.php generated using docpx on 01/15/13 05:29pm


Zend\\Form\\View\\Helper\\FormSelect
************************************


@category   Zend



Methods
=======

render
------

.. function:: render($element)


    Render a form <select> element from the provided $element

    :param ElementInterface $element: 

    :throws Exception\InvalidArgumentException: 
    :throws Exception\DomainException: 

    :rtype: string 



renderOptions
-------------

.. function:: renderOptions($options, [$selectedOptions = false])


    Render an array of options
    
    Individual options should be of the form:
    
    <code>
    array(
        'value'    => 'value',
        'label'    => 'label',
        'disabled' => $booleanFlag,
        'selected' => $booleanFlag,
    )
    </code>

    :param array $options: 
    :param array $selectedOptions: Option values that should be marked as selected

    :rtype: string 



renderOptgroup
--------------

.. function:: renderOptgroup($optgroup, [$selectedOptions = false])


    Render an optgroup
    
    See {@link renderOptions()} for the options specification. Basically,
    an optgroup is simply an option that has an additional "options" key
    with an array following the specification for renderOptions().

    :param array $optgroup: 
    :param array $selectedOptions: 

    :rtype: string 



__invoke
--------

.. function:: __invoke([$element = false])


    Invoke helper as functor
    
    Proxies to {@link render()}.

    :param ElementInterface|null $element: 

    :rtype: string|FormSelect 



validateMultiValue
------------------

.. function:: validateMultiValue($value, $attributes)


    Ensure that the value is set appropriately
    
    If the element's value attribute is an array, but there is no multiple
    attribute, or that attribute does not evaluate to true, then we have
    a domain issue -- you cannot have multiple options selected unless the
    multiple attribute is present and enabled.

    :param mixed $value: 
    :param array $attributes: 

    :rtype: array 

    :throws: Exception\DomainException 





