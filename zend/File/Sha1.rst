.. Validator/File/Sha1.php generated using docpx on 01/30/13 03:32am


Zend\\Validator\\File\\Sha1
===========================

Validator for the sha1 hash of given files

Methods
+++++++

getSha1
-------

.. function:: getSha1()


    Returns all set sha1 hashes

    :rtype: array 



setSha1
-------

.. function:: setSha1()


    Sets the sha1 hash for one or multiple files

    :param string|array: 

    :rtype: Hash Provides a fluent interface



addSha1
-------

.. function:: addSha1()


    Adds the sha1 hash for one or multiple files

    :param string|array: 

    :rtype: Hash Provides a fluent interface



isValid
-------

.. function:: isValid()


    Returns true if and only if the given file confirms the set hash

    :param string: Filename to check for hash

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

