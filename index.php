<!DOCTYPE HTML>
<html>
  <head>
    <title>Example</title>
  </head>
  <body>
    <?php
      echo "Hi, I'm a PHP script!";
      echo nl2br("\n"); // 改行

      function br() {
        return nl2br("\n");
      }
    ?>

    <?php
      $inputAmount = 150; //投入金額を変数にセット
      $amount = 120; //ジュースの値段を変数にセット

      function vendingMachine($input, $price) {
        //ジュースの値段と投入金額を比較演算子を使って比較します。
        if($input >= $price) {
          echo 'ご利用ありがとうございます';
          echo nl2br("\n");
        } else{
          echo '投入金額が不足しています';
          exit();
        } 
 
        //お釣りを計算してあれば出す 
        $change = $input - $price;
        if($change > 0){
          echo 'お釣りは' . $change . '円です' ;
        }
      }

      // vendingMachine($inputAmount, $amount);
    ?>

    <?php
      function fizzbuzz($count) {
        $fizz = [];
        $buzz = [];
        $fizzbuzz = [];
        for($i = 1; $i <= $count; $i++) {
          if ($i % 3 === 0 && $i % 5 === 0) {
            array_push($fizzbuzz, $i);
          } else if ($i % 5 === 0) {
            array_push($buzz, $i);
          } else if ($i % 3 === 0) {
            array_push($fizz, $i);
          }
        }

        var_dump($fizz);
        var_dump($buzz);
        var_dump($fizzbuzz);
      }

      // fizzbuzz(100);
    ?>

    <?php
      class FizzBuzz {
        protected $limit;
        protected $fizz = [];
        protected $buzz = [];
        protected $fizzbuzz = [];

        public function __construct($count) {
          $this->limit = $count;
        }

        private function rollup() {
          $limit = $this->limit;
          for($i = 1; $i <= $limit; $i++) {
            if ($i % 3 === 0 && $i % 5 === 0) {
              array_push($this->fizzbuzz, $i);
            } else if ($i % 5 === 0) {
              array_push($this->buzz, $i);
            } else if ($i % 3 === 0) {
              array_push($this->fizz, $i);
            }
          }
        }

        private function showArray() {
          var_dump($this->fizz);
          var_dump($this->buzz);
          var_dump($this->fizzbuzz);
        }

        public function start() {
          $this->rollup();
          $this->showArray();
        }
      }

      $fizzbuzz = new FizzBuzz(100);
      // $fizzbuzz->start();

    ?>

    <?php
      class ExFizzBuzz extends FizzBuzz{
        public function startMeUp() {
          echo 'start!' . br();
          $this->start();
        }
      }

      $exFizzBuzz = new ExFizzBuzz(100);
      $exFizzBuzz->startMeUp();
    ?>

  </body>
</html>
