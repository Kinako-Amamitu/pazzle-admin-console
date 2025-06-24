# JUELHUNTER_サーバー
スマートフォン向けに開発したパズルゲーム同じ色のジュエルを3つ揃えると消える  
依頼されたジュエルを消し、世界にジュエルがあふれるのを阻止しよう

![JUELHUNTER](https://github.com/Kinako-Amamitu/pazzle-admin-console/blob/master/img/git/Juel.png?raw=true)
  
# インストール方法
* AppleStore : https://apps.apple.com/jp/app/juelhunter/id6714466273
* GooglePlay : https://play.google.com/store/apps/details?id=com.yoshidahcc.JuelHunter

# 使用技術
* PHP(使用フレームワーク:Lalavel)
* Azule
* Azule Function
* C#
* Unity

# クライアントのプログラム概要
ジュエルの同じ色が3つ揃って消える際にはまずレール内に入ったジュエルは左右にRayを飛ばしてそこに同じ色のジュエル
があるかを確認する。同じ色ならばジュエル2つの両端に別のRayを飛ばして同じ色のジュエルがあるかを判定する。
同じ色のジュエルがこのように３つそろった時、ジュエルが消える。

# システムの全体構成図
![JUELHUNTER](https://github.com/Kinako-Amamitu/pazzle-admin-console/blob/master/img/git/ERz.PNG?raw=true)
# 機能、非機能一覧

## 機能
* ユーザーを登録してそれぞれにゲームの進行状態を保存できる
## 非機能
* 大量なプレイヤーが登録されてもクラッシュしない想定(10000人ほど)
