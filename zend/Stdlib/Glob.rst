.. Stdlib/Glob.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Stdlib\\Glob
==================

Wrapper for glob with fallback if GLOB_BRACE is not available.

Methods
-------

glob
++++

.. function:: glob()


    Find pathnames matching a pattern.


    :param string: 
    :param integer: 
    :param bool: 

    :rtype: array|false 



systemGlob
++++++++++

.. function:: systemGlob()


    Use the glob function provided by the system.

    :param string: 
    :param integer: 

    :rtype: array|false 



fallbackGlob
++++++++++++

.. function:: fallbackGlob()


    Expand braces manually, then use the system glob.

    :param string: 
    :param integer: 

    :rtype: array|false 



nextBraceSub
++++++++++++

.. function:: nextBraceSub()


    Find the end of the sub-pattern in a brace expression.

    :param string: 
    :param integer: 
    :param integer: 

    :rtype: integer|null 





Constants
---------

GLOB_MARK
+++++++++

GLOB_NOSORT
+++++++++++

GLOB_NOCHECK
++++++++++++

GLOB_NOESCAPE
+++++++++++++

GLOB_BRACE
++++++++++

GLOB_ONLYDIR
++++++++++++

GLOB_ERR
++++++++

