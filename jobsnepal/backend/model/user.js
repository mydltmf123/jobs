var bcrypt = require('bcrypt');
var mysql = require('mysql');
var connection = mysql.createConnection({
	host: 'localhost',
	user: 'root',
	password: '1234',
	database: 'jobsnepal'
});

connection.connect(function() {
	console.log("Database connected");
});


module.exports.findAll = function(callback) {
	connection.query("SELECT * FROM users ORDER BY id DESC", callback);
}


module.exports.addUser = function(data, callback) {
	connection.query("INSERT INTO users SET ?", data, callback);
}

module.exports.findByUsername = function(name, callback) {
	connection.query("SELECT * FROM users WHERE name = '" + name + "'", callback);
}

module.exports.encrypt = function(data, callback) {
	bcrypt.genSalt(10, function(err, salt) {
		bcrypt.hash(data.password, salt, callback);
	})
}

module.exports.sendResponse = function(success, res) {
	if(success) {
		res.send({'success': 'true'});
	} else {
		res.send({'success': 'false'});
	}
}