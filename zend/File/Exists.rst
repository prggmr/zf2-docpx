.. Validator/File/Exists.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Validator\\File\\Exists
=============================

Validator which checks if the file already exists in the directory

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Sets validator options

    :param string|array|\Traversable: 



getDirectory
++++++++++++

.. function:: getDirectory()


    Returns the set file directories which are checked

    :param bool: Returns the values as array; when false, a concatenated string is returned

    :rtype: string|null 



setDirectory
++++++++++++

.. function:: setDirectory()


    Sets the file directory which will be checked

    :param string|array: The directories to validate

    :rtype: Extension Provides a fluent interface



addDirectory
++++++++++++

.. function:: addDirectory()


    Adds the file directory which will be checked

    :param string|array: The directory to add for validation

    :rtype: Extension Provides a fluent interface

    :throws: Exception\InvalidArgumentException 



isValid
+++++++

.. function:: isValid()


    Returns true if and only if the file already exists in the set directories

    :param string|array: Real file to check for existence

    :rtype: bool 





Constants
---------

DOES_NOT_EXIST
++++++++++++++

@const string Error constants

