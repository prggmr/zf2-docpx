.. Http/Header/AbstractDate.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Http\\Header\\AbstractDate
================================

Abstract Date/Time Header
Supports headers that have date/time as value

Methods
-------

fromString
++++++++++

.. function:: fromString()


    Create date-based header from string

    :param string: 

    :rtype: AbstractDate 

    :throws: Exception\InvalidArgumentException 



setDateFormat
+++++++++++++

.. function:: setDateFormat()


    Set date output format

    :param int: 

    :throws Exception\InvalidArgumentException: 



getDateFormat
+++++++++++++

.. function:: getDateFormat()


    Return current date output format

    :rtype: string 



setDate
+++++++

.. function:: setDate()


    Set the date for this header, this can be a string or an instance of \DateTime

    :param string|DateTime: 

    :rtype: AbstractDate 

    :throws: Exception\InvalidArgumentException 



getDate
+++++++

.. function:: getDate()


    Return date for this header

    :rtype: string 



date
++++

.. function:: date()


    Return date for this header as an instance of \DateTime

    :rtype: DateTime 



compareTo
+++++++++

.. function:: compareTo()


    Compare provided date to date for this header
    Returns < 0 if date in header is less than $date; > 0 if it's greater, and 0 if they are equal.


    :param string|DateTime: 

    :rtype: int 

    :throws: Exception\InvalidArgumentException 



getFieldValue
+++++++++++++

.. function:: getFieldValue()


    Get header value as formatted date

    :rtype: string 



toString
++++++++

.. function:: toString()


    Return header line

    :rtype: string 



__toString
++++++++++

.. function:: __toString()


    Allow casting to string

    :rtype: string 





Constants
---------

DATE_RFC1123
++++++++++++

Date formats according to RFC 2616

DATE_RFC1036
++++++++++++

DATE_ANSIC
++++++++++

