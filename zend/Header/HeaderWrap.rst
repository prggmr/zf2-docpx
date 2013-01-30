.. Mail/Header/HeaderWrap.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mail\\Header\\HeaderWrap
==============================

Utility class used for creating wrapped or MIME-encoded versions of header
values.

Methods
-------

wrap
++++

.. function:: wrap()


    Wrap a long header line

    :param string: 
    :param HeaderInterface: 

    :rtype: string 



wrapUnstructuredHeader
++++++++++++++++++++++

.. function:: wrapUnstructuredHeader()


    Wrap an unstructured header line
    
    Wrap at 78 characters or before, based on whitespace.

    :param string: 
    :param HeaderInterface: 

    :rtype: string 



wrapStructuredHeader
++++++++++++++++++++

.. function:: wrapStructuredHeader()


    Wrap a structured header line

    :param string: 
    :param StructuredInterface: 

    :rtype: string 



mimeEncodeValue
+++++++++++++++

.. function:: mimeEncodeValue()


    MIME-encode a value
    
    Performs quoted-printable encoding on a value, setting maximum
    line-length to 998.

    :param string: 
    :param string: 
    :param int: maximum line-length, by default 998

    :rtype: string Returns the mime encode value without the last line ending



