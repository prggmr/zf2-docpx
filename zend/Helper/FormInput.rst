.. /Form/View/Helper/FormInput.php generated using docpx on 01/15/13 05:29pm


Zend\\Form\\View\\Helper\\FormInput
***********************************


@category   Zend



Methods
=======

render
------

.. function:: render($element)


    Render a form <input> element from the provided $element

    :param ElementInterface $element: 

    :throws Exception\DomainException: 

    :rtype: string 



__invoke
--------

.. function:: __invoke([$element = false])


    Invoke helper as functor
    
    Proxies to {@link render()}.

    :param ElementInterface|null $element: 

    :rtype: string|FormInput 



getType
-------

.. function:: getType($element)


    Determine input type to use

    :param ElementInterface $element: 

    :rtype: string 





