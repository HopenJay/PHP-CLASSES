<!-- NOTE TO SELF: Public methods Private properties is a really good pactice -->
<?php 
// Classes: are basically the building block of OOP at least in php
// Defining a class
class Customer {
    // Types of access modifiers or identifiers (when you're using a class it is advisable to use them):
        // public: can be accessed globally
        // private: can't access from any  other place
        // protected: can be accessed from classes that extend customer
    private $id;
    private $name;
    protected $email;
    private $balance;

    // Constructor: is a special function that runs when you make an instance of the class(n object) ir instansiate(mk n object) the class

    // Magic funtions: Constructor and destructor are called magic functions

    // Common practice is basically when assigning class properties or what your instance should do by default you assign it in the constructor.

    public function __construct($id, $name, $email, $balance){
        $this->id       = $id;
        $this-> name    = $name;
        $this->email    = $email;
        $this->balance  = $balance;
    }

    // Methods: This are just basically functions inside of a class or n object

    // public function getCustomer($id) {
    //     $this->id = $id;
    //     return $this->id;
    // }

    // public function __destruct(){
    //     echo 'The Destructor Ran...';
    // }
    public function getEmail() {
        return $this->email;
    }
}

// Example of protected
// class MyClass extends Customer {
    
// }
// $customer = new Customer(1, 'Brad Traversy', 'brad@gmail.com', 0);

// echo $customer->getEmail();

// echo $customer->getCustomer(1111);

class Subscriber extends Customer {
    public $plan;

    public function __construct($id, $name, $email, $balance, $plan) {
        parent::__construct($id, $name, $email, $balance);
        $this->plan = $plan;
    }

    // public function getEmail() {
    //     return $this->email;
    // }
}

$subscriber = new Subscriber(1, 'Brad Traversy', 'brad@gmail.com', 0, 'Pro');

echo $subscriber->getEmail();

// Abstract classes
// When you have an abstract class it can't be instansiated(or made into an object) so you have ojust use classes that extends it. Basically you can think of an abstract class as a class you don't use directly but extend classes from it.

// Example
abstract class Customer1 {
    private $id;
    private $name;
    protected $email;
    private $balance;

    public function __construct($id, $name, $email, $balance) {
        $this->id        = $id;
        $this->name      = $name;
        $this->email     = $email;
        $this->balance   = $balance;
    }

    // You can only use abstract method in  abstract classes
    // When you use abstract for a method it can't have a body so basically you just use think of it as base method you don't use directly but extend methods from it.
    abstract public function getEmail();
}

class Subscriber1 extends Customer1 {
    public $plan;
    public function __construct($id, $name, $email, $balance, $plan)
    {
        parent::__construct($id, $name, $email, $balance);
        $this->plan = $plan;
    }
    
    public function getEmail() {
        return $this->email;
    }
}
$customer1 = new Subscriber1(1, 'Jay', 'jay@gmail.com', 20000, 'Pro');

echo $customer1->getEmail();

// Static
// You can set static properties and methods, you don't define the class but the properties and methods can be set.
// The purpose of using static classes in property is that you don't have to instantiate, that is you don't have to create an instance(object) when you use it.

class User{
    public $username;
    public $password;
    public static $passwordLength = 5;

    public static function getPasswordLength() {
        // When dealing with static property you don't want to use 'this' you use 'self'
        return self::$passwordLength;
    }
}

echo User::getPasswordLength();
?>