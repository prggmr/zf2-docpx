.. View/Helper/HeadLink.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\View\\Helper\\HeadLink
============================

Zend_Layout_View_Helper_HeadLink

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor
    
    Use PHP_EOL as separator



__invoke
++++++++

.. function:: __invoke()


    headLink() - View Helper Method
    
    Returns current object instance. Optionally, allows passing array of
    values to build link.

    :param array: 
    :param string: 

    :rtype: \Zend\View\Helper\HeadLink 



__call
++++++

.. function:: __call()


    Overload method access
    
    Creates the following virtual methods:
    - appendStylesheet($href, $media, $conditionalStylesheet, $extras)
    - offsetSetStylesheet($index, $href, $media, $conditionalStylesheet, $extras)
    - prependStylesheet($href, $media, $conditionalStylesheet, $extras)
    - setStylesheet($href, $media, $conditionalStylesheet, $extras)
    - appendAlternate($href, $type, $title, $extras)
    - offsetSetAlternate($index, $href, $type, $title, $extras)
    - prependAlternate($href, $type, $title, $extras)
    - setAlternate($href, $type, $title, $extras)
    
    Items that may be added in the future:
    - Navigation?  need to find docs on this
      - public function appendStart()
      - public function appendContents()
      - public function appendPrev()
      - public function appendNext()
      - public function appendIndex()
      - public function appendEnd()
      - public function appendGlossary()
      - public function appendAppendix()
      - public function appendHelp()
      - public function appendBookmark()
    - Other?
      - public function appendCopyright()
      - public function appendChapter()
      - public function appendSection()
      - public function appendSubsection()

    :param mixed: 
    :param mixed: 

    :rtype: void 

    :throws: Exception\BadMethodCallException 



isValid
+++++++

.. function:: isValid()


    Check if value is valid

    :param mixed: 

    :rtype: bool 



append
++++++

.. function:: append()


    append()

    :param array: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException 



offsetSet
+++++++++

.. function:: offsetSet()


    offsetSet()

    :param string|int: 
    :param array: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException 



prepend
+++++++

.. function:: prepend()


    prepend()

    :param array: 

    :rtype: HeadLink 

    :throws: Exception\InvalidArgumentException 



set
+++

.. function:: set()


    set()

    :param array: 

    :rtype: HeadLink 

    :throws: Exception\InvalidArgumentException 



itemToString
++++++++++++

.. function:: itemToString()


    Create HTML link element from data item

    :param stdClass: 

    :rtype: string 



toString
++++++++

.. function:: toString()


    Render link elements as string

    :param string|int: 

    :rtype: string 



createData
++++++++++

.. function:: createData()


    Create data item for stack

    :param array: 

    :rtype: stdClass 



createDataStylesheet
++++++++++++++++++++

.. function:: createDataStylesheet()


    Create item for stylesheet link item

    :param array: 

    :rtype: stdClass|false Returns false if stylesheet is a duplicate



isDuplicateStylesheet
+++++++++++++++++++++

.. function:: isDuplicateStylesheet()


    Is the linked stylesheet a duplicate?

    :param string: 

    :rtype: bool 



createDataAlternate
+++++++++++++++++++

.. function:: createDataAlternate()


    Create item for alternate link item

    :param array: 

    :rtype: stdClass 

    :throws: Exception\InvalidArgumentException 



createDataPrev
++++++++++++++

.. function:: createDataPrev()


    Create item for a prev relationship (mainly used for pagination)

    :param array: 

    :rtype: stdClass 



createDataNext
++++++++++++++

.. function:: createDataNext()


    Create item for a prev relationship (mainly used for pagination)

    :param array: 

    :rtype: stdClass 



