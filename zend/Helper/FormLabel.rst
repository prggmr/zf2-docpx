.. Form/View/Helper/FormLabel.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Form\\View\\Helper\\FormLabel
===================================

Methods
-------

openTag
+++++++

.. function:: openTag()


    Generate an opening label tag

    :param null|array|ElementInterface: 

    :throws Exception\InvalidArgumentException: 
    :throws Exception\DomainException: 

    :rtype: string 



closeTag
++++++++

.. function:: closeTag()


    Return a closing label tag

    :rtype: string 



__invoke
++++++++

.. function:: __invoke()


    Generate a form label, optionally with content
    
    Always generates a "for" statement, as we cannot assume the form input
    will be provided in the $labelContent.

    :param ElementInterface: 
    :param null|string: 
    :param string: 

    :throws Exception\DomainException: 

    :rtype: string|FormLabel 





Constants
---------

APPEND
++++++

PREPEND
+++++++

