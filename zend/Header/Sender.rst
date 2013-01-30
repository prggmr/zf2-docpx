.. Mail/Header/Sender.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mail\\Header\\Sender
==========================

Methods
-------

fromString
++++++++++

.. function:: fromString()


    Header encoding




getFieldName
++++++++++++

.. function:: getFieldName()



getFieldValue
+++++++++++++

.. function:: getFieldValue()



setEncoding
+++++++++++

.. function:: setEncoding()



getEncoding
+++++++++++

.. function:: getEncoding()



toString
++++++++

.. function:: toString()



setAddress
++++++++++

.. function:: setAddress()


    Set the address used in this header

    :param string|\Zend\Mail\Address\AddressInterface: 
    :param null|string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Sender 



getAddress
++++++++++

.. function:: getAddress()


    Retrieve the internal address from this header

    :rtype: \Zend\Mail\Address\AddressInterface|null 



