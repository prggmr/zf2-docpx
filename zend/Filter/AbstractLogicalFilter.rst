.. Ldap/Filter/AbstractLogicalFilter.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Ldap\\Filter\\AbstractLogicalFilter
=========================================

Zend\Ldap\Filter\AbstractLogicalFilter provides a base implementation for a grouping filter.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Creates a new grouping filter.

    :param array: 
    :param string: 

    :throws Exception\FilterException: 



addFilter
+++++++++

.. function:: addFilter()


    Adds a filter to this grouping filter.

    :param AbstractFilter: 

    :rtype: AbstractLogicalFilter 



toString
++++++++

.. function:: toString()


    Returns a string representation of the filter.

    :rtype: string 





Constants
---------

TYPE_AND
++++++++

TYPE_OR
+++++++

