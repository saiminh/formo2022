const path = require('path');

module.exports = {
  entry: {
    index: {
      import: '/js-src/index.js',
    },
    // second: {
    //   import: '/js-src/second.js',
    //   dependOn: 'shared'
    // },
    // shared: 'gsap'
  },
  optimization: {
    runtimeChunk: 'single',
  },
  output: {
    // filename: '[name].bundle.js',
    path: path.resolve(__dirname, 'js-dist'),
  },
};