.. Authentication/Adapter/Http/FileResolver.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Authentication\\Adapter\\Http\\FileResolver
=================================================

HTTP Authentication File Resolver

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



resolve
+++++++

.. function:: resolve()


    Resolve credentials
    
    Only the first matching username/realm combination in the file is
    returned. If the file contains credentials for Digest authentication,
    the returned string is the password hash, or h(a1) from RFC 2617. The
    returned string is the plain-text password for Basic authentication.
    
    The expected format of the file is:
      username:realm:sharedSecret
    
    That is, each line consists of the user's username, the applicable
    authentication realm, and the password or hash, each delimited by
    colons.

    :param string: Username
    :param string: Authentication Realm

    :rtype: string|false User's shared secret, if the user is found in the
        realm, false otherwise.

    :throws: Exception\ExceptionInterface 



