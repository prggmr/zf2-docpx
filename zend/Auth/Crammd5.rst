.. Mail/Protocol/Smtp/Auth/Crammd5.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mail\\Protocol\\Smtp\\Auth\\Crammd5
=========================================

Performs CRAM-MD5 authentication

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor.
    
    All parameters may be passed as an array to the first argument of the
    constructor. If so,

    :param string|array: (Default: 127.0.0.1)
    :param null|int: (Default: null)
    :param null|array: Auth-specific parameters



auth
++++

.. function:: auth()


    @todo Perform CRAM-MD5 authentication with supplied credentials



setUsername
+++++++++++

.. function:: setUsername()


    Set value for username

    :param string: 

    :rtype: Crammd5 



getUsername
+++++++++++

.. function:: getUsername()


    Get username

    :rtype: string 



setPassword
+++++++++++

.. function:: setPassword()


    Set value for password

    :param string: 

    :rtype: Crammd5 



getPassword
+++++++++++

.. function:: getPassword()


    Get password

    :rtype: string 



_hmacMd5
++++++++

.. function:: _hmacMd5()


    Prepare CRAM-MD5 response to server's ticket

    :param string: Challenge key (usually password)
    :param string: Challenge data
    :param int: Length of blocks

    :rtype: string 



