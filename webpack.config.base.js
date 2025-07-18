const path = require('path');

module.exports = {
  // メインとなるJavaScriptファイル（エントリーポイント）
  entry: "./src/scripts/index.js",
  // ファイルの出力設定
  output: {
    clean: true,
    //  出力ファイルのディレクトリ名
    
    path: path.join(__dirname, '/dist/assets/js/'),
    // 出力ファイル名
    filename: "index.bundle.js",
  },
  module: {
    rules: [
      {
        // 拡張子 .js の場合
        test: /\.js$/,
        use: [
          {
            // Babel を利用する
            loader: "babel-loader",
            // Babel のオプションを指定する
            options: {
              presets: [
                // プリセットを指定することで、ES2020 を ES5 に変換
                "@babel/preset-env",
              ],
            },
          },
        ],
      },
      {
        test: /\.css/,
        use: [
          "style-loader",
          {
            loader: "css-loader",
            options: {
              url: false
            }
          }
        ]
      }
    ],
  },
  plugins: [
  ],
  // ES5(IE11等)向けの指定
  target: ["web", "es5"],
};