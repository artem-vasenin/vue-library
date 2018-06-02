var path = require('path')
var UglifyJSPlugin = require('uglifyjs-webpack-plugin'); // плагин минимизации
const VueLoaderPlugin = require('vue-loader/lib/plugin'); // плагин для загрузки кода Vue

module.exports = {
  mode: 'development',
 entry: './static_src/index.js',
 output: {
   path: path.resolve(__dirname, './templates/static/js'),
   publicPath: '/templates/static/js/',
   filename: 'main.js'
 },
 module: {
   rules: [
     {
       test: /\.vue$/,
       loader: 'vue-loader'
     }, {
      test: /\.css$/,
      use: [
        'vue-style-loader',
        'css-loader'
      ]
    }
   ]
 },
 plugins: [
    new UglifyJSPlugin(),
    new VueLoaderPlugin()
   ]
}
