.. Console/Adapter/WindowsAnsicon.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Console\\Adapter\\WindowsAnsicon
======================================

MS Windows with ANSICON console adapter

This adapter requires ANSICON extension to be installed. It can be obtained from:
     https://github.com/adoxa/ansicon

ANSICON has to be loaded and enabled before using this adapter. It's best to install
it using following command:
     ansicon -I

Console should not run in UTF8 code page (65001), because ANSICON does not behave well with it.
It's best to use non-unicode code page 437, 850, 851, 852 or similar. Run "help mode" for more
information on how to change Windows console code page.

Methods
-------

getWidth
++++++++

.. function:: getWidth()


    Determine and return current console width.

    :rtype: int 



getHeight
+++++++++

.. function:: getHeight()


    Determine and return current console height.

    :rtype: false|int 



runModeCommand
++++++++++++++

.. function:: runModeCommand()


    Run and cache results of mode command

    :rtype: void 



isUtf8
++++++

.. function:: isUtf8()


    Check if console is UTF-8 compatible

    :rtype: bool 



getTitle
++++++++

.. function:: getTitle()


    Return current console window title.

    :rtype: string 



clear
+++++

.. function:: clear()


    Clear console screen



clearLine
+++++++++

.. function:: clearLine()


    Clear line at cursor position



setCharset
++++++++++

.. function:: setCharset()


    Set Console charset to use.

    :param CharsetInterface: 



getCharset
++++++++++

.. function:: getCharset()


    Get charset currently in use by this adapter.

    :rtype: CharsetInterface $charset



getDefaultCharset
+++++++++++++++++

.. function:: getDefaultCharset()


    @return Charset\AsciiExtended



readChar
++++++++

.. function:: readChar()


    Read a single character from the console input

    :param string|null: A list of allowed chars

    :rtype: string 

    :throws: Exception\RuntimeException 



