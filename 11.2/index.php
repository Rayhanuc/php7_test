<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 11.2</title>

        <!-- bootstrap css link -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- font-awesome css link -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <!-- style css link -->
        <link href="assets/css/style.css" rel="stylesheet">
        <!-- responsive css link -->
        <link href="assets/css/responsive.css" rel="stylesheet">
        <!-- css link end -->
        
    </head>
    <body>
        
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        echo "<h1 class='text-center'>PHP-7</h1> \n<br/>";
                        echo "<h3 class='text-center'>10.4 - Creating a UNIX timestamp from a string (date parsing) and finding a human readable difference between two dates
                        </h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

class Human{
    public $name;
    function sayHi() {
        echo "Salam\n<br>";
        $this->sayName();
    }
    function sayName(){
        echo "My Name is {$this->name}\n<br/>";
    }
}

class Cat{
    function sayHi() {
        echo "Meow\n<br>";
    }
}

class Dog{
    function sayHi() {
        echo "Woof\n<br>";
    }
}


$h1 = new Human();
$h2 = new Human();
$h1->name = "Rubel"; // set
$h2->name = "Hasin"; // set
$c1 = new Cat();
$d1 = new Dog();

$h1->SayHi();
// $h1->sayName();
// echo $h1->name; // get
// $c1->SayHi();
// $d1->SayHi();


$h2->SayHi();
// $h2->sayName();
// echo $h2->name; // get

// php end

                        </pre>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-area">

                        <?php
                        echo "<h4>PHP Code Result: </h4>";
                        
// php code start

class Human{
    public $name;
    function sayHi() {
        echo "Salam\n<br>";
        $this->sayName();
    }
    function sayName(){
        echo "My Name is {$this->name}\n<br/>";
    }
}

class Cat{
    function sayHi() {
        echo "Meow\n<br>";
    }
}

class Dog{
    function sayHi() {
        echo "Woof\n<br>";
    }
}


$h1 = new Human();
$h2 = new Human();
$h1->name = "Rubel"; // set
$h2->name = "Hasin"; // set
$c1 = new Cat();
$d1 = new Dog();

$h1->SayHi();
// $h1->sayName();
// echo $h1->name; // get
// $c1->SayHi();
// $d1->SayHi();


$h2->SayHi();
// $h2->sayName();
// echo $h2->name; // get

// php end
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright-area-text">
                            <p ><?php echo "© 2019 - Rayhan Uddin Chowdhury" ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <!-- jquery js link -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- bootstrap js link -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- main js link -->
        <script src="assets/js/main.js"></script>
    </body>
</html>