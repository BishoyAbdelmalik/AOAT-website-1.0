const path = require("path");
module.exports = {
    mode: 'development',
    entry: [
        "./src/js/index.js",
        "./src/sass/app.scss"
    ],
    output: {
        filename: './script.js',
        path: path.resolve(__dirname, 'dist')
    },
    module: {
        rules: [
            {
                test: /\.scss$/,
                use: [
                    {
                        loader: 'file-loader',
                        options: {
                            name: 'style.css'
                        }
                    },
                    {loader: 'extract-loader'},
                    {loader: "css-loader?url"},
                    {loader: "sass-loader"}
                ]
            }
        ]
    }
}