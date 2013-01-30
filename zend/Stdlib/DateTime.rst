.. Stdlib/DateTime.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Stdlib\\DateTime
======================

DateTime

An extension of the \DateTime object.

Methods
-------

createFromISO8601
+++++++++++++++++

.. function:: createFromISO8601()


    The DateTime::ISO8601 constant used by php's native DateTime object does
    not allow for fractions of a second. This function better handles ISO8601
    formatted date strings.

    :param string: 
    :param DateTimeZone: 

    :rtype: mixed 



