.. Session/Config/SessionConfig.php generated using docpx on 01/30/13 03:32am


Zend\\Session\\Config\\SessionConfig
====================================

Session configuration proxying to session INI options

Methods
+++++++

setStorageOption
----------------

.. function:: setStorageOption()


    Set storage option in backend configuration store

    :param string: 
    :param mixed: 

    :rtype: SessionConfig 

    :throws: \InvalidArgumentException 



getStorageOption
----------------

.. function:: getStorageOption()


    Retrieve a storage option from a backend configuration store
    
    Used to retrieve default values from a backend configuration store.

    :param string: 

    :rtype: mixed 



setPhpSaveHandler
-----------------

.. function:: setPhpSaveHandler()


    Set session.save_handler

    :param string: 

    :rtype: SessionConfig 

    :throws: Exception\InvalidArgumentException 



setSavePath
-----------

.. function:: setSavePath()


    Set session.save_path

    :param string: 

    :rtype: SessionConfig 

    :throws: Exception\InvalidArgumentException on invalid path



setSerializeHandler
-------------------

.. function:: setSerializeHandler()


    Set session.serialize_handler

    :param string: 

    :rtype: SessionConfig 

    :throws: Exception\InvalidArgumentException 



setCacheLimiter
---------------

.. function:: setCacheLimiter()


    Set cache limiter

    :param $cacheLimiter: 

    :rtype: SessionConfig 

    :throws: Exception\InvalidArgumentException 



setHashFunction
---------------

.. function:: setHashFunction()


    Set session.hash_function

    :param string|int: 

    :rtype: SessionConfig 

    :throws: Exception\InvalidArgumentException 



setHashBitsPerCharacter
-----------------------

.. function:: setHashBitsPerCharacter()


    Set session.hash_bits_per_character

    :param int: 

    :rtype: SessionConfig 

    :throws: Exception\InvalidArgumentException 



getHashFunctions
----------------

.. function:: getHashFunctions()


    Retrieve list of valid hash functions

    :rtype: array 



handleError
-----------

.. function:: handleError()


    Handle PHP errors

    :param int: 
    :param string: 

    :rtype: void 



