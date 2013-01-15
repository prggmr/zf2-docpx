.. /Form/View/Helper/FormCaptcha.php generated using docpx on 01/15/13 05:29pm


Zend\\Form\\View\\Helper\\FormCaptcha
*************************************


@category   Zend



Methods
=======

render
------

.. function:: render($element)


    Render a form captcha for an element

    :param ElementInterface $element: 

    :rtype: string 

    :throws: Exception\DomainException if the element does not compose a captcha, or the renderer does not implement plugin()



__invoke
--------

.. function:: __invoke($element)


    Invoke helper as functor
    
    Proxies to {@link render()}.

    :param ElementInterface $element: 

    :rtype: string|FormCaptcha 





