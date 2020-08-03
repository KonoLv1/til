# Git_command_alias

## Gitコマンドのエイリアス設定について

* **エイリアスとは？**

別名のこと。<br>
git branch などを　git b などに短縮できる。

## 設定方法

* **コマンドで設定する方法**

**git branch を git b　でも使えるようにする**

マシン全体に反映させる
```
git config --system alias.b branch
```
ユーザー単位で反映させる
```
git config --global alias.b branch
```
リポジトリ単位で反映させる
```
git config alias.b branch
```
誤って設定した場合（解除）
```
git config --global --unset alias.b
```
## メリット
コマンドを打つ時間を短縮できる。
## 設定例
```
git config --global alias.b branch
git config --global alias.co checkout
```
