.. Form/View/Helper/FormCaptcha.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Form\\View\\Helper\\FormCaptcha
=====================================

Methods
-------

render
++++++

.. function:: render()


    Render a form captcha for an element

    :param ElementInterface: 

    :rtype: string 

    :throws: Exception\DomainException if the element does not compose a captcha, or the renderer does not implement plugin()



__invoke
++++++++

.. function:: __invoke()


    Invoke helper as functor
    
    Proxies to {@link render()}.

    :param ElementInterface: 

    :rtype: string|FormCaptcha 



