.. Http/Header/CacheControl.php generated using docpx on 01/30/13 03:32am


Zend\\Http\\Header\\CacheControl
================================

@throws Exception\InvalidArgumentException

Methods
+++++++

fromString
----------

.. function:: fromString()


    Creates a CacheControl object from a headerLine

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: CacheControl 



getFieldName
------------

.. function:: getFieldName()


    Required from HeaderDescription interface

    :rtype: string 



isEmpty
-------

.. function:: isEmpty()


    Checks if the internal directives array is empty

    :rtype: bool 



addDirective
------------

.. function:: addDirective()


    Add a directive
    For directives like 'max-age=60', $value = '60'
    For directives like 'private', use the default $value = true

    :param string: 
    :param string|bool: 

    :rtype: CacheControl - provides the fluent interface



hasDirective
------------

.. function:: hasDirective()


    Check the internal directives array for a directive

    :param string: 

    :rtype: bool 



getDirective
------------

.. function:: getDirective()


    Fetch the value of a directive from the internal directive array

    :param string: 

    :rtype: string|null 



removeDirective
---------------

.. function:: removeDirective()


    Remove a directive

    :param string: 

    :rtype: CacheControl - provides the fluent interface



getFieldValue
-------------

.. function:: getFieldValue()


    Assembles the directives into a comma-delimited string

    :rtype: string 



toString
--------

.. function:: toString()


    Returns a string representation of the HTTP Cache-Control header

    :rtype: string 



parseValue
----------

.. function:: parseValue()


    Internal function for parsing the value part of a
    HTTP Cache-Control header

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: array 



match
-----

.. function:: match()


    Internal function used by parseValue to match tokens

    :param array: 
    :param string: 
    :param string: 

    :rtype: int 



