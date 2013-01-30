.. Validator/File/FilesSize.php generated using docpx on 01/30/13 03:32am


Zend\\Validator\\File\\FilesSize
================================

Validator for the size of all files which will be validated in sum

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Sets validator options
    
    Min limits the used disk space for all files, when used with max=null it is the maximum file size
    It also accepts an array with the keys 'min' and 'max'

    :param integer|array|Traversable: Options for this validator

    :throws \Zend\Validator\Exception\InvalidArgumentException: 



isValid
-------

.. function:: isValid()


    Returns true if and only if the disk usage of all files is at least min and
    not bigger than max (when max is not null).

    :param string|array: Real file to check for size
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

TOO_BIG
=======

@const string Error constants

TOO_SMALL
=========

NOT_READABLE
============

