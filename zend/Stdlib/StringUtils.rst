.. Stdlib/StringUtils.php generated using docpx on 01/30/13 03:32am


Zend\\Stdlib\\StringUtils
=========================

Utility class for handling strings of different character encodings
using available PHP extensions.

Declared abstract, as we have no need for instantiation.

Methods
+++++++

getRegisteredWrappers
---------------------

.. function:: getRegisteredWrappers()


    Get registered wrapper classes

    :rtype: string[] 



registerWrapper
---------------

.. function:: registerWrapper()


    Register a string wrapper class

    :param string: 

    :rtype: void 



unregisterWrapper
-----------------

.. function:: unregisterWrapper()


    Unregister a string wrapper class

    :param string: 

    :rtype: void 



resetRegisteredWrappers
-----------------------

.. function:: resetRegisteredWrappers()


    Reset all registered wrappers so the default wrappers will be used

    :rtype: void 



getWrapper
----------

.. function:: getWrapper()


    Get the first string wrapper supporting the given character encoding
    and supports to convert into the given convert encoding.

    :param string: Character encoding to support
    :param string|null: OPTIONAL character encoding to convert in

    :rtype: StringWrapperInterface 

    :throws: Exception\RuntimeException If no wrapper supports given character encodings



getSingleByteEncodings
----------------------

.. function:: getSingleByteEncodings()


    Get a list of all known single-byte character encodings

    :rtype: string[] 



isSingleByteEncoding
--------------------

.. function:: isSingleByteEncoding()


    Check if a given encoding is a known single-byte character encoding

    :param string: 

    :rtype: boolean 



isValidUtf8
-----------

.. function:: isValidUtf8()


    Check if a given string is valid UTF-8 encoded

    :param string: 

    :rtype: boolean 



hasPcreUnicodeSupport
---------------------

.. function:: hasPcreUnicodeSupport()


    Is PCRE compiled with Unicode support?

    :rtype: bool 



