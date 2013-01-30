.. Stdlib/Hydrator/Filter/FilterComposite.php generated using docpx on 01/30/13 03:32am


Zend\\Stdlib\\Hydrator\\Filter\\FilterComposite
===============================================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Define default Filter




addFilter
---------

.. function:: addFilter()


    Add a filter to the composite. Has to be indexed with $name in
    order to identify a specific filter.
    
    This example will exclude all methods from the hydration, that starts with 'getService'
    <code>
    $composite->addFilter('exclude',
        function($method) {
            if (preg_match('/^getService/', $method) {
                return false;
            }
            return true;
        }, FilterComposite::CONDITION_AND
    );
    </code>

    :param string: 
    :param callable|FilterInterface: 
    :param int: Can be either FilterComposite::CONDITION_OR or FilterComposite::CONDITION_AND

    :throws InvalidArgumentException: 

    :rtype: FilterComposite 



removeFilter
------------

.. function:: removeFilter()


    Remove a filter from the composition

    :param $name: Identifier for the filter

    :rtype: FilterComposite 



hasFilter
---------

.. function:: hasFilter()


    Check if $name has a filter registered

    :param $name: Identifier for the filter

    :rtype: bool 



filter
------

.. function:: filter()


    Filter the composite based on the AND and OR condition
    Will return true if one from the "or conditions" and all from
    the "and condition" returns true. Otherwise false

    :param $property: Parameter will be e.g. Parent\Namespace\Class::method

    :rtype: bool 





Constants
+++++++++

CONDITION_OR
============

Constant to add with "or" conditition

CONDITION_AND
=============

Constant to add with "and" conditition

