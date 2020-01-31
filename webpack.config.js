const path = require("path");
const extractPluginCss = require("mini-css-extract-plugin");
const { CleanWebpackPlugin } = require("clean-webpack-plugin");
// const CopyWebpackPlugin = require("copy-webpack-plugin");
const Dotenv = require("dotenv-webpack");
const webpack = require("webpack");

const webpackBaseConfig = {
  // externals: {
  //   iconpicker: "iconpicker"
  // },

  entry: { app: "./resources/app.js" },
  output: {
    filename: "[name].js",
    path: path.resolve(__dirname, "./assets")
  },
  devServer: {
    compress: true,
    port: 8900,
    inline: true
  },
  module: {
    rules: [
      {
        test: [/.js$|.ts$/],
        exclude: /node_modules/,
        use: [
          {
            loader: "babel-loader",
            options: {
              presets: ["@babel/preset-env", "@babel/typescript"]
            }
          }
        ]
      },
      {
        test: /\.(png|jpe?g|gif)$/i,
        use: [
          {
            loader: "file-loader",
            options: {
              publicPath: "/images",
              outputPath: "images"
            }
          }
        ]
      },
      {
        test: [/.css$|.scss$/],
        use: [
          {
            loader: extractPluginCss.loader,
            options: {
              sourceMap: true
            }
          },
          {
            loader: "css-loader",
            options: {
              sourceMap: true
            }
          },
          {
            loader: "postcss-loader",
            options: {
              sourceMap: true
            }
          },
          {
            loader: "sass-loader",
            options: {
              sourceMap: true
            }
          }
        ]
      }
    ]
  },

  plugins: [
    new webpack.ProvidePlugin({
      $: "jquery",
      jQuery: "jquery",
      jquery: "jquery"
    }),
    new extractPluginCss({
      filename: "css/style.css",
      sourceMap: true
    }),
    require("autoprefixer"),
    new CleanWebpackPlugin(),
    // new Dotenv({
    //   path: "./webpack.env"
    // }),
    new webpack.SourceMapDevToolPlugin({
      filename: "[file].map"
    })
  ],
  resolve: {
    extensions: [".ts", ".js"]
  }
};

const environment = (process.env.NODE_ENV || "development").trim();
if (environment === "development") {
  module.exports = webpackBaseConfig;
} else {
  const merge = require("webpack-merge");
  const UglifyJsPlugin = require("uglifyjs-webpack-plugin");
  const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");

  module.exports = merge(webpackBaseConfig, {
    optimization: {
      minimizer: [new UglifyJsPlugin(), new OptimizeCSSAssetsPlugin()]
    }
  });
}
