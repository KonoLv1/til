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

1. AWS Amplifyの公式ページに飛ぶ（DevelopとDeployが表示されている）<br>
2. Developを選択<br>
3. AWSのアカウントを作成する（作成している人は4へ）<br>
4. ターミナルに「npm install -g @aws-amplify/cli」と入力してamplify appをPCに落とす<br>
失敗する場合は、Node.js（ver 8.0以降）及びnpm（ver 5.0以降）がインストールされているか確認する。<br>

```cmd
node -v
```

```terminal
npm -v 
```
5

