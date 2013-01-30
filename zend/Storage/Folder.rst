.. Mail/Storage/Folder.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Mail\\Storage\\Folder
===========================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    create a new mail folder instance

    :param string: name of folder in current subdirectory
    :param string: absolute name of folder
    :param bool: if true folder holds messages, if false it's just a parent for subfolders (Default: true)
    :param array: init with given instances of \Zend\Mail\Storage\Folder as subfolders



hasChildren
+++++++++++

.. function:: hasChildren()


    implements RecursiveIterator::hasChildren()

    :rtype: bool current element has children



getChildren
+++++++++++

.. function:: getChildren()


    implements RecursiveIterator::getChildren()

    :rtype: \Zend\Mail\Storage\Folder same as self::current()



valid
+++++

.. function:: valid()


    implements Iterator::valid()

    :rtype: bool check if there's a current element



next
++++

.. function:: next()


    implements Iterator::next()



key
+++

.. function:: key()


    implements Iterator::key()

    :rtype: string key/local name of current element



current
+++++++

.. function:: current()


    implements Iterator::current()

    :rtype: \Zend\Mail\Storage\Folder current folder



rewind
++++++

.. function:: rewind()


    implements Iterator::rewind()



__get
+++++

.. function:: __get()


    get subfolder named $name

    :param string: wanted subfolder

    :throws Exception\InvalidArgumentException: 

    :rtype: \Zend\Mail\Storage\Folder folder named $folder



__set
+++++

.. function:: __set()


    add or replace subfolder named $name

    :param string: local name of subfolder
    :param \Zend\Mail\Storage\Folder: instance for new subfolder



__unset
+++++++

.. function:: __unset()


    remove subfolder named $name

    :param string: local name of subfolder



__toString
++++++++++

.. function:: __toString()


    magic method for easy output of global name

    :rtype: string global name of folder



getLocalName
++++++++++++

.. function:: getLocalName()


    get local name

    :rtype: string local name



getGlobalName
+++++++++++++

.. function:: getGlobalName()


    get global name

    :rtype: string global name



isSelectable
++++++++++++

.. function:: isSelectable()


    is this folder selectable?

    :rtype: bool selectable



isLeaf
++++++

.. function:: isLeaf()


    check if folder has no subfolder

    :rtype: bool true if no subfolders



