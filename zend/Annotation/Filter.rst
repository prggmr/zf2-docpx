.. Form/Annotation/Filter.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Form\\Annotation\\Filter
==============================

Filter annotation

Expects an associative array defining the filter.  Typically, this includes
the "name" with an associated string value indicating the filter name or
class, and optionally an "options" key with an object/associative array value
of options to pass to the filter constructor.

This annotation may be specified multiple times; filters will be added
to the filter chain in the order specified.

Methods
-------

getFilter
+++++++++

.. function:: getFilter()


    Retrieve the filter specification

    :rtype: null|array 



