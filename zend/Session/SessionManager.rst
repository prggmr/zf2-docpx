.. Session/SessionManager.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Session\\SessionManager
=============================

Session ManagerInterface implementation utilizing ext/session

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param Config\ConfigInterface|null: 
    :param Storage\StorageInterface|null: 
    :param SaveHandler\SaveHandlerInterface|null: 

    :throws Exception\RuntimeException: 



sessionExists
+++++++++++++

.. function:: sessionExists()


    Does a session exist and is it currently active?

    :rtype: bool 



start
+++++

.. function:: start()


    Start session
    
    if No session currently exists, attempt to start it. Calls
    {@link isValid()} once session_start() is called, and raises an
    exception if validation fails.

    :param bool: If set to true, current session storage will not be overwritten by the
                                    contents of $_SESSION.

    :rtype: void 

    :throws: Exception\RuntimeException 



destroy
+++++++

.. function:: destroy()


    Destroy/end a session

    :param array: See {@link $defaultDestroyOptions}

    :rtype: void 



writeClose
++++++++++

.. function:: writeClose()


    Write session to save handler and close
    
    Once done, the Storage object will be marked as isImmutable.

    :rtype: void 



setName
+++++++

.. function:: setName()


    Attempt to set the session name
    
    If the session has already been started, or if the name provided fails
    validation, an exception will be raised.

    :param string: 

    :rtype: SessionManager 

    :throws: Exception\InvalidArgumentException 



getName
+++++++

.. function:: getName()


    Get session name
    
    Proxies to {@link session_name()}.

    :rtype: string 



setId
+++++

.. function:: setId()


    Set session ID
    
    Can safely be called in the middle of a session.

    :param string: 

    :rtype: SessionManager 



getId
+++++

.. function:: getId()


    Get session ID
    
    Proxies to {@link session_id()}

    :rtype: string 



regenerateId
++++++++++++

.. function:: regenerateId()


    Regenerate id
    
    Regenerate the session ID, using session save handler's
    native ID generation Can safely be called in the middle of a session.

    :param bool: 

    :rtype: SessionManager 



rememberMe
++++++++++

.. function:: rememberMe()


    Set the TTL (in seconds) for the session cookie expiry
    
    Can safely be called in the middle of a session.

    :param null|int: 

    :rtype: SessionManager 



forgetMe
++++++++

.. function:: forgetMe()


    Set a 0s TTL for the session cookie
    
    Can safely be called in the middle of a session.

    :rtype: SessionManager 



setValidatorChain
+++++++++++++++++

.. function:: setValidatorChain()


    Set the validator chain to use when validating a session
    
    In most cases, you should use an instance of {@link ValidatorChain}.

    :param EventManagerInterface: 

    :rtype: SessionManager 



getValidatorChain
+++++++++++++++++

.. function:: getValidatorChain()


    Get the validator chain to use when validating a session
    
    By default, uses an instance of {@link ValidatorChain}.

    :rtype: EventManagerInterface 



isValid
+++++++

.. function:: isValid()


    Is this session valid?
    
    Notifies the Validator Chain until either all validators have returned
    true or one has failed.

    :rtype: bool 



expireSessionCookie
+++++++++++++++++++

.. function:: expireSessionCookie()


    Expire the session cookie
    
    Sends a session cookie with no value, and with an expiry in the past.

    :rtype: void 



setSessionCookieLifetime
++++++++++++++++++++++++

.. function:: setSessionCookieLifetime()


    Set the session cookie lifetime
    
    If a session already exists, destroys it (without sending an expiration
    cookie), regenerates the session ID, and restarts the session.

    :param int: 

    :rtype: void 



registerSaveHandler
+++++++++++++++++++

.. function:: registerSaveHandler()


    Register Save Handler with ext/session
    
    Since ext/session is coupled to this particular session manager
    register the save handler with ext/session.

    :param SaveHandler\SaveHandlerInterface: 

    :rtype: bool 



