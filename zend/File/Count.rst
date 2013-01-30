.. Validator/File/Count.php generated using docpx on 01/30/13 03:32am


Zend\\Validator\\File\\Count
============================

Validator for counting all given files

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Sets validator options
    
    Min limits the file count, when used with max=null it is the maximum file count
    It also accepts an array with the keys 'min' and 'max'
    
    If $options is a integer, it will be used as maximum file count
    As Array is accepts the following keys:
    'min': Minimum filecount
    'max': Maximum filecount

    :param integer|array|\Traversable: Options for the adapter



getMin
------

.. function:: getMin()


    Returns the minimum file count

    :rtype: integer 



setMin
------

.. function:: setMin()


    Sets the minimum file count

    :param integer|array: The minimum file count

    :rtype: Count Provides a fluent interface

    :throws: Exception\InvalidArgumentException When min is greater than max



getMax
------

.. function:: getMax()


    Returns the maximum file count

    :rtype: integer 



setMax
------

.. function:: setMax()


    Sets the maximum file count

    :param integer|array: The maximum file count

    :rtype: Count Provides a fluent interface

    :throws: Exception\InvalidArgumentException When max is smaller than min



addFile
-------

.. function:: addFile()


    Adds a file for validation

    :param string|array: 

    :rtype: Count 



isValid
-------

.. function:: isValid()


    Returns true if and only if the file count of all checked files is at least min and
    not bigger than max (when max is not null). Attention: When checking with set min you
    must give all files with the first call, otherwise you will get an false.

    :param string|array: Filenames to check for count
    :param array: File data from \Zend\File\Transfer\Transfer

    :rtype: bool 



throwError
----------

.. function:: throwError()


    Throws an error of the given type

    :param string: 
    :param string: 

    :rtype: false 





Constants
+++++++++

TOO_MANY
========

TOO_FEW
=======

