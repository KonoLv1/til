## AWS Amplify（エーダブリューエス　アンプリファイ）

* Webおよびモバイルアプリ開発のためのフレームワーク
* これを用いるとAWSの豊富な機能を簡単に利用できる
* AWS製のOSS（オープンソースソフトウェア）
* これを用いてWebアプリやサイトを公開するとAmazonS3及びAmazonCloudFrontが自動的にセットアップされる
* AmazonS3はクラウドストレージ、AmazonCloudFrontはコンテンツ配信ネットワーク

### CLI （Amplify Command Line Interface）

* アプリのAWSクラウドサービスを作成、統合、管理するための統合ツールチェーン
* 利用前にNode.jsとnpmのインストールが必要

## AWS AppSync

* アプリデータをリアルタイムで保存、同期するFraphQLサービス

# 導入手順

### AWS Amplifyを導入（Mac）

01. AWS Amplifyの公式ページに飛ぶ（DevelopとDeployが表示されている）<br>
02. Developを選択<br>
03. AWSのアカウントを作成する（作成している人は4へ）<br>
04. ターミナルに下記を入力してamplify appをPCに落とす<br>
```cmd:terminal
npm install -g @aws-amplify/cli
```
失敗する場合は、Node.js（ver 8.0以降）及びnpm（ver 5.0以降）がインストールされているか確認する。<br>
**Node.jsのインストールの有無及びバージョンの確認**
```cmd:terminal
node -v
```
**npmのインストールの有無及びバージョンの確認**
```cmd:terminal
npm -v 
```
05. インストールが完了したら下記をターミナルに入力する<br>
```cmd:terminal
amplify configure
```
06. Specify the AWS Regionは好みで<br>
07. Specify the username of the new IAM userは好きな名前を<br>
08. ウェブページにぶっ飛ばされるので設定する
09. accessKeyIDに発行されたアクセスキーをコピペ<br>
10. secretAccessKeyに発行されたシークレットアクセスキーを以下略<br>
11. ProfileNameはお好みで<br>
12. iOSのページに移動する<br>
13. ターミナルをXcodeのプロジェクトがあるディレクトリに移動させる
14. 下記をターミナルに入力しCocoapodsをインストールする
```cmd:terminal
sugo gem install cocoapods
```