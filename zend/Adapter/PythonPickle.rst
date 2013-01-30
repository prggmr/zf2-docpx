.. Serializer/Adapter/PythonPickle.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Serializer\\Adapter\\PythonPickle
=======================================

@link       http://www.python.org

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor.

    :param array|\Traversable|PythonPickleOptions: Optional



setOptions
++++++++++

.. function:: setOptions()


    Set options

    :param array|\Traversable|PythonPickleOptions: 

    :rtype: PythonPickle 



getOptions
++++++++++

.. function:: getOptions()


    Get options

    :rtype: PythonPickleOptions 



serialize
+++++++++

.. function:: serialize()


    Serialize PHP to PythonPickle format

    :param mixed: 

    :rtype: string 



write
+++++

.. function:: write()


    Write a value

    :param mixed: 

    :throws Exception\RuntimeException: on invalid or unrecognized value type



writeProto
++++++++++

.. function:: writeProto()


    Write pickle protocol

    :param int: 



writeGet
++++++++

.. function:: writeGet()


    Write a get

    :param int: Id of memo



writePut
++++++++

.. function:: writePut()


    Write a put

    :param int: Id of memo



writeNull
+++++++++

.. function:: writeNull()


    Write a null as None



writeBool
+++++++++

.. function:: writeBool()


    Write boolean value

    :param bool: 



writeInt
++++++++

.. function:: writeInt()


    Write an integer value

    :param int: 



writeFloat
++++++++++

.. function:: writeFloat()


    Write a float value

    :param float: 



writeString
+++++++++++

.. function:: writeString()


    Write a string value

    :param string: 



writeArrayDict
++++++++++++++

.. function:: writeArrayDict()


    Write an associative array value as dictionary

    :param array|Traversable: 



writeArrayList
++++++++++++++

.. function:: writeArrayList()


    Write a simple array value as list

    :param array: 



writeObject
+++++++++++

.. function:: writeObject()


    Write an object as an dictionary

    :param object: 



writeStop
+++++++++

.. function:: writeStop()


    Write stop



memorize
++++++++

.. function:: memorize()


    Add a value to the memo and write the id

    :param mixed: 



searchMemo
++++++++++

.. function:: searchMemo()


    Search a value in the memo and return  the id

    :param mixed: 

    :rtype: int|bool The id or false



quoteString
+++++++++++

.. function:: quoteString()


    Quote/Escape a string

    :param string: 

    :rtype: string quoted string



unserialize
+++++++++++

.. function:: unserialize()


    Unserialize from Python Pickle format to PHP

    :param string: 

    :rtype: mixed 

    :throws: Exception\RuntimeException on invalid Pickle string



clearProcessVars
++++++++++++++++

.. function:: clearProcessVars()


    Clear temp variables needed for processing



load
++++

.. function:: load()


    Load a pickle opcode

    :param string: 

    :throws Exception\RuntimeException: on invalid opcode



loadPut
+++++++

.. function:: loadPut()


    Load a PUT opcode




loadBinPut
++++++++++

.. function:: loadBinPut()


    Load a binary PUT




loadLongBinPut
++++++++++++++

.. function:: loadLongBinPut()


    Load a long binary PUT




loadGet
+++++++

.. function:: loadGet()


    Load a GET operation




loadBinGet
++++++++++

.. function:: loadBinGet()


    Load a binary GET operation




loadLongBinGet
++++++++++++++

.. function:: loadLongBinGet()


    Load a long binary GET operation




loadNone
++++++++

.. function:: loadNone()


    Load a NONE operator



loadNewTrue
+++++++++++

.. function:: loadNewTrue()


    Load a boolean TRUE operator



loadNewFalse
++++++++++++

.. function:: loadNewFalse()


    Load a boolean FALSE operator



loadInt
+++++++

.. function:: loadInt()


    Load an integer operator



loadBinInt
++++++++++

.. function:: loadBinInt()


    Load a binary integer operator



loadBinInt1
+++++++++++

.. function:: loadBinInt1()


    Load the first byte of a binary integer



loadBinInt2
+++++++++++

.. function:: loadBinInt2()


    Load the second byte of a binary integer



loadLong
++++++++

.. function:: loadLong()


    Load a long (float) operator



loadLong1
+++++++++

.. function:: loadLong1()


    Load a one byte long integer



loadLong4
+++++++++

.. function:: loadLong4()


    Load a 4 byte long integer



loadFloat
+++++++++

.. function:: loadFloat()


    Load a float value



loadBinFloat
++++++++++++

.. function:: loadBinFloat()


    Load a binary float value



loadString
++++++++++

.. function:: loadString()


    Load a string



loadBinString
+++++++++++++

.. function:: loadBinString()


    Load a binary string



loadShortBinString
++++++++++++++++++

.. function:: loadShortBinString()


    Load a short binary string



loadBinBytes
++++++++++++

.. function:: loadBinBytes()


    Load arbitrary binary bytes



loadShortBinBytes
+++++++++++++++++

.. function:: loadShortBinBytes()


    Load a single binary byte



loadUnicode
+++++++++++

.. function:: loadUnicode()


    Load a unicode string



_convertMatchingUnicodeSequence2Utf8
++++++++++++++++++++++++++++++++++++

.. function:: _convertMatchingUnicodeSequence2Utf8()


    Convert a unicode sequence to UTF-8

    :param array: 

    :rtype: string 



hex2Utf8
++++++++

.. function:: hex2Utf8()


    Convert a hex string to a UTF-8 string

    :param string: 

    :rtype: string 

    :throws: Exception\RuntimeException on unmatched unicode sequence



loadBinUnicode
++++++++++++++

.. function:: loadBinUnicode()


    Load binary unicode sequence



loadMark
++++++++

.. function:: loadMark()


    Load a marker sequence



loadList
++++++++

.. function:: loadList()


    Load an array (list)



loadAppend
++++++++++

.. function:: loadAppend()


    Load an append (to list) sequence



loadEmptyList
+++++++++++++

.. function:: loadEmptyList()


    Load an empty list sequence



loadAppends
+++++++++++

.. function:: loadAppends()


    Load multiple append (to list) sequences at once



loadDict
++++++++

.. function:: loadDict()


    Load an associative array (Python dictionary)



loadSetItem
+++++++++++

.. function:: loadSetItem()


    Load an item from a set



_loadEmptyDict
++++++++++++++

.. function:: _loadEmptyDict()


    Load an empty dictionary



loadSetItems
++++++++++++

.. function:: loadSetItems()


    Load set items



loadTuple
+++++++++

.. function:: loadTuple()


    Load a tuple



loadTuple1
++++++++++

.. function:: loadTuple1()


    Load single item tuple



loadTuple2
++++++++++

.. function:: loadTuple2()


    Load two item tuple



loadTuple3
++++++++++

.. function:: loadTuple3()


    Load three item tuple



loadProto
+++++++++

.. function:: loadProto()


    Load a proto value




read
++++

.. function:: read()


    Read a segment of the pickle

    :param mixed: 

    :rtype: string 

    :throws: Exception\RuntimeException if position matches end of data



readline
++++++++

.. function:: readline()


    Read a line of the pickle at once

    :rtype: string 

    :throws: Exception\RuntimeException if no EOL character found



unquoteString
+++++++++++++

.. function:: unquoteString()


    Unquote/Unescape a quoted string

    :param string: quoted string

    :rtype: string unquoted string



lastMarker
++++++++++

.. function:: lastMarker()


    Return last marker position in stack

    :rtype: int 



decodeBinLong
+++++++++++++

.. function:: decodeBinLong()


    Decode a binary long sequence

    :param string: 

    :rtype: int|float|string 





Constants
---------

OP_MARK
+++++++

Pickle opcodes. See pickletools.py for extensive docs.

OP_STOP
+++++++

OP_POP
++++++

OP_POP_MARK
+++++++++++

OP_DUP
++++++

OP_FLOAT
++++++++

OP_INT
++++++

OP_BININT
+++++++++

OP_BININT1
++++++++++

OP_LONG
+++++++

OP_BININT2
++++++++++

OP_NONE
+++++++

OP_PERSID
+++++++++

OP_BINPERSID
++++++++++++

OP_REDUCE
+++++++++

OP_STRING
+++++++++

OP_BINSTRING
++++++++++++

OP_SHORT_BINSTRING
++++++++++++++++++

OP_UNICODE
++++++++++

OP_BINUNICODE
+++++++++++++

OP_APPEND
+++++++++

OP_BUILD
++++++++

OP_GLOBAL
+++++++++

OP_DICT
+++++++

OP_EMPTY_DICT
+++++++++++++

OP_APPENDS
++++++++++

OP_GET
++++++

OP_BINGET
+++++++++

OP_INST
+++++++

OP_LONG_BINGET
++++++++++++++

OP_LIST
+++++++

OP_EMPTY_LIST
+++++++++++++

OP_OBJ
++++++

OP_PUT
++++++

OP_BINPUT
+++++++++

OP_LONG_BINPUT
++++++++++++++

OP_SETITEM
++++++++++

OP_TUPLE
++++++++

OP_EMPTY_TUPLE
++++++++++++++

OP_SETITEMS
+++++++++++

OP_BINFLOAT
+++++++++++

OP_PROTO
++++++++

OP_NEWOBJ
+++++++++

OP_EXT1
+++++++

OP_EXT2
+++++++

OP_EXT4
+++++++

OP_TUPLE1
+++++++++

OP_TUPLE2
+++++++++

OP_TUPLE3
+++++++++

OP_NEWTRUE
++++++++++

OP_NEWFALSE
+++++++++++

OP_LONG1
++++++++

OP_LONG4
++++++++

OP_BINBYTES
+++++++++++

OP_SHORT_BINBYTES
+++++++++++++++++

