.. Log/Formatter/Xml.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Log\\Formatter\\Xml
=========================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Class constructor
    (the default encoding is UTF-8)

    :param array|Traversable: 

    :rtype: Xml 



getEncoding
+++++++++++

.. function:: getEncoding()


    Get encoding

    :rtype: string 



setEncoding
+++++++++++

.. function:: setEncoding()


    Set encoding

    :param string: 

    :rtype: Xml 



setEscaper
++++++++++

.. function:: setEscaper()


    Set Escaper instance

    :param Escaper: 

    :rtype: Xml 



getEscaper
++++++++++

.. function:: getEscaper()


    Get Escaper instance
    
    Lazy-loads an instance with the current encoding if none registered.

    :rtype: Escaper 



format
++++++

.. function:: format()


    Formats data into a single line to be written by the writer.

    :param array: event data

    :rtype: string formatted line to write to the log



getDateTimeFormat
+++++++++++++++++

.. function:: getDateTimeFormat()


    {@inheritDoc}



setDateTimeFormat
+++++++++++++++++

.. function:: setDateTimeFormat()


    {@inheritDoc}



