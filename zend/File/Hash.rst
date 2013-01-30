.. Validator/File/Hash.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Validator\\File\\Hash
===========================

Validator for the hash of given files

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Sets validator options

    :param string|array: 



getHash
+++++++

.. function:: getHash()


    Returns the set hash values as array, the hash as key and the algorithm the value

    :rtype: array 



setHash
+++++++

.. function:: setHash()


    Sets the hash for one or multiple files

    :param string|array: 

    :rtype: Hash Provides a fluent interface



addHash
+++++++

.. function:: addHash()


    Adds the hash for one or multiple files

    :param string|array: 

    :rtype: Hash Provides a fluent interface

    :throws: Exception\InvalidArgumentException 



isValid
+++++++

.. function:: isValid()


    Returns true if and only if the given file confirms the set hash

    :param string|array: File to check for hash

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

