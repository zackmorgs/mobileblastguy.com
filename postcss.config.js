/** @type {import('postcss-load-config').Config} */
const config = {
    syntax: 'postcss-scss',
    plugins: [
        require('autoprefixer'),
    ]
}

module.exports = config