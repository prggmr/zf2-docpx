.. Paginator/ScrollingStyle/Elastic.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Paginator\\ScrollingStyle\\Elastic
========================================

A Google-like scrolling style.  Incrementally expands the range to about
twice the given page range, then behaves like a slider.  See the example
link.

Methods
-------

getPages
++++++++

.. function:: getPages()


    Returns an array of "local" pages given a page number and range.

    :param Paginator: 
    :param integer: Unused

    :rtype: array 



