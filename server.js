const express = require('express');
const serveStatic = require('serve-static');
const helmet = require('helmet');
const app = express();
const port = process.env.PORT || 5000;

app.use(helmet());
app.use(serveStatic(__dirname, { index: 'index.html' }));

app.listen(port);

console.log('server started ' + port);