<?php
class myGroupTest extends GroupTest {
  function myGroupTest() {
    parent::GroupTest('');
    $this->addTestFile(dirname(__FILE__).'/test_imagecreatefromfile.php');
    $this->addTestFile(dirname(__FILE__).'/test_imageresize.php');
  }
}
?>