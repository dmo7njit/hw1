/*
	David O'Grady
	is218 HW 1 
	Singleton
	*/
	
<?php
class SingletonList
{
    public static function getList()
    {
        static $list = null;
        if (null === $list) {
            $list = new static();
        }

        return $list;
    }

    protected function __construct()
    {
    }
    
    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}

class ChildList extends SingletonList
{
}

$obj = SingletonList::getList();
var_dump($obj === SingletonList::getList());

?>