.. Validator/File/Size.php generated using docpx on 01/30/13 03:32am


Zend\\Validator\\File\\Size
===========================

Validator for the maximum size of a file up to a max of 2GB

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Sets validator options
    
    If $options is a integer, it will be used as maximum file size
    As Array is accepts the following keys:
    'min': Minimum file size
    'max': Maximum file size
    'useByteString': Use bytestring or real size for messages

    :param integer|array|\Traversable: Options for the adapter



useByteString
-------------

.. function:: useByteString()


    Should messages return bytes as integer or as string in SI notation

    :param bool: Use bytestring ?

    :rtype: integer 



getByteString
-------------

.. function:: getByteString()


    Will bytestring be used?

    :rtype: bool 



getMin
------

.. function:: getMin()


    Returns the minimum file size

    :param bool: Whether or not to force return of the raw value (defaults off)

    :rtype: integer|string 



setMin
------

.. function:: setMin()


    Sets the minimum file size
    
    File size can be an integer or an byte string
    This includes 'B', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'
    For example: 2000, 2MB, 0.2GB

    :param integer|string: The minimum file size

    :rtype: Size Provides a fluent interface

    :throws: Exception\InvalidArgumentException When min is greater than max



getMax
------

.. function:: getMax()


    Returns the maximum file size

    :param bool: Whether or not to force return of the raw value (defaults off)

    :rtype: integer|string 



setMax
------

.. function:: setMax()


    Sets the maximum file size
    
    File size can be an integer or an byte string
    This includes 'B', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'
    For example: 2000, 2MB, 0.2GB

    :param integer|string: The maximum file size

    :rtype: Size Provides a fluent interface

    :throws: Exception\InvalidArgumentException When max is smaller than min



getSize
-------

.. function:: getSize()


    Retrieve current detected file size

    :rtype: int 



setSize
-------

.. function:: setSize()


    Set current size

    :param int: 

    :rtype: Size 



isValid
-------

.. function:: isValid()


    Returns true if and only if the file size of $value is at least min and
    not bigger than max (when max is not null).

    :param string|array: File to check for size

    :rtype: bool 



toByteString
------------

.. function:: toByteString()


    Returns the formatted size

    :param integer: 

    :rtype: string 



fromByteString
--------------

.. function:: fromByteString()


    Returns the unformatted size

    :param string: 

    :rtype: integer 





Constants
+++++++++

TOO_BIG
=======

@const string Error constants

TOO_SMALL
=========

NOT_FOUND
=========

