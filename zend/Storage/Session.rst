.. Authentication/Storage/Session.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Authentication\\Storage\\Session
======================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Sets session storage options and initializes session namespace object

    :param mixed: 
    :param mixed: 
    :param SessionManager: 



getNamespace
++++++++++++

.. function:: getNamespace()


    Returns the session namespace

    :rtype: string 



getMember
+++++++++

.. function:: getMember()


    Returns the name of the session object member

    :rtype: string 



isEmpty
+++++++

.. function:: isEmpty()


    Defined by Zend\Authentication\Storage\StorageInterface

    :rtype: bool 



read
++++

.. function:: read()


    Defined by Zend\Authentication\Storage\StorageInterface

    :rtype: mixed 



write
+++++

.. function:: write()


    Defined by Zend\Authentication\Storage\StorageInterface

    :param mixed: 

    :rtype: void 



clear
+++++

.. function:: clear()


    Defined by Zend\Authentication\Storage\StorageInterface

    :rtype: void 





Constants
---------

NAMESPACE_DEFAULT
+++++++++++++++++

Default session namespace

MEMBER_DEFAULT
++++++++++++++

Default session object member name

