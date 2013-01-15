.. /Console/Adapter/Posix.php generated using docpx on 01/15/13 05:29pm


Zend\\Console\\Adapter\\Posix
*****************************


@todo Add GNU readline support



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

.. function:: setPos($x, $y)


    Set cursor position

    :param int $x: 
    :param int $y: 



colorize
--------

.. function:: colorize($string, [$color = false, [$bgColor = false]])


    Prepare a string that will be rendered in color.

    :param string $string: 
    :param int $color: 
    :param null|int $bgColor: 

    :throws Exception\BadMethodCallException: 

    :rtype: string 



setColor
--------

.. function:: setColor($color)


    Change current drawing color.

    :param int $color: 

    :throws Exception\BadMethodCallException: 



setBgColor
----------

.. function:: setBgColor($bgColor)


    Change current drawing background color

    :param int $bgColor: 

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


    @return Charset\CharsetInterface



readChar
--------

.. function:: readChar([$mask = false])


    Read a single character from the console input

    :param string|null $mask: A list of allowed chars

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

.. function:: setTTYMode($mode)


    Change TTY (Console) mode


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param $mode: 





