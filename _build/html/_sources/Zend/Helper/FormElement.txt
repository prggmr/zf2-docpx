.. /Form/View/Helper/FormElement.php generated using docpx on 01/15/13 05:29pm


Zend\\Form\\View\\Helper\\FormElement
*************************************


@category   Zend



Methods
=======

render
------

.. function:: render($element)


    Render an element
    
    Introspects the element type and attributes to determine which
    helper to utilize when rendering.

    :param ElementInterface $element: 

    :rtype: string 



__invoke
--------

.. function:: __invoke([$element = false])


    Invoke helper as function
    
    Proxies to {@link render()}.

    :param ElementInterface|null $element: 

    :rtype: string|FormElement 





