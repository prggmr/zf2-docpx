.. Form/View/Helper/FormSelect.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Form\\View\\Helper\\FormSelect
====================================

Methods
-------

render
++++++

.. function:: render()


    Render a form <select> element from the provided $element

    :param ElementInterface: 

    :throws Exception\InvalidArgumentException: 
    :throws Exception\DomainException: 

    :rtype: string 



renderOptions
+++++++++++++

.. function:: renderOptions()


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

    :param array: 
    :param array: Option values that should be marked as selected

    :rtype: string 



renderOptgroup
++++++++++++++

.. function:: renderOptgroup()


    Render an optgroup
    
    See {@link renderOptions()} for the options specification. Basically,
    an optgroup is simply an option that has an additional "options" key
    with an array following the specification for renderOptions().

    :param array: 
    :param array: 

    :rtype: string 



__invoke
++++++++

.. function:: __invoke()


    Invoke helper as functor
    
    Proxies to {@link render()}.

    :param ElementInterface|null: 

    :rtype: string|FormSelect 



validateMultiValue
++++++++++++++++++

.. function:: validateMultiValue()


    Ensure that the value is set appropriately
    
    If the element's value attribute is an array, but there is no multiple
    attribute, or that attribute does not evaluate to true, then we have
    a domain issue -- you cannot have multiple options selected unless the
    multiple attribute is present and enabled.

    :param mixed: 
    :param array: 

    :rtype: array 

    :throws: Exception\DomainException 



