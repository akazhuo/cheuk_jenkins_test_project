<?php
/**
 * Created by PhpStorm.
 * User: cheuktan
 * Date: 2017/7/28 0028
 * Time: 上午 11:54
 */

class DemoTest extends PHPUnit_Framework_TestCase {
    public function testPass() {
        $this->assertTrue(true);
    }
    public function testFail() {
        $this->assertFalse(false);
    }
}