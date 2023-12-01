# Introduction
This is a simple gulp boilerplate to get you started.


## Steps
### After installing the packages with
```bash
npm install
```

### Compile files and run the server with
```bash
npm start
```

### リキッドレイアウト

###  'myrem'関数
- ピクセルをrem単位に変換します。
- 使用例: myrem(32) → 2rem

###  'strip-unit'関数
- 数値に単位が付与されている場合、この関数は単位を取り除きます。
- 使用例: strip-unit(16px) → 16

###  'vw'関数
- フォントサイズと画面幅を引数として取り、適切なvw単位の値を返します。
- vw(1250px, 16px) → 16px ÷ 1250px × 100vw
- 画面幅に応じて、ルート要素のフォントサイズを動的に設定し使用します。

