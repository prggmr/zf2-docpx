.. Filter/FilterChain.php generated using docpx on 01/30/13 03:32am


Zend\\Filter\\FilterChain
=========================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Initialize filter chain



setOptions
----------

.. function:: setOptions()



count
-----

.. function:: count()


    Return the count of attached filters

    :rtype: int 



getPluginManager
----------------

.. function:: getPluginManager()


    Get plugin manager instance

    :rtype: FilterPluginManager 



setPluginManager
----------------

.. function:: setPluginManager()


    Set plugin manager instance

    :param FilterPluginManager: 

    :rtype: FilterChain 



plugin
------

.. function:: plugin()


    Retrieve a filter plugin by name

    :param mixed: 
    :param array: 

    :rtype: FilterInterface 



attach
------

.. function:: attach()


    Attach a filter to the chain

    :param callable|FilterInterface: A Filter implementation or valid PHP callback
    :param int: Priority at which to enqueue filter; defaults to 1000 (higher executes earlier)

    :throws Exception\InvalidArgumentException: 

    :rtype: FilterChain 



attachByName
------------

.. function:: attachByName()


    Attach a filter to the chain using a short name
    
    Retrieves the filter from the attached plugin manager, and then calls attach()
    with the retrieved instance.

    :param string: 
    :param mixed: 
    :param int: Priority at which to enqueue filter; defaults to 1000 (higher executes earlier)

    :rtype: FilterChain 



merge
-----

.. function:: merge()


    Merge the filter chain with the one given in parameter

    :param FilterChain: 

    :rtype: FilterChain 



getFilters
----------

.. function:: getFilters()


    Get all the filters

    :rtype: PriorityQueue 



filter
------

.. function:: filter()


    Returns $value filtered through each filter in the chain
    
    Filters are run in the order in which they were added to the chain (FIFO)

    :param mixed: 

    :rtype: mixed 



__clone
-------

.. function:: __clone()


    Clone filters



__sleep
-------

.. function:: __sleep()


    Prepare filter chain for serialization
    
    Plugin manager (property 'plugins') cannot
    be serialized. On wakeup the property remains unset
    and next invokation to getPluginManager() sets
    the default plugin manager instance (FilterPluginManager).





Constants
+++++++++

DEFAULT_PRIORITY
================

Default priority at which filters are added

