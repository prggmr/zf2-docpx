.. Validator/File/Crc32.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Validator\\File\\Crc32
============================

Validator for the crc32 hash of given files

Methods
-------

getCrc32
++++++++

.. function:: getCrc32()


    Returns all set crc32 hashes

    :rtype: array 



setCrc32
++++++++

.. function:: setCrc32()


    Sets the crc32 hash for one or multiple files

    :param string|array: 

    :rtype: Crc32 Provides a fluent interface



addCrc32
++++++++

.. function:: addCrc32()


    Adds the crc32 hash for one or multiple files

    :param string|array: 

    :rtype: Crc32 Provides a fluent interface



isValid
+++++++

.. function:: isValid()


    Returns true if and only if the given file confirms the set hash

    :param string|array: Filename to check for hash

    :rtype: bool 





Constants
---------

DOES_NOT_MATCH
++++++++++++++

@const string Error constants

NOT_DETECTED
++++++++++++

NOT_FOUND
+++++++++

