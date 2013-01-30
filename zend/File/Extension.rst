.. Validator/File/Extension.php generated using docpx on 01/30/13 03:32am


Zend\\Validator\\File\\Extension
================================

Validator for the file extension of a file

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Sets validator options

    :param string|array|\Traversable: 



getCase
-------

.. function:: getCase()


    Returns the case option

    :rtype: bool 



setCase
-------

.. function:: setCase()


    Sets the case to use

    :param bool: 

    :rtype: Extension Provides a fluent interface



getExtension
------------

.. function:: getExtension()


    Returns the set file extension

    :rtype: array 



setExtension
------------

.. function:: setExtension()


    Sets the file extensions

    :param string|array: The extensions to validate

    :rtype: Extension Provides a fluent interface



addExtension
------------

.. function:: addExtension()


    Adds the file extensions

    :param string|array: The extensions to add for validation

    :rtype: Extension Provides a fluent interface



isValid
-------

.. function:: isValid()


    Returns true if and only if the file extension of $value is included in the
    set extension list

    :param string|array: Real file to check for extension

    :rtype: bool 





Constants
+++++++++

FALSE_EXTENSION
===============

@const string Error constants

NOT_FOUND
=========

