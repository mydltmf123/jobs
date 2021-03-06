var express = require('express');
var bodyParser = require('body-parser');
var bcrypt = require('bcrypt');
var mysql = require('mysql');
var cors = require('cors');
// Initialize Express App
var app = express();

// Use Middlewares
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({extended: false}));
app.use(cors());
// Set Static Path
app.use('/', express.static(__dirname));

// Import API Routes
app.use('/api/users', require('./api/user_api'));
app.use('/api/ws_board', require('./api/ws_board_api'));
app.use('/api/js_board', require('./api/js_board_api'));//수정


//app.use('/api/post', )


port = process.env.PORT || 3000;

app.listen(port, function() {
	console.log("listening to port " + port);
})
