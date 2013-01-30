.. Mail/Header/ContentType.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Mail\\Header\\ContentType
===============================

Methods
-------

fromString
++++++++++

.. function:: fromString()


    @var array



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



setType
+++++++

.. function:: setType()


    Set the content type

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: ContentType 



getType
+++++++

.. function:: getType()


    Retrieve the content type

    :rtype: string 



addParameter
++++++++++++

.. function:: addParameter()


    Add a parameter pair

    :param string: 
    :param string: 

    :rtype: ContentType 



getParameters
+++++++++++++

.. function:: getParameters()


    Get all parameters

    :rtype: array 



getParameter
++++++++++++

.. function:: getParameter()


    Get a parameter by name

    :param string: 

    :rtype: null|string 



removeParameter
+++++++++++++++

.. function:: removeParameter()


    Remove a named parameter

    :param string: 

    :rtype: bool 



