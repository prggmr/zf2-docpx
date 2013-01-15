.. /Debug/Debug.php generated using docpx on 01/15/13 05:29pm


Zend\\Debug\\Debug
******************


Concrete class for generating debug dumps related to the output source.



Methods
=======

getSapi
-------

.. function:: getSapi()


    Get the current value of the debug output environment.
    This defaults to the value of PHP_SAPI.

    :rtype: string; 



setSapi
-------

.. function:: setSapi($sapi)


    Set the debug output environment.
    Setting a value of null causes Zend_Debug to use PHP_SAPI.

    :param string $sapi: 

    :rtype: void; 



setEscaper
----------

.. function:: setEscaper($escaper)


    Set Escaper instance

    :param Escaper $escaper: 



getEscaper
----------

.. function:: getEscaper()


    Get Escaper instance
    
    Lazy loads an instance if none provided.

    :rtype: Escaper 



dump
----

.. function:: dump($var, [$label = false, [$echo = true]])


    Debug helper function.  This is a wrapper for var_dump() that adds
    the <pre /> tags, cleans up newlines and indents, and runs
    htmlentities() before output.

    :param mixed $var: The variable to dump.
    :param string $label: OPTIONAL Label to prepend to output.
    :param bool $echo: OPTIONAL Echo output if true.

    :rtype: string 





