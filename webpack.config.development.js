const CopyWebpackPlugin = require('copy-webpack-plugin');
const path = require('path');

const { merge } = require('webpack-merge');
const baseConfig = require('./webpack.config.base.js');

const config = merge(baseConfig, {
  mode: "development",
  devtool: 'inline-source-map',
  plugins: [
    new CopyWebpackPlugin({
      patterns: [{
        from: path.resolve(__dirname, 'public'),
        to: path.resolve(__dirname, 'dist')
      }]
    }),
  ],
});
module.exports = config;