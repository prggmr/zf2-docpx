.. Session/Container.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Session\\Container
========================

Session storage container

Allows for interacting with session storage in isolated containers, which
may have their own expiries, or even expiries per key in the container.
Additionally, expiries may be absolute TTLs or measured in "hops", which
are based on how many times the key or container were accessed.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor
    
    Provide a name ('Default' if none provided) and a ManagerInterface instance.

    :param null|string: 
    :param Manager: 

    :throws Exception\InvalidArgumentException: 



setDefaultManager
+++++++++++++++++

.. function:: setDefaultManager()


    Set the default ManagerInterface instance to use when none provided to constructor

    :param Manager: 

    :rtype: void 



getDefaultManager
+++++++++++++++++

.. function:: getDefaultManager()


    Get the default ManagerInterface instance
    
    If none provided, instantiates one of type {@link $managerDefaultClass}

    :rtype: Manager 

    :throws: Exception\InvalidArgumentException if invalid manager default class provided



getName
+++++++

.. function:: getName()


    Get container name

    :rtype: string 



setManager
++++++++++

.. function:: setManager()


    Set session manager

    :param null|Manager: 

    :rtype: Container 

    :throws: Exception\InvalidArgumentException 



getManager
++++++++++

.. function:: getManager()


    Get manager instance

    :rtype: Manager 



getStorage
++++++++++

.. function:: getStorage()


    Get session storage object
    
    Proxies to ManagerInterface::getStorage()

    :rtype: Storage 



createContainer
+++++++++++++++

.. function:: createContainer()


    Create a new container object on which to act

    :rtype: ArrayObject 



verifyNamespace
+++++++++++++++

.. function:: verifyNamespace()


    Verify container namespace
    
    Checks to see if a container exists within the Storage object already.
    If not, one is created; if so, checks to see if it's an ArrayObject.
    If not, it raises an exception; otherwise, it returns the Storage
    object.

    :param bool: Whether or not to create the container for the namespace

    :rtype: Storage|null Returns null only if $createContainer is false

    :throws: Exception\RuntimeException 



expireKeys
++++++++++

.. function:: expireKeys()


    Determine whether a given key needs to be expired
    
    Returns true if the key has expired, false otherwise.

    :param null|string: 

    :rtype: bool 



expireByExpiryTime
++++++++++++++++++

.. function:: expireByExpiryTime()


    Expire a key by expiry time
    
    Checks to see if the entire container has expired based on TTL setting,
    or the individual key.

    :param Storage: 
    :param string: Container name
    :param string: Key in container to check

    :rtype: bool 



expireByHops
++++++++++++

.. function:: expireByHops()


    Expire key by session hops
    
    Determines whether the container or an individual key within it has
    expired based on session hops

    :param Storage: 
    :param string: 
    :param string: 

    :rtype: bool 



offsetSet
+++++++++

.. function:: offsetSet()


    Store a value within the container

    :param string: 
    :param mixed: 

    :rtype: void 



offsetExists
++++++++++++

.. function:: offsetExists()


    Determine if the key exists

    :param string: 

    :rtype: bool 



offsetGet
+++++++++

.. function:: offsetGet()


    Retrieve a specific key in the container

    :param string: 

    :rtype: mixed 



offsetUnset
+++++++++++

.. function:: offsetUnset()


    Unset a single key in the container

    :param string: 

    :rtype: void 



exchangeArray
+++++++++++++

.. function:: exchangeArray()


    Exchange the current array with another array or object.

    :param array|object: 

    :rtype: array Returns the old array

    :see:  



getIterator
+++++++++++

.. function:: getIterator()


    Iterate over session container

    :rtype: Iterator 



setExpirationSeconds
++++++++++++++++++++

.. function:: setExpirationSeconds()


    Set expiration TTL
    
    Set the TTL for the entire container, a single key, or a set of keys.

    :param int: TTL in seconds
    :param string|array|null: 

    :rtype: Container 

    :throws: Exception\InvalidArgumentException 



setExpirationHops
+++++++++++++++++

.. function:: setExpirationHops()


    Set expiration hops for the container, a single key, or set of keys

    :param int: 
    :param null|string|array: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Container 



