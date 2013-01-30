.. View/Stream.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\View\\Stream
==================

Stream wrapper to convert markup of mostly-PHP templates into PHP prior to
include().

Based in large part on the example at
http://www.php.net/manual/en/function.stream-wrapper-register.php

As well as the example provided at:
    http://mikenaberezny.com/2006/02/19/symphony-templates-ruby-erb/
written by
    Mike Naberezny (@link http://mikenaberezny.com)
    Paul M. Jones  (@link http://paul-m-jones.com)

Methods
-------

stream_open
+++++++++++

.. function:: stream_open()


    Opens the script file and converts markup.



url_stat
++++++++

.. function:: url_stat()


    Included so that __FILE__ returns the appropriate info

    :rtype: array 



stream_read
+++++++++++

.. function:: stream_read()


    Reads from the stream.



stream_tell
+++++++++++

.. function:: stream_tell()


    Tells the current position in the stream.



stream_eof
++++++++++

.. function:: stream_eof()


    Tells if we are at the end of the stream.



stream_stat
+++++++++++

.. function:: stream_stat()


    Stream statistics.



stream_seek
+++++++++++

.. function:: stream_seek()


    Seek to a specific point in the stream.



