.. Debug/Debug.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Debug\\Debug
==================

Concrete class for generating debug dumps related to the output source.

Methods
-------

getSapi
+++++++

.. function:: getSapi()


    Get the current value of the debug output environment.
    This defaults to the value of PHP_SAPI.

    :rtype: string; 



setSapi
+++++++

.. function:: setSapi()


    Set the debug output environment.
    Setting a value of null causes Zend_Debug to use PHP_SAPI.

    :param string: 

    :rtype: void; 



setEscaper
++++++++++

.. function:: setEscaper()


    Set Escaper instance

    :param Escaper: 



getEscaper
++++++++++

.. function:: getEscaper()


    Get Escaper instance
    
    Lazy loads an instance if none provided.

    :rtype: Escaper 



dump
++++

.. function:: dump()


    Debug helper function.  This is a wrapper for var_dump() that adds
    the <pre /> tags, cleans up newlines and indents, and runs
    htmlentities() before output.

    :param mixed: The variable to dump.
    :param string: OPTIONAL Label to prepend to output.
    :param bool: OPTIONAL Echo output if true.

    :rtype: string 



