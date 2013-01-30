.. Paginator/ScrollingStyle/Sliding.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Paginator\\ScrollingStyle\\Sliding
========================================

A Yahoo! Search-like scrolling style.  The cursor will advance to
the middle of the range, then remain there until the user reaches
the end of the page set, at which point it will continue on to
the end of the range and the last page in the set.

Methods
-------

getPages
++++++++

.. function:: getPages()


    Returns an array of "local" pages given a page number and range.

    :param Paginator: 
    :param integer: (Optional) Page range

    :rtype: array 



