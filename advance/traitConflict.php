<?php
trait A {
    public function smallTalk() {
        echo "a\n";
    }
    public function bigTalk() {
        echo "A\n";
    }
}

trait B {
    public function smallTalk() {
        echo "b\n";
    }
    public function bigTalk() {
        echo "B\n";
    }
}

class Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
    }
}

class Aliased_Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;		#replace B 
        B::bigTalk as talk;		#为bigTalk设置别名
    }
}


$obj = new Aliased_Talker();

$obj->smallTalk();
$obj->bigTalk();
$obj->talk();
?>
