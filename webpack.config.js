const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const webpackConfig = {
    entry: './src/scss/main.scss',
    output: {
        path: path.resolve(__dirname, './public/styles'),
    },
    plugins: [
        new MiniCssExtractPlugin({
          filename: '[name].css',
        }),
        
    
        // Uncomment this if you want to use CSS Live reload
        /*
        new BrowserSyncPlugin({
          proxy: localDomain,
          files: [ outputPath + '/*.css' ],
          injectCss: true,
        }, { reload: false, }),
        */
    ],
    module: {
        rules: [
            {
                test: /\.scss$/i,
                use: [
                  MiniCssExtractPlugin.loader,
                  'css-loader',
                  'sass-loader'
                ]
              },
        ]
    }
};

module.exports = webpackConfig;