.. Http/Header/AcceptCharset.php generated using docpx on 01/30/13 03:32am


Zend\\Http\\Header\\AcceptCharset
=================================

Accept Charset Header

Methods
+++++++

getFieldName
------------

.. function:: getFieldName()


    Get field name

    :rtype: string 



toString
--------

.. function:: toString()


    Cast to string

    :rtype: string 



addCharset
----------

.. function:: addCharset()


    Add a charset, with the given priority

    :param string: 
    :param int|float: 

    :rtype: Accept 



hasCharset
----------

.. function:: hasCharset()


    Does the header have the requested charset?

    :param string: 

    :rtype: bool 



parseFieldValuePart
-------------------

.. function:: parseFieldValuePart()


    Parse the keys contained in the header line

    :param string: 

    :rtype: \Zend\Http\Header\Accept\FieldValuePart\CharsetFieldValuePart 

    :see:  



