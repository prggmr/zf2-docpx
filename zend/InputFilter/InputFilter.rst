.. InputFilter/InputFilter.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\InputFilter\\InputFilter
==============================

Methods
-------

setFactory
++++++++++

.. function:: setFactory()


    Set factory to use when adding inputs and filters by spec

    :param Factory: 

    :rtype: InputFilter 



getFactory
++++++++++

.. function:: getFactory()


    Get factory to use when adding inputs and filters by spec
    
    Lazy-loads a Factory instance if none attached.

    :rtype: Factory 



add
+++

.. function:: add()


    Add an input to the input filter

    :param array|Traversable|InputInterface|InputFilterInterface: 
    :param null|string: 

    :rtype: InputFilter 



