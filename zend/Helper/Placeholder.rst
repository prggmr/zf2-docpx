.. View/Helper/Placeholder.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\View\\Helper\\Placeholder
===============================

Helper for passing data between otherwise segregated Views. It's called
Placeholder to make its typical usage obvious, but can be used just as easily
for non-Placeholder things. That said, the support for this is only
guaranteed to effect subsequently rendered templates, and of course Layouts.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor
    
    Retrieve container registry from Placeholder\Registry, or create new one and register it.



__invoke
++++++++

.. function:: __invoke()


    Placeholder helper

    :param string: 

    :rtype: \Zend\View\Helper\Placeholder\Container\AbstractContainer 

    :throws: InvalidArgumentException 



getRegistry
+++++++++++

.. function:: getRegistry()


    Retrieve the registry

    :rtype: \Zend\View\Helper\Placeholder\Registry 



