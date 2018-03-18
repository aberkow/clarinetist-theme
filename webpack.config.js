const path = require('path');
const webpack = require('webpack');
const ExtractTextPlugin = require('extract-text-webpack-plugin');

module.exports = {
  entry: {
    index: './js/index.js', 
    maps: './js/maps.js'
  },
  output: {
    filename: '[name].js',
    path: path.resolve(__dirname, 'build'),
  },
  devtool: 'source-map',
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['babel-preset-env']
          }
        }
      },
      {
        test: /\.css$/,
        use : [
          { loader: 'style-loader' },
          {
            loader: 'css-loader',
            options: {
              modules: true
            }
          }
        ]
      },
      {
        test: /\.scss$/,
        use: ExtractTextPlugin.extract({
          fallback: 'style-loader',
          use: [
            {
              loader: 'css-loader',
              options: {
                minimize: true,
                sourceMaps: true
              }
            },
            {
              loader: 'sass-loader',
              options: {
                sourceMaps: true
              }
            }
          ]
        })      
      }
    ]
  },
  plugins: [
    new ExtractTextPlugin({
      filename: 'main.css'
    })
  ],
  resolve: { 
    extensions: ['.js', '.scss', '.css'] 
  }
}