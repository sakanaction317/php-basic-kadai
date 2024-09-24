<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
    <p>
        <?php
        class Food{
            // プロパティ
            public $name;
            public $price;

            // メソッド
            public function show_price(){
                echo $this->price . '<br>';
            }

            // コンストラクタ
            public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }
        }

        class Animal{
            // プロパティ
            public $name;
            public $height;
            public $weight;

            // メソッド
            public function show_height(){
                echo $this->height . '<br>';
            }

            // コンストラクタ
            public function __construct(string $name, int $price, int $height){
                $this->name = $name;
                $this->price = $price;
                $this->height = $height;
            }
        }

        // インスタンスを出力
        $apple = new Food('りんご', 300);
        print_r($apple);

        echo '<br>';

        $dog = new Animal('犬', 80, 70);
        print_r($dog);

        echo '<br>';

        // メソッドにアクセス
        $apple->show_price();
        $dog->show_height();
        ?>
    </p>
 </body>
 
 </html>