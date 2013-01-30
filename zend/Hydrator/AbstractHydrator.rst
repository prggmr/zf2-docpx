.. Stdlib/Hydrator/AbstractHydrator.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Stdlib\\Hydrator\\AbstractHydrator
========================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Initializes a new instance of this class.



getStrategy
+++++++++++

.. function:: getStrategy()


    Gets the strategy with the given name.

    :param string: The name of the strategy to get.

    :rtype: StrategyInterface 



hasStrategy
+++++++++++

.. function:: hasStrategy()


    Checks if the strategy with the given name exists.

    :param string: The name of the strategy to check for.

    :rtype: bool 



addStrategy
+++++++++++

.. function:: addStrategy()


    Adds the given strategy under the given name.

    :param string: The name of the strategy to register.
    :param StrategyInterface: The strategy to register.

    :rtype: HydratorInterface 



removeStrategy
++++++++++++++

.. function:: removeStrategy()


    Removes the strategy with the given name.

    :param string: The name of the strategy to remove.

    :rtype: HydratorInterface 



extractValue
++++++++++++

.. function:: extractValue()


    Converts a value for extraction. If no strategy exists the plain value is returned.

    :param string: The name of the strategy to use.
    :param mixed: The value that should be converted.

    :rtype: mixed 



hydrateValue
++++++++++++

.. function:: hydrateValue()


    Converts a value for hydration. If no strategy exists the plain value is returned.

    :param string: The name of the strategy to use.
    :param mixed: The value that should be converted.

    :rtype: mixed 



getFilter
+++++++++

.. function:: getFilter()


    Get the filter instance

    :rtype: Filter\FilterComposite 



addFilter
+++++++++

.. function:: addFilter()


    Add a new filter to take care of what needs to be hydrated.
    To exclude e.g. the method getServiceLocator:
    
    <code>
    $composite->addFilter("servicelocator",
        function($property) {
            list($class, $method) = explode('::', $property);
            if ($method === 'getServiceLocator') {
                return false;
            }
            return true;
        }, FilterComposite::CONDITION_AND
    );
    </code>

    :param string: Index in the composite
    :param callable|Zend\Stdlib\Hydrator\Filter\FilterInterface: 
    :param int: 

    :rtype: Filter\FilterComposite 



hasFilter
+++++++++

.. function:: hasFilter()


    Check whether a specific filter exists at key $name or not

    :param string: Index in the composite

    :rtype: bool 



removeFilter
++++++++++++

.. function:: removeFilter()


    Remove a filter from the composition.
    To not extract "has" methods, you simply need to unregister it
    
    <code>
    $filterComposite->removeFilter('has');
    </code>

    :param $name: 

    :rtype: Filter\FilterComposite 



