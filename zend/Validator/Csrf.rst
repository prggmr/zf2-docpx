.. Validator/Csrf.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Validator\\Csrf
=====================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param array|Traversable: 



isValid
+++++++

.. function:: isValid()


    Does the provided token match the one generated?

    :param string: 
    :param mixed: 

    :rtype: bool 



setName
+++++++

.. function:: setName()


    Set CSRF name

    :param string: 

    :rtype: Csrf 



getName
+++++++

.. function:: getName()


    Get CSRF name

    :rtype: string 



setSession
++++++++++

.. function:: setSession()


    Set session container

    :param SessionContainer: 

    :rtype: Csrf 



getSession
++++++++++

.. function:: getSession()


    Get session container
    
    Instantiate session container if none currently exists

    :rtype: SessionContainer 



setSalt
+++++++

.. function:: setSalt()


    Salt for CSRF token

    :param string: 

    :rtype: Csrf 



getSalt
+++++++

.. function:: getSalt()


    Retrieve salt for CSRF token

    :rtype: string 



getHash
+++++++

.. function:: getHash()


    Retrieve CSRF token
    
    If no CSRF token currently exists, or should be regenerated,
    generates one.

    :param bool: default false

    :rtype: string 



getSessionName
++++++++++++++

.. function:: getSessionName()


    Get session namespace for CSRF token
    
    Generates a session namespace based on salt, element name, and class.

    :rtype: string 



setTimeout
++++++++++

.. function:: setTimeout()


    Set timeout for CSRF session token

    :param int|null: 

    :rtype: Csrf 



getTimeout
++++++++++

.. function:: getTimeout()


    Get CSRF session token timeout

    :rtype: int 



initCsrfToken
+++++++++++++

.. function:: initCsrfToken()


    Initialize CSRF token in session

    :rtype: void 



generateHash
++++++++++++

.. function:: generateHash()


    Generate CSRF token
    
    Generates CSRF token and stores both in {@link $hash} and element
    value.

    :rtype: void 



getValidationToken
++++++++++++++++++

.. function:: getValidationToken()


    Get validation token
    
    Retrieve token from session, if it exists.

    :rtype: null|string 





Constants
---------

NOT_SAME
++++++++

Error codes

