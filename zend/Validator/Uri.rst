.. Validator/Uri.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Validator\\Uri
====================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Sets default option values for this instance

    :param array|\Traversable: 



getUriHandler
+++++++++++++

.. function:: getUriHandler()


    @throws InvalidArgumentException

    :rtype: UriHandler 



setUriHandler
+++++++++++++

.. function:: setUriHandler()


    @param  UriHandler $uriHandler


    :rtype: Uri 



getAllowAbsolute
++++++++++++++++

.. function:: getAllowAbsolute()


    Returns the allowAbsolute option

    :rtype: bool 



setAllowAbsolute
++++++++++++++++

.. function:: setAllowAbsolute()


    Sets the allowAbsolute option

    :param bool: 

    :rtype: Uri 



getAllowRelative
++++++++++++++++

.. function:: getAllowRelative()


    Returns the allowRelative option

    :rtype: bool 



setAllowRelative
++++++++++++++++

.. function:: setAllowRelative()


    Sets the allowRelative option

    :param bool: 

    :rtype: Uri 



isValid
+++++++

.. function:: isValid()


    Returns true if and only if $value validates as a Uri

    :param string: 

    :rtype: bool 





Constants
---------

INVALID
+++++++

NOT_URI
+++++++

