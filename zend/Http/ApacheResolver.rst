.. Authentication/Adapter/Http/ApacheResolver.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Authentication\\Adapter\\Http\\ApacheResolver
===================================================

Apache Authentication Resolver

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param string: Complete filename where the credentials are stored



setFile
+++++++

.. function:: setFile()


    Set the path to the credentials file

    :param string: 

    :rtype: FileResolver Provides a fluent interface

    :throws: Exception\InvalidArgumentException if path is not readable



getFile
+++++++

.. function:: getFile()


    Returns the path to the credentials file

    :rtype: string 



getApachePassword
+++++++++++++++++

.. function:: getApachePassword()


    Returns the Apache Password object

    :rtype: ApachePassword 



resolve
+++++++

.. function:: resolve()


    Resolve credentials

    :param string: Username
    :param string: Authentication Realm
    :param string: The password to authenticate

    :rtype: AuthResult 

    :throws: Exception\ExceptionInterface 



