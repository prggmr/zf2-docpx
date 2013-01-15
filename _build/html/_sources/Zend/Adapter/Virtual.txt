.. /Console/Adapter/Virtual.php generated using docpx on 01/15/13 05:29pm


Zend\\Console\\Adapter\\Virtual
*******************************


Virtual buffer adapter



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


    Run and store the results of mode command

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


    Switch to UTF mode

    :rtype: void 





