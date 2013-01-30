.. Session/SaveHandler/DbTableGateway.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Session\\SaveHandler\\DbTableGateway
==========================================

DB Table Gateway session save handler

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param TableGateway: 
    :param DbTableGatewayOptions: 



open
++++

.. function:: open()


    Open Session

    :param string: 
    :param string: 

    :rtype: bool 



close
+++++

.. function:: close()


    Close session

    :rtype: bool 



read
++++

.. function:: read()


    Read session data

    :param string: 

    :rtype: string 



write
+++++

.. function:: write()


    Write session data

    :param string: 
    :param string: 

    :rtype: bool 



destroy
+++++++

.. function:: destroy()


    Destroy session

    :param string: 

    :rtype: bool 



gc
++

.. function:: gc()


    Garbage Collection

    :param int: 

    :rtype: true 



