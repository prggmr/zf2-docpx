.. Cache/Storage/Plugin/IgnoreUserAbort.php generated using docpx on 01/30/13 03:32am


Zend\\Cache\\Storage\\Plugin\\IgnoreUserAbort
=============================================

Methods
+++++++

attach
------

.. function:: attach()


    Attach

    :param EventManagerInterface: 
    :param int: 

    :rtype: Serializer 

    :throws: Exception\LogicException 



detach
------

.. function:: detach()


    Detach

    :param EventManagerInterface: 

    :rtype: Serializer 

    :throws: Exception\LogicException 



onBefore
--------

.. function:: onBefore()


    Activate ignore_user_abort if not already done
    and save the target who activated it.

    :param Event: 

    :rtype: void 



onAfter
-------

.. function:: onAfter()


    Reset ignore_user_abort if it's activated and if it's the same target
    who activated it.
    
    If exit_on_abort is enabled and the connection has been aborted
    exit the script.

    :param Event: 

    :rtype: void 



