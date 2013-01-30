.. InputFilter/Factory.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\InputFilter\\Factory
==========================

Methods
-------

setDefaultFilterChain
+++++++++++++++++++++

.. function:: setDefaultFilterChain()


    Set default filter chain to use

    :param FilterChain: 

    :rtype: Factory 



getDefaultFilterChain
+++++++++++++++++++++

.. function:: getDefaultFilterChain()


    Get default filter chain, if any

    :rtype: null|FilterChain 



clearDefaultFilterChain
+++++++++++++++++++++++

.. function:: clearDefaultFilterChain()


    Clear the default filter chain (i.e., don't inject one into new inputs)

    :rtype: void 



setDefaultValidatorChain
++++++++++++++++++++++++

.. function:: setDefaultValidatorChain()


    Set default validator chain to use

    :param ValidatorChain: 

    :rtype: Factory 



getDefaultValidatorChain
++++++++++++++++++++++++

.. function:: getDefaultValidatorChain()


    Get default validator chain, if any

    :rtype: null|ValidatorChain 



clearDefaultValidatorChain
++++++++++++++++++++++++++

.. function:: clearDefaultValidatorChain()


    Clear the default validator chain (i.e., don't inject one into new inputs)

    :rtype: void 



createInput
+++++++++++

.. function:: createInput()


    Factory for input objects

    :param array|Traversable: 

    :throws Exception\InvalidArgumentException: 
    :throws Exception\RuntimeException: 

    :rtype: InputInterface|InputFilterInterface 



createInputFilter
+++++++++++++++++

.. function:: createInputFilter()


    Factory for input filters

    :param array|Traversable: 

    :throws Exception\InvalidArgumentException: 
    :throws Exception\RuntimeException: 

    :rtype: InputFilterInterface 



populateFilters
+++++++++++++++

.. function:: populateFilters()



populateValidators
++++++++++++++++++

.. function:: populateValidators()



