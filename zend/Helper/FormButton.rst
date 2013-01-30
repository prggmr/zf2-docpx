.. Form/View/Helper/FormButton.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Form\\View\\Helper\\FormButton
====================================

Methods
-------

openTag
+++++++

.. function:: openTag()


    Generate an opening button tag

    :param null|array|ElementInterface: 

    :throws Exception\InvalidArgumentException: 
    :throws Exception\DomainException: 

    :rtype: string 



closeTag
++++++++

.. function:: closeTag()


    Return a closing button tag

    :rtype: string 



render
++++++

.. function:: render()


    Render a form <button> element from the provided $element,
    using content from $buttonContent or the element's "label" attribute

    :param ElementInterface: 
    :param null|string: 

    :throws Exception\DomainException: 

    :rtype: string 



__invoke
++++++++

.. function:: __invoke()


    Invoke helper as functor
    
    Proxies to {@link render()}.

    :param ElementInterface|null: 
    :param null|string: 

    :rtype: string|FormButton 



getType
+++++++

.. function:: getType()


    Determine button type to use

    :param ElementInterface: 

    :rtype: string 



