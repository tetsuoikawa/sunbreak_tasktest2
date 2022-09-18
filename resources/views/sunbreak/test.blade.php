<?php

class test{
    public function a(){
        echo 'aの呼び出し';
    }
    public function b(){
        echo 'bの呼び出し';
    }
}

class secondtest extends test{
    public function c(){
        echo 'cの呼び出し';
    }
}

$test2 = new secondtest();

$test3 = new test();

echo $test3->b();
?>

<script src="{{ asset('js/test.js') }}" defer></script>