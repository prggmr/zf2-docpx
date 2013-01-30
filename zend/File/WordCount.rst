.. Validator/File/WordCount.php generated using docpx on 01/30/13 03:32am


Zend\\Validator\\File\\WordCount
================================

Validator for counting all words in a file

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Sets validator options
    
    Min limits the word count, when used with max=null it is the maximum word count
    It also accepts an array with the keys 'min' and 'max'
    
    If $options is a integer, it will be used as maximum word count
    As Array is accepts the following keys:
    'min': Minimum word count
    'max': Maximum word count

    :param integer|array|\Traversable: Options for the adapter



getMin
------

.. function:: getMin()


    Returns the minimum word count

    :rtype: integer 



setMin
------

.. function:: setMin()


    Sets the minimum word count

    :param integer|array: The minimum word count

    :rtype: WordCount Provides a fluent interface

    :throws: Exception\InvalidArgumentException When min is greater than max



getMax
------

.. function:: getMax()


    Returns the maximum word count

    :rtype: integer 



setMax
------

.. function:: setMax()


    Sets the maximum file count

    :param integer|array: The maximum word count

    :rtype: WordCount Provides a fluent interface

    :throws: Exception\InvalidArgumentException When max is smaller than min



isValid
-------

.. function:: isValid()


    Returns true if and only if the counted words are at least min and
    not bigger than max (when max is not null).

    :param string: Filename to check for word count

    :rtype: bool 





Constants
+++++++++

TOO_MUCH
========

@const string Error constants

TOO_LESS
========

NOT_FOUND
=========

