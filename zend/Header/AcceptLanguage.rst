.. Http/Header/AcceptLanguage.php generated using docpx on 01/30/13 03:32am


Zend\\Http\\Header\\AcceptLanguage
==================================

Accept Language Header

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



addLanguage
-----------

.. function:: addLanguage()


    Add a language, with the given priority

    :param string: 
    :param int|float: 

    :rtype: Accept 



hasLanguage
-----------

.. function:: hasLanguage()


    Does the header have the requested language?

    :param string: 

    :rtype: bool 



parseFieldValuePart
-------------------

.. function:: parseFieldValuePart()


    Parse the keys contained in the header line

    :param string: 

    :rtype: \Zend\Http\Header\Accept\FieldValuePart\LanguageFieldValuePart 

    :see:  



