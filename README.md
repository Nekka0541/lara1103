# lara1103
test用のlaravelframeworkapplication

## ユーザー登録機能追加(1104)
- use または namespaceで指定するパスの頭にはデフォルトでは*\App,今回はTestLaravelに変更していたのでクラスをuseできなかった*
- getでregisterが来たときはコントローラ経由でトップ画面にとんで、そこの登録リンクから登録フォームregister.blade.phpに飛ぶここからformでRequestを飛ばす
- controllerではuseされているRegisterUsersのshowRegistrationForm()に飛ぶようになってる

- POSTでregisterにrequestが来たとき(登録画面でsubmitしたとき)はコントローラ経由で登録する
- RegisterControllerではuseされているRegiterUsersのregister()に飛ぶ
- register()では$this->validationしてるから、validationルールは元のRegisterControllerのvalidator()に書いてある
- createも上に同じくRegisterControllerに処理定義をしてる

