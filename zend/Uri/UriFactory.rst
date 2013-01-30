.. Uri/UriFactory.php generated using docpx on 01/30/13 03:32am


Zend\\Uri\\UriFactory
=====================

URI Factory Class

The URI factory can be used to generate URI objects from strings, using a
different URI subclass depending on the input URI scheme. New scheme-specific
classes can be registered using the registerScheme() method.

Note that this class contains only static methods and should not be
instantiated

Methods
+++++++

registerScheme
--------------

.. function:: registerScheme()


    Register a scheme-specific class to be used

    :param string: 
    :param string: 



unregisterScheme
----------------

.. function:: unregisterScheme()


    Unregister a scheme

    :param string: 



getRegisteredSchemeClass
------------------------

.. function:: getRegisteredSchemeClass()


    Get the class name for a registered scheme
    
    If provided scheme is not registered, will return NULL

    :param string: 

    :rtype: string|null 



factory
-------

.. function:: factory()


    Create a URI from a string

    :param string: 
    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: \Zend\Uri\Uri 



