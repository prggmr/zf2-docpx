.. Console/Adapter/Windows.php generated using docpx on 01/30/13 03:32am


Zend\\Console\\Adapter\\Windows
===============================

Methods
+++++++

getWidth
--------

.. function:: getWidth()


    Determine and return current console width.

    :rtype: int 



getHeight
---------

.. function:: getHeight()


    Determine and return current console height.

    :rtype: false|int 



runProbeCommand
---------------

.. function:: runProbeCommand()


    Probe for system capabilities and cache results
    
    Run a Windows Powershell command that determines parameters of console window. The command is fed through
    standard input (with echo) to prevent Powershell from creating a sub-thread and hanging PHP when run through
    a debugger/IDE.

    :rtype: void 



runModeCommand
--------------

.. function:: runModeCommand()


    Run and cache results of mode command

    :rtype: void 



isUtf8
------

.. function:: isUtf8()


    Check if console is UTF-8 compatible

    :rtype: bool 



setPos
------

.. function:: setPos()


    Set cursor position

    :param int: 
    :param int: 



getTitle
--------

.. function:: getTitle()


    Return current console window title.

    :rtype: string 



setCharset
----------

.. function:: setCharset()


    Set Console charset to use.

    :param Charset\CharsetInterface: 



getCharset
----------

.. function:: getCharset()


    Get charset currently in use by this adapter.

    :rtype: Charset\CharsetInterface $charset



getDefaultCharset
-----------------

.. function:: getDefaultCharset()


    @return Charset\AsciiExtended



switchToUtf8
------------

.. function:: switchToUtf8()


    Switch to utf-8 encoding

    :rtype: void 



clear
-----

.. function:: clear()


    Clear console screen



clearLine
---------

.. function:: clearLine()


    Clear line at cursor position



readChar
--------

.. function:: readChar()


    Read a single character from the console input

    :param string|null: A list of allowed chars

    :throws Exception\RuntimeException: 

    :rtype: string 



readLine
--------

.. function:: readLine()


    Read a single line from the console input.

    :param int: Maximum response length

    :rtype: string 



