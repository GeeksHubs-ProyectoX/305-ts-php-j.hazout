<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Puntero\Puntero;

class Test01Test extends TestCase
{

    public function test1()
    {
        $result = (new Puntero())->apply(0);
        $this->assertEquals($result, 1);
    }

    public function test2()
    {
        $result = (new Puntero())->apply(1);
        $this->assertEquals($result, 3);
    }

    public function test3()
    {
        $result = (new Puntero())->apply(3);
        $this->assertEquals($result, 7);
    }

    public function test4()
    {
        $result = (new Puntero())->apply(4);
        $this->assertEquals($result, 9);
    }

    public function test5()
    {
        $result = (new Puntero())->apply(6);
        $this->assertEquals($result, 13);
    }

    public function test6()
    {
        $result = (new Puntero())->apply(10);
        $this->assertEquals($result, 22);
    }

    public function test7()
    {
        $result = (new Puntero())->apply(20);
        $this->assertEquals($result, 57);
    }

    public function test8()
    {
        $result = (new Puntero())->apply(30);
        $this->assertEquals($result, 91);
    }

    public function test9()
    {
        $result = (new Puntero())->apply(50);
        $this->assertEquals($result, 175);
    }

    public function test10()
    {
        $result = (new Puntero())->apply(100);
        $this->assertEquals($result, 447);
    }

    public function test11()
    {
        $result = (new Puntero())->apply(500);
        $this->assertEquals($result, 3355);
    }

    public function test12()
    {
        $result = (new Puntero())->apply(1000);
        $this->assertEquals($result, 8488);
    }

    public function test13()
    {
        $result = (new Puntero())->apply(2000);
        $this->assertEquals($result, 19773);
    }

    public function test14()
    {
        $result = (new Puntero())->apply(5000);
        $this->assertEquals($result, 65857);
    }

    public function test15()
    {
        $result = (new Puntero())->apply(10000);
        $this->assertEquals($result, 157654);
    }

    public function test16()
    {
        $result = (new Puntero())->apply(10500);
        $this->assertEquals($result, 164974);
    }

    public function test17()
    {
        $result = (new Puntero())->apply(20500);
        $this->assertEquals($result, 398395);
    }

    public function test18()
    {
        $result = (new Puntero())->apply(33252);
        $this->assertEquals($result, 713047);
    }

    public function test19()
    {
        $result = (new Puntero())->apply(52025);
        $this->assertEquals($result, 1295050);
    }

    public function test20()
    {
        $result = (new Puntero())->apply(65289);
        $this->assertEquals($result, 1734760);
    }

    public function test21()
    {
        $result = (new Puntero())->apply(70001);
        $this->assertEquals($result, 1889167);
    }

    public function test22()
    {
        $result = (new Puntero())->apply(86595);
        $this->assertEquals($result, 2482249);
    }

    public function test23()
    {
        $result = (new Puntero())->apply(9000);
        $this->assertEquals($result, 140895);
    }

    public function test24()
    {
        $result = (new Puntero())->apply(96632);
        $this->assertEquals($result, 2810875);
    }

    public function test25()
    {
        $result = (new Puntero())->apply(100000);
        $this->assertEquals($result, 2911582);
    }

    public function test26()
    {
        $result = (new Puntero())->apply(111666);
        $this->assertEquals($result, 3433983);
    }

    public function test27()
    {
        $result = (new Puntero())->apply(200000);
        $this->assertEquals($result, 7202134);
    }

    public function test28()
    {
        $result = (new Puntero())->apply(500000);
        $this->assertEquals($result, 22843255);
    }

    public function test29()
    {
        $result = (new Puntero())->apply(600000);
        $this->assertEquals($result, 28864270);
    }

    public function test30()
    {
        $result = (new Puntero())->apply(700000);
        $this->assertEquals($result, 34750036);
    }

    public function test31()
    {
        $result = (new Puntero())->apply(888525);
        $this->assertEquals($result, 47267410);
    }

    public function test32()
    {
        $result = (new Puntero())->apply(999919);
        $this->assertEquals($result, 54379678);
    }

    public function test33()
    {
        $result = (new Puntero())->apply(1000001);
        $this->assertEquals($result, 54381295);
    }

    public function test34()
    {
        $result = (new Puntero())->apply(2000002);
        $this->assertEquals($result, 133028683);
    }

    public function test35()
    {
        $result = (new Puntero())->apply(5000005);
        $this->assertEquals($result, 420804568);
    }

    public function test36()
    {
        $result = (new Puntero())->apply(10050001);
        $this->assertEquals($result, 1035776431);
    }


    public function test37()
    {
        $result = (new Puntero())->apply(50050001);
        $this->assertEquals($result, 7830969883);
    }

    public function test38()
    {
        $result = (new Puntero())->apply(5);
        $this->assertEquals($result, 10);
    }
}
