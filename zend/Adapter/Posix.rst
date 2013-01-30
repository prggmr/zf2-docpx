.. Console/Adapter/Posix.php generated using docpx on 01/30/13 03:32am


Zend\\Console\\Adapter\\Posix
=============================

@todo Add GNU readline support

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



runModeCommand
--------------

.. function:: runModeCommand()


    Run a mode command and store results

    :rtype: void 



isUtf8
------

.. function:: isUtf8()


    Check if console is UTF-8 compatible

    :rtype: bool 



showCursor
----------

.. function:: showCursor()


    Show console cursor



hideCursor
----------

.. function:: hideCursor()


    Hide console cursor



setPos
------

.. function:: setPos()


    Set cursor position

    :param int: 
    :param int: 



colorize
--------

.. function:: colorize()


    Prepare a string that will be rendered in color.

    :param string: 
    :param int: 
    :param null|int: 

    :throws Exception\BadMethodCallException: 

    :rtype: string 



setColor
--------

.. function:: setColor()


    Change current drawing color.

    :param int: 

    :throws Exception\BadMethodCallException: 



setBgColor
----------

.. function:: setBgColor()


    Change current drawing background color

    :param int: 

    :throws Exception\BadMethodCallException: 



resetColor
----------

.. function:: resetColor()


    Reset color to console default.



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


    @return Charset\CharsetInterface



readChar
--------

.. function:: readChar()


    Read a single character from the console input

    :param string|null: A list of allowed chars

    :rtype: string 



clear
-----

.. function:: clear()


    Reset color to console default.



restoreTTYMode
--------------

.. function:: restoreTTYMode()


    Restore TTY (Console) mode to previous value.

    :rtype: void 



setTTYMode
----------

.. function:: setTTYMode()


    Change TTY (Console) mode


    :param $mode: 



getColorCode
------------

.. function:: getColorCode()


    Get the final color code and throw exception on error

    :param null|int|Xterm256: 

    :throws Exception\BadMethodCallException: 

    :rtype: string 



