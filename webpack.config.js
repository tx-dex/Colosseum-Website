const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");
const FixStyleOnlyEntriesPlugin = require("webpack-fix-style-only-entries");
const ConcatPlugin = require('webpack-concat-plugin');
const path = require("path")
const drupalthemepath = "./web/themes/custom/cd_group"

function recursiveIssuer(m) {
  if (m.issuer) {
    return recursiveIssuer(m.issuer);
  } else if (m.name) {
    return m.name;
  } else {
    return false;
  }
}

module.exports = {
  mode: 'development',
  entry: {
    styles: drupalthemepath + '/sass/styles.scss',
    editor: drupalthemepath + '/sass/editor.scss'
  },
  devServer: {
    contentBase: 'static',
    watchContentBase: true
  },
  output: {
    path: path.resolve(__dirname, './')
  },
  module: {
    rules: [
      {
        test: /\.(png|jpg|gif|svg)$/i,
        use: [
          {
            loader: 'url-loader',
            options: {
              limit: 8192,
              name: '[name].[hash:7].[ext]'
            },
          },
        ],
      },
      {
        test: /\.(woff|woff2|eot|ttf)$/i,
        use: [
          {
            loader: 'url-loader',
            options: {
              limit: 8192,
              name: '../fonts/' + '[name].[ext]'
            },
          },
        ],
      },
      // Extracts the compiled CSS from the SASS files defined in the entry
      {
        test: /\.scss$/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader
          },
          {
            // Interprets CSS
            loader: "css-loader",
            options: {
              importLoaders: 2,
              url: false
            }
          },
          {
            loader: 'sass-loader' // 将 Sass 编译成 CSS
          }
        ]
      }
    ],
  },
  plugins: [
    // Prevents creation of extra js files from sass files
    new FixStyleOnlyEntriesPlugin(),
    // Where the compiled SASS is saved to
    new MiniCssExtractPlugin({
      filename: drupalthemepath + '/css/[name].css',
      allChunks: true,
    }),
    new ConcatPlugin({
      uglify: false,
      sourceMap: false,
      name: 'result',
      outputPath: drupalthemepath + '/js/dist/',
      fileName: 'plugins.js',
      filesToConcat: [
        './node_modules/popper.js/dist/umd/popper.js',
        './node_modules/bootstrap/dist/js/bootstrap.js',
      ],
      attributes: {
        async: true
      }
    })
  ],
  optimization: {
    splitChunks: {
      cacheGroups: {
        mainStyles: {
          name: 'styles',
          test: (m, c, entry = 'styles') =>
            m.constructor.name === 'CssModule' && recursiveIssuer(m) === entry,
          chunks: 'all',
          enforce: true,
        },
        editorStyles: {
          name: 'editor',
          test: (m, c, entry = 'editor') =>
            m.constructor.name === 'CssModule' && recursiveIssuer(m) === entry,
          chunks: 'all',
          enforce: true,
        },
      },
    },
    minimizer: [
      new OptimizeCSSAssetsPlugin({
        cssProcessorOptions: {
          safe: true,
          cssProcessor: require('cssnano'),
          cssProcessorPluginOptions: {
            preset: [
              'default',
              { discardComments: { removeAll: true }, normalizeWhitespace: true },
              ],
          }
        }
      })
    ]
  },
};