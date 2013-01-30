.. Session/Config/StandardConfig.php generated using docpx on 01/30/13 03:32am


Zend\\Session\\Config\\StandardConfig
=====================================

Standard session configuration

Methods
+++++++

setOptions
----------

.. function:: setOptions()


    Set many options at once
    
    If a setter method exists for the key, that method will be called;
    otherwise, a standard option will be set with the value provided via
    {@link setOption()}.

    :param array|Traversable: 

    :rtype: StandardConfig 

    :throws: Exception\InvalidArgumentException 



getOptions
----------

.. function:: getOptions()


    Get all options set

    :rtype: array 



setOption
---------

.. function:: setOption()


    Set an individual option
    
    Keys are normalized to lowercase. After setting internally, calls
    {@link setStorageOption()} to allow further processing.

    :param string: 
    :param mixed: 

    :rtype: StandardConfig 



getOption
---------

.. function:: getOption()


    Get an individual option
    
    Keys are normalized to lowercase. If the option is not found, attempts
    to retrieve it via {@link getStorageOption()}; if a value is returned
    from that method, it will be set as the internal value and returned.
    
    Returns null for unfound options

    :param string: 

    :rtype: mixed 



hasOption
---------

.. function:: hasOption()


    Check to see if an internal option has been set for the key provided.

    :param string: 

    :rtype: bool 



setStorageOption
----------------

.. function:: setStorageOption()


    Set storage option in backend configuration store
    
    Does nothing in this implementation; others might use it to set things
    such as INI settings.

    :param string: 
    :param mixed: 

    :rtype: StandardConfig 



getStorageOption
----------------

.. function:: getStorageOption()


    Retrieve a storage option from a backend configuration store
    
    Used to retrieve default values from a backend configuration store.

    :param string: 

    :rtype: mixed 



setSavePath
-----------

.. function:: setSavePath()


    Set session.save_path

    :param string: 

    :rtype: StandardConfig 

    :throws: Exception\InvalidArgumentException on invalid path



getSavePath
-----------

.. function:: getSavePath()


    Set session.save_path

    :rtype: string|null 



setName
-------

.. function:: setName()


    Set session.name

    :param string: 

    :rtype: StandardConfig 

    :throws: Exception\InvalidArgumentException 



getName
-------

.. function:: getName()


    Get session.name

    :rtype: null|string 



setGcProbability
----------------

.. function:: setGcProbability()


    Set session.gc_probability

    :param int: 

    :rtype: StandardConfig 

    :throws: Exception\InvalidArgumentException 



getGcProbability
----------------

.. function:: getGcProbability()


    Get session.gc_probability

    :rtype: int 



setGcDivisor
------------

.. function:: setGcDivisor()


    Set session.gc_divisor

    :param int: 

    :rtype: StandardConfig 

    :throws: Exception\InvalidArgumentException 



getGcDivisor
------------

.. function:: getGcDivisor()


    Get session.gc_divisor

    :rtype: int 



setGcMaxlifetime
----------------

.. function:: setGcMaxlifetime()


    Set gc_maxlifetime

    :param int: 

    :rtype: StandardConfig 

    :throws: Exception\InvalidArgumentException 



getGcMaxlifetime
----------------

.. function:: getGcMaxlifetime()


    Get session.gc_maxlifetime

    :rtype: int 



setCookieLifetime
-----------------

.. function:: setCookieLifetime()


    Set session.cookie_lifetime

    :param int: 

    :rtype: StandardConfig 

    :throws: Exception\InvalidArgumentException 



getCookieLifetime
-----------------

.. function:: getCookieLifetime()


    Get session.cookie_lifetime

    :rtype: int 



setCookiePath
-------------

.. function:: setCookiePath()


    Set session.cookie_path

    :param string: 

    :rtype: StandardConfig 

    :throws: Exception\InvalidArgumentException 



getCookiePath
-------------

.. function:: getCookiePath()


    Get session.cookie_path

    :rtype: string 



setCookieDomain
---------------

.. function:: setCookieDomain()


    Set session.cookie_domain

    :param string: 

    :rtype: StandardConfig 

    :throws: Exception\InvalidArgumentException 



getCookieDomain
---------------

.. function:: getCookieDomain()


    Get session.cookie_domain

    :rtype: string 



setCookieSecure
---------------

.. function:: setCookieSecure()


    Set session.cookie_secure

    :param bool: 

    :rtype: StandardConfig 



getCookieSecure
---------------

.. function:: getCookieSecure()


    Get session.cookie_secure

    :rtype: bool 



setCookieHttpOnly
-----------------

.. function:: setCookieHttpOnly()


    Set session.cookie_httponly
    
    case sensitive method lookups in setOptions means this method has an
    unusual casing

    :param bool: 

    :rtype: StandardConfig 



getCookieHttpOnly
-----------------

.. function:: getCookieHttpOnly()


    Get session.cookie_httponly

    :rtype: bool 



setUseCookies
-------------

.. function:: setUseCookies()


    Set session.use_cookies

    :param bool: 

    :rtype: StandardConfig 



getUseCookies
-------------

.. function:: getUseCookies()


    Get session.use_cookies

    :rtype: bool 



setEntropyFile
--------------

.. function:: setEntropyFile()


    Set session.entropy_file

    :param string: 

    :rtype: StandardConfig 

    :throws: Exception\InvalidArgumentException 



getEntropyFile
--------------

.. function:: getEntropyFile()


    Get session.entropy_file

    :rtype: string 



setEntropyLength
----------------

.. function:: setEntropyLength()


    set session.entropy_length

    :param int: 

    :rtype: StandardConfig 

    :throws: Exception\InvalidArgumentException 



getEntropyLength
----------------

.. function:: getEntropyLength()


    Get session.entropy_length

    :rtype: string 



setCacheExpire
--------------

.. function:: setCacheExpire()


    Set session.cache_expire

    :param int: 

    :rtype: StandardConfig 

    :throws: Exception\InvalidArgumentException 



getCacheExpire
--------------

.. function:: getCacheExpire()


    Get session.cache_expire

    :rtype: string 



setHashBitsPerCharacter
-----------------------

.. function:: setHashBitsPerCharacter()


    Set session.hash_bits_per_character

    :param int: 

    :rtype: StandardConfig 

    :throws: Exception\InvalidArgumentException 



getHashBitsPerCharacter
-----------------------

.. function:: getHashBitsPerCharacter()


    Get session.hash_bits_per_character

    :rtype: string 



setRememberMeSeconds
--------------------

.. function:: setRememberMeSeconds()


    Set remember_me_seconds

    :param int: 

    :rtype: StandardConfig 

    :throws: Exception\InvalidArgumentException 



getRememberMeSeconds
--------------------

.. function:: getRememberMeSeconds()


    Get remember_me_seconds

    :rtype: int 



toArray
-------

.. function:: toArray()


    Cast configuration to an array

    :rtype: array 



__call
------

.. function:: __call()


    Intercept get*() and set*() methods
    
    Intercepts getters and setters and passes them to getOption() and setOption(),
    respectively.

    :param string: 
    :param array: 

    :rtype: mixed 

    :throws: Exception\BadMethodCallException on non-getter/setter method



