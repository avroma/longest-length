<?php
    use PHPUnit\Framework\TestCase;
    require_once './src/LongestLength.php';

    class LongestLengthTest extends TestCase {
        public function testLongestLength() {
            $testDataLongestLength = array(
                array(
                    "result" => 3,
                    "input" => "asddf"
                ),
                array(
                    "result" => 4,
                    "input" => "aaasdfff"
                ),
                array(
                    "result" => 5,
                    "input" => "aaasdfffqwerrrr"
                ),
                array(
                    "result" => 5,
                    "input" => "abcdeef"
                )
            );

            for($i = 0; $i < count($testDataLongestLength); $i++) {
                $this->assertEquals($testDataLongestLength[$i]["result"], longestLength($testDataLongestLength[$i]["input"]));
            }
        }
    }
?>