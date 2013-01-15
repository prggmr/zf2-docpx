.. /Filter/FilterChain.php generated using docpx on 01/15/13 05:29pm


Zend\\Filter\\FilterChain
*************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$options = false])


    Initialize filter chain



setOptions
----------

.. function:: setOptions($options)



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

.. function:: setPluginManager($plugins)


    Set plugin manager instance

    :param FilterPluginManager $plugins: 

    :rtype: FilterChain 



plugin
------

.. function:: plugin($name, [$options = false])


    Retrieve a filter plugin by name

    :param mixed $name: 
    :param array $options: 

    :rtype: FilterInterface 



attach
------

.. function:: attach($callback, [$priority = 1000])


    Attach a filter to the chain

    :param callable|FilterInterface $callback: A Filter implementation or valid PHP callback
    :param int $priority: Priority at which to enqueue filter; defaults to 1000 (higher executes earlier)

    :throws Exception\InvalidArgumentException: 

    :rtype: FilterChain 



attachByName
------------

.. function:: attachByName($name, [$options = false, [$priority = 1000]])


    Attach a filter to the chain using a short name
    
    Retrieves the filter from the attached plugin manager, and then calls attach()
    with the retrieved instance.

    :param string $name: 
    :param mixed $options: 
    :param int $priority: Priority at which to enqueue filter; defaults to 1000 (higher executes earlier)

    :rtype: FilterChain 



merge
-----

.. function:: merge($filterChain)


    Merge the filter chain with the one given in parameter

    :param FilterChain $filterChain: 

    :rtype: FilterChain 



getFilters
----------

.. function:: getFilters()


    Get all the filters

    :rtype: PriorityQueue 



filter
------

.. function:: filter($value)


    Returns $value filtered through each filter in the chain
    
    Filters are run in the order in which they were added to the chain (FIFO)

    :param mixed $value: 

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
---------

DEFAULT_PRIORITY
++++++++++++++++

Default priority at which filters are added

