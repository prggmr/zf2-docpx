.. Session/SaveHandler/SaveHandlerInterface.php generated using docpx on 01/30/13 03:02pm


Function
********

Zend\\Session\\SaveHandler\\open
================================

.. function:: Zend\Session\SaveHandler\open()


    Open Session - retrieve resources

    :param string: 
    :param string: 



Function
********

Zend\\Session\\SaveHandler\\close
=================================

.. function:: Zend\Session\SaveHandler\close()


    Close Session - free resources



Function
********

Zend\\Session\\SaveHandler\\read
================================

.. function:: Zend\Session\SaveHandler\read()


    Read session data

    :param string: 



Function
********

Zend\\Session\\SaveHandler\\write
=================================

.. function:: Zend\Session\SaveHandler\write()


    Write Session - commit data to resource

    :param string: 
    :param mixed: 



Function
********

Zend\\Session\\SaveHandler\\destroy
===================================

.. function:: Zend\Session\SaveHandler\destroy()


    Destroy Session - remove data from resource for
    given session id

    :param string: 



Function
********

Zend\\Session\\SaveHandler\\gc
==============================

.. function:: Zend\Session\SaveHandler\gc()


    Garbage Collection - remove old session data older
    than $maxlifetime (in seconds)

    :param int: 



