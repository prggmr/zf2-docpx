.. Mail/Header/AbstractAddressList.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Mail\\Header\\AbstractAddressList
=======================================

Base class for headers composing address lists (to, from, cc, bcc, reply-to)

Methods
-------

fromString
++++++++++

.. function:: fromString()


    @var string lower case field name



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



setAddressList
++++++++++++++

.. function:: setAddressList()


    Set address list for this header

    :param AddressList: 



getAddressList
++++++++++++++

.. function:: getAddressList()


    Get address list managed by this header

    :rtype: AddressList 



toString
++++++++

.. function:: toString()



