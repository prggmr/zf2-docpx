.. Validator/File/Md5.php generated using docpx on 01/30/13 03:32am


Zend\\Validator\\File\\Md5
==========================

Validator for the md5 hash of given files

Methods
+++++++

getMd5
------

.. function:: getMd5()


    Returns all set md5 hashes

    :rtype: array 



setMd5
------

.. function:: setMd5()


    Sets the md5 hash for one or multiple files

    :param string|array: 

    :rtype: Hash Provides a fluent interface



addMd5
------

.. function:: addMd5()


    Adds the md5 hash for one or multiple files

    :param string|array: 

    :rtype: Hash Provides a fluent interface



isValid
-------

.. function:: isValid()


    Returns true if and only if the given file confirms the set hash

    :param string|array: Filename to check for hash

    :rtype: bool 





Constants
+++++++++

DOES_NOT_MATCH
==============

@const string Error constants

NOT_DETECTED
============

NOT_FOUND
=========

