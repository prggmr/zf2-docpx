.. /Authentication/AuthenticationService.php generated using docpx on 01/15/13 05:29pm


Zend\\Authentication\\AuthenticationService
*******************************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$storage = false, [$adapter = false]])


    Constructor

    :param Storage\StorageInterface $storage: 
    :param Adapter\AdapterInterface $adapter: 



getAdapter
----------

.. function:: getAdapter()


    Returns the authentication adapter
    
    The adapter does not have a default if the storage adapter has not been set.

    :rtype: Adapter\AdapterInterface|null 



setAdapter
----------

.. function:: setAdapter($adapter)


    Sets the authentication adapter

    :param Adapter\AdapterInterface $adapter: 

    :rtype: AuthenticationService Provides a fluent interface



getStorage
----------

.. function:: getStorage()


    Returns the persistent storage handler
    
    Session storage is used by default unless a different storage adapter has been set.

    :rtype: Storage\StorageInterface 



setStorage
----------

.. function:: setStorage($storage)


    Sets the persistent storage handler

    :param Storage\StorageInterface $storage: 

    :rtype: AuthenticationService Provides a fluent interface



authenticate
------------

.. function:: authenticate([$adapter = false])


    Authenticates against the supplied adapter

    :param Adapter\AdapterInterface $adapter: 

    :rtype: Result 

    :throws: Exception\RuntimeException 



hasIdentity
-----------

.. function:: hasIdentity()


    Returns true if and only if an identity is available from storage

    :rtype: bool 



getIdentity
-----------

.. function:: getIdentity()


    Returns the identity from storage or null if no identity is available

    :rtype: mixed|null 



clearIdentity
-------------

.. function:: clearIdentity()


    Clears the identity from persistent storage

    :rtype: void 





