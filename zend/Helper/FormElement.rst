.. Form/View/Helper/FormElement.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Form\\View\\Helper\\FormElement
=====================================

Methods
-------

render
++++++

.. function:: render()


    Render an element
    
    Introspects the element type and attributes to determine which
    helper to utilize when rendering.

    :param ElementInterface: 

    :rtype: string 



__invoke
++++++++

.. function:: __invoke()


    Invoke helper as function
    
    Proxies to {@link render()}.

    :param ElementInterface|null: 

    :rtype: string|FormElement 



