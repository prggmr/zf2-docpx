.. View/Helper/Escaper/AbstractHelper.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\View\\Helper\\Escaper\\AbstractHelper
===========================================

Helper for escaping values

Methods
-------

setEscaper
++++++++++

.. function:: setEscaper()


    @var string Encoding



getEscaper
++++++++++

.. function:: getEscaper()



setEncoding
+++++++++++

.. function:: setEncoding()


    Set the encoding to use for escape operations

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractHelper 



getEncoding
+++++++++++

.. function:: getEncoding()


    Get the encoding to use for escape operations

    :rtype: string 



__invoke
++++++++

.. function:: __invoke()


    Invoke this helper: escape a value

    :param mixed: 
    :param int: Expects one of the recursion constants; used to decide whether or not to recurse the given value when escaping

    :rtype: mixed Given a scalar, a scalar value is returned. Given an object, with the $recurse flag not allowing object recursion, returns a string. Otherwise, returns an array.

    :throws: Exception\InvalidArgumentException 



escape
++++++

.. function:: escape()


    Escape a value for current escaping strategy

    :param string: 

    :rtype: string 





Constants
---------

RECURSE_NONE
++++++++++++

RECURSE_ARRAY
+++++++++++++

RECURSE_OBJECT
++++++++++++++

