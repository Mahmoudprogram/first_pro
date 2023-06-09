<?php
trait Printer
{
    public function print()
    {
        echo 'Printing...';
    }
    public function scan()
    {
        echo 'Scanning...';
    }
    public function fax()
    {
        echo 'Faxing...';
    }
}
class Person
{
    use Printer;
    private $name = '';

    function __construct($name)
    {
        $this->name = $name;
    }
    // getter
    public function getName()
    {
        return $this->name;
    }
    // setter
    public function setName($name)
    {
        $this->name = $name;
    }

    public function greet()
    {
        echo 'Hello ' . $this->name;
    }
}

class Student extends Person
{
    use Printer;
    private $major;
    function __constructor($name, $major)
    {
        parent::__construct($name);
        $this->major = $major;
    }
    // getter
    public function getMajor()
    {
        return $this->major;
    }
    // setter
    public function setMajor($major)
    {
        $this->major = $major;
    }
    public function study()
    {
        echo $this->getName() . ' is studying ' . $this->major;
    }
    // Overriding the greet method
    public function greet()
    {
        echo "Hello, I'm " . $this->getName() . ", a student majoring in " . $this->getMajor();
    }
}

$person = new Student('John Doe', 'Computer Science');

$person->print(); // Printing...
$person->greet(); // Hello John Doe, I am stuyding Computer Science
$poerson->study(); // John Doe is studying Computer Science
