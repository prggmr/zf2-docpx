.. /Form/View/Helper/FormButton.php generated using docpx on 01/15/13 05:29pm


Zend\\Form\\View\\Helper\\FormButton
************************************


@category   Zend



Methods
=======

openTag
-------

.. function:: openTag([$attributesOrElement = false])


    Generate an opening button tag

    :param null|array|ElementInterface $attributesOrElement: 

    :throws Exception\InvalidArgumentException: 
    :throws Exception\DomainException: 

    :rtype: string 



closeTag
--------

.. function:: closeTag()


    Return a closing button tag

    :rtype: string 



render
------

.. function:: render($element, [$buttonContent = false])


    Render a form <button> element from the provided $element,
    using content from $buttonContent or the element's "label" attribute

    :param ElementInterface $element: 
    :param null|string $buttonContent: 

    :throws Exception\DomainException: 

    :rtype: string 



__invoke
--------

.. function:: __invoke([$element = false, [$buttonContent = false]])


    Invoke helper as functor
    
    Proxies to {@link render()}.

    :param ElementInterface|null $element: 
    :param null|string $buttonContent: 

    :rtype: string|FormButton 



getType
-------

.. function:: getType($element)


    Determine button type to use

    :param ElementInterface $element: 

    :rtype: string 





