# lara1103
test用のlaravelframeworkapplication

### ユーザー登録機能追加(1104)
- use または namespaceで指定するパスの頭にはデフォルトでは*\App,今回はTestLaravelに変更していたのでクラスをuseできなかった*
- getでregisterが来たときはコントローラ経由でトップ画面にとんで、そこの登録リンクから登録フォームregister.blade.phpに飛ぶここからformでRequestを飛ばす
    - controllerではuseされているRegisterUsersのshowRegistrationForm()に飛ぶようになってる

- POSTでregisterにrequestが来たとき(登録画面でsubmitしたとき)はコントローラ経由で登録する
    - RegisterControllerではuseされているRegiterUsersのregister()に飛ぶ
        - register()では$this->validationしてるから、validationルールは元のRegisterControllerのvalidator()に書いてある
        - createも上に同じくRegisterControllerに処理定義をしてる

### 書籍管理機能(1109)
- [x] migrationしてテーブル作成
    - マイグレーションファイルは/database/migration以下のファイル
    ```php
        public function up()
    {
        //クロージャにBlueprintのインスタンス
        Schema::create('authors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', '100');  // 著者指名
            $table->string('kana', '100');  // ふりがな
            $table->timestamps();
        });
    }
    ```
    - 削除処理はdownメソッド内に記述する
    - *php artisan migrate* はmigrationsテーブルに登録されていないマイグレーションファイルを実行する
- [x] Seederを使ってmigrationで生成したテーブルにinsert
    - シーディングするには下記を定義したクラスをDatabaseSeeder.phpのrunメソッドに追加
    - php artisan db:seed
```php
    public function run()
    {
        $now = \Carbon\Carbon::now();
        for ($i = 1; $i <= 10; $i++) {
            $author = [
                'name' => '著者名' . $i,
                'kana' => 'チョシャメイ' . $i,
                'created_at' => $now,
                'updated_at' => $now
            ];
            //DBファザードでtableに10件分をinsert
            DB::table('authors')->insert($author);
        }
    }
```
- Fakerクラスでinsert（現実に近いテストデータをisnertできる）
```php
    public function run()
    {
        // Fakerでテストデータ10件追加
        $faker = Faker\Factory::create('ja_JP');
        $now = \Carbon\Carbon::now();
        for ($i = 1; $i < 10; $i++)
        {
            $publisher = [
                'name' => $faker->company . '出版',
                'address' => $faker->address,
                'created_at' => $now,
                'updated_at' => $now
            ];
            DB::table('publishers')->insert($publisher);
        }
    }
```

- [] Factoryclassを使ってseed
1. モデルクラス作る
2. ファクトリークラス作成して、シード定義をかく
3. シーダークラスのrun()に2の処理を引っ張る
4. DatabaseSeederに3の処理を呼び出す
