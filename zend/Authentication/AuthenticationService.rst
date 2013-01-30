.. Authentication/AuthenticationService.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Authentication\\AuthenticationService
===========================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param Storage\StorageInterface: 
    :param Adapter\AdapterInterface: 



getAdapter
++++++++++

.. function:: getAdapter()


    Returns the authentication adapter
    
    The adapter does not have a default if the storage adapter has not been set.

    :rtype: Adapter\AdapterInterface|null 



setAdapter
++++++++++

.. function:: setAdapter()


    Sets the authentication adapter

    :param Adapter\AdapterInterface: 

    :rtype: AuthenticationService Provides a fluent interface



getStorage
++++++++++

.. function:: getStorage()


    Returns the persistent storage handler
    
    Session storage is used by default unless a different storage adapter has been set.

    :rtype: Storage\StorageInterface 



setStorage
++++++++++

.. function:: setStorage()


    Sets the persistent storage handler

    :param Storage\StorageInterface: 

    :rtype: AuthenticationService Provides a fluent interface



authenticate
++++++++++++

.. function:: authenticate()


    Authenticates against the supplied adapter

    :param Adapter\AdapterInterface: 

    :rtype: Result 

    :throws: Exception\RuntimeException 



hasIdentity
+++++++++++

.. function:: hasIdentity()


    Returns true if and only if an identity is available from storage

    :rtype: bool 



getIdentity
+++++++++++

.. function:: getIdentity()


    Returns the identity from storage or null if no identity is available

    :rtype: mixed|null 



clearIdentity
+++++++++++++

.. function:: clearIdentity()


    Clears the identity from persistent storage

    :rtype: void 



