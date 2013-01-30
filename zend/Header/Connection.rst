.. Http/Header/Connection.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Http\\Header\\Connection
==============================

Connection Header

Methods
-------

fromString
++++++++++

.. function:: fromString()


    @param $headerLine

    :rtype: Connection 

    :throws: Exception\InvalidArgumentException 



setPersistent
+++++++++++++

.. function:: setPersistent()


    Set Connection header to define persistent connection

    :param bool: 

    :rtype: Connection 



isPersistent
++++++++++++

.. function:: isPersistent()


    Get whether this connection is persistent

    :rtype: bool 



setValue
++++++++

.. function:: setValue()


    Set arbitrary header value
    RFC allows any token as value, 'close' and 'keep-alive' are commonly used

    :param string: 

    :rtype: Connection 



getFieldName
++++++++++++

.. function:: getFieldName()


    Connection header name

    :rtype: string 



getFieldValue
+++++++++++++

.. function:: getFieldValue()


    Connection header value

    :rtype: string 



toString
++++++++

.. function:: toString()


    Return header line

    :rtype: string 





Constants
---------

CONNECTION_CLOSE
++++++++++++++++

CONNECTION_KEEP_ALIVE
+++++++++++++++++++++

