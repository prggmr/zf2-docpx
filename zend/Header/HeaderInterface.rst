.. Mail/Header/HeaderInterface.php generated using docpx on 01/30/13 03:32am


Zend\\Mail\\Header\\fromString
==============================

.. function:: Zend\Mail\Header\fromString()


    Factory to generate a header object from a string

    :param string: 

    :rtype: self 



Zend\\Mail\\Header\\getFieldName
================================

.. function:: Zend\Mail\Header\getFieldName()


    Retrieve header name

    :rtype: string 



Zend\\Mail\\Header\\getFieldValue
=================================

.. function:: Zend\Mail\Header\getFieldValue()


    Retrieve header value

    :param bool: Return the value in Mime::Encoded or in Raw format

    :rtype: string 



Zend\\Mail\\Header\\setEncoding
===============================

.. function:: Zend\Mail\Header\setEncoding()


    Set header encoding

    :param string: 

    :rtype: self 



Zend\\Mail\\Header\\getEncoding
===============================

.. function:: Zend\Mail\Header\getEncoding()


    Get header encoding

    :rtype: string 



Zend\\Mail\\Header\\toString
============================

.. function:: Zend\Mail\Header\toString()


    Cast to string
    
    Returns in form of "NAME: VALUE"

    :rtype: string 



FORMAT_ENCODED
==============

Format value in Mime-Encoding if not US-ASCII encoding is used

FORMAT_RAW
==========

Return value with the interval ZF2 value (UTF-8 non-encoded)

