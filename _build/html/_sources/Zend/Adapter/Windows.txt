.. /Console/Adapter/Windows.php generated using docpx on 01/15/13 05:29pm


Zend\\Console\\Adapter\\Windows
*******************************


@category   Zend



Methods
=======

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

.. function:: setPos($x, $y)


    Set cursor position

    :param int $x: 
    :param int $y: 



getTitle
--------

.. function:: getTitle()


    Return current console window title.

    :rtype: string 



setCharset
----------

.. function:: setCharset($charset)


    Set Console charset to use.

    :param Charset\CharsetInterface $charset: 



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

.. function:: readChar([$mask = false])


    Read a single character from the console input

    :param string|null $mask: A list of allowed chars

    :throws Exception\RuntimeException: 

    :rtype: string 



$char
-----

.. function:: $char()



readLine
--------

.. function:: readLine([$maxLength = 2048])


    Read a single line from the console input.

    :param int $maxLength: Maximum response length

    :rtype: string 





