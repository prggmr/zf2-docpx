.. Ldap/Filter.php generated using docpx on 01/30/13 03:32am


Zend\\Ldap\\Filter
==================

Zend\Ldap\Filter.

Methods
+++++++

equals
------

.. function:: equals()


    Creates an 'equals' filter.
    (attr=value)

    :param string: 
    :param string: 

    :rtype: Filter 



begins
------

.. function:: begins()


    Creates a 'begins with' filter.
    (attr=value*)

    :param string: 
    :param string: 

    :rtype: Filter 



ends
----

.. function:: ends()


    Creates an 'ends with' filter.
    (attr=*value)

    :param string: 
    :param string: 

    :rtype: Filter 



contains
--------

.. function:: contains()


    Creates a 'contains' filter.
    (attr=*value*)

    :param string: 
    :param string: 

    :rtype: Filter 



greater
-------

.. function:: greater()


    Creates a 'greater' filter.
    (attr>value)

    :param string: 
    :param string: 

    :rtype: Filter 



greaterOrEqual
--------------

.. function:: greaterOrEqual()


    Creates a 'greater or equal' filter.
    (attr>=value)

    :param string: 
    :param string: 

    :rtype: Filter 



less
----

.. function:: less()


    Creates a 'less' filter.
    (attr<value)

    :param string: 
    :param string: 

    :rtype: Filter 



lessOrEqual
-----------

.. function:: lessOrEqual()


    Creates an 'less or equal' filter.
    (attr<=value)

    :param string: 
    :param string: 

    :rtype: Filter 



approx
------

.. function:: approx()


    Creates an 'approx' filter.
    (attr~=value)

    :param string: 
    :param string: 

    :rtype: Filter 



any
---

.. function:: any()


    Creates an 'any' filter.
    (attr=*)

    :param string: 

    :rtype: Filter 



string
------

.. function:: string()


    Creates a simple custom string filter.

    :param string: 

    :rtype: Filter\StringFilter 



mask
----

.. function:: mask()


    Creates a simple string filter to be used with a mask.

    :param string: 
    :param string: 

    :rtype: Filter\MaskFilter 



andFilter
---------

.. function:: andFilter()


    Creates an 'and' filter.

    :param Filter\AbstractFilter: 

    :rtype: Filter\AndFilter 



orFilter
--------

.. function:: orFilter()


    Creates an 'or' filter.

    :param Filter\AbstractFilter: 

    :rtype: Filter\OrFilter 



createFilterString
------------------

.. function:: createFilterString()


    Create a filter string.

    :param string: 
    :param string: 
    :param string: 
    :param string: 
    :param string: 

    :rtype: string 



__construct
-----------

.. function:: __construct()


    Creates a new Zend\Ldap\Filter.

    :param string: 
    :param string: 
    :param string: 
    :param string: 
    :param string: 





Constants
+++++++++

TYPE_EQUALS
===========

TYPE_GREATER
============

TYPE_GREATEROREQUAL
===================

TYPE_LESS
=========

TYPE_LESSOREQUAL
================

TYPE_APPROX
===========

