const path = require('path');

module.exports = {
  entry: './resources/js/app.js', // Define o arquivo de entrada
  output: {
    path: path.resolve(__dirname, 'public/js'), // Define o diretório de saída
    filename: 'app.js', // Nome do arquivo compilado
  },
  resolve: {
    extensions: ['.js', '.vue'], // Caso use Vue ou outras extensões
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
        },
      },
    ],
  },
};
