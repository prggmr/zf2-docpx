.. Log/Formatter/Base.php generated using docpx on 01/30/13 03:32am


Zend\\Log\\Formatter\\Base
==========================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Class constructor


    :param null|string|array|Traversable: Format for DateTime objects



format
------

.. function:: format()


    Formats data to be written by the writer.

    :param array: event data

    :rtype: array 



normalize
---------

.. function:: normalize()


    Normalize all non-scalar data types (except null) in a string value

    :param mixed: 

    :rtype: mixed 



getDateTimeFormat
-----------------

.. function:: getDateTimeFormat()


    {@inheritDoc}



setDateTimeFormat
-----------------

.. function:: setDateTimeFormat()


    {@inheritDoc}



