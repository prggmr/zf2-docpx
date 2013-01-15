.. /Form/View/Helper/FormLabel.php generated using docpx on 01/15/13 05:29pm


Zend\\Form\\View\\Helper\\FormLabel
***********************************


@category   Zend



Methods
=======

openTag
-------

.. function:: openTag([$attributesOrElement = false])


    Generate an opening label tag

    :param null|array|ElementInterface $attributesOrElement: 

    :throws Exception\InvalidArgumentException: 
    :throws Exception\DomainException: 

    :rtype: string 



closeTag
--------

.. function:: closeTag()


    Return a closing label tag

    :rtype: string 



__invoke
--------

.. function:: __invoke([$element = false, [$labelContent = false, [$position = false]]])


    Generate a form label, optionally with content
    
    Always generates a "for" statement, as we cannot assume the form input
    will be provided in the $labelContent.

    :param ElementInterface $element: 
    :param null|string $labelContent: 
    :param string $position: 

    :throws Exception\DomainException: 

    :rtype: string|FormLabel 





Constants
---------

APPEND
++++++

PREPEND
+++++++

