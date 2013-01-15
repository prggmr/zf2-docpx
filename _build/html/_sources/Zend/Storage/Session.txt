.. /Authentication/Storage/Session.php generated using docpx on 01/15/13 05:29pm


Zend\\Authentication\\Storage\\Session
**************************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$namespace = false, [$member = false, [$manager = false]]])


    Sets session storage options and initializes session namespace object

    :param mixed $namespace: 
    :param mixed $member: 
    :param SessionManager $manager: 



getNamespace
------------

.. function:: getNamespace()


    Returns the session namespace

    :rtype: string 



getMember
---------

.. function:: getMember()


    Returns the name of the session object member

    :rtype: string 



isEmpty
-------

.. function:: isEmpty()


    Defined by Zend\Authentication\Storage\StorageInterface

    :rtype: bool 



read
----

.. function:: read()


    Defined by Zend\Authentication\Storage\StorageInterface

    :rtype: mixed 



write
-----

.. function:: write($contents)


    Defined by Zend\Authentication\Storage\StorageInterface

    :param mixed $contents: 

    :rtype: void 



clear
-----

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

