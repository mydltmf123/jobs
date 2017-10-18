var bcrypt = require('bcrypt');
var mysql = require('mysql');
var connection = mysql.createConnection({
	host: 'localhost',
	user: 'root',
	password: 'akfldk1',
	database: 'jobsnepal'
});

connection.connect(function() {
	console.log("Database connected2");
});


module.exports.findAll = function(callback) {
	connection.query("SELECT * FROM ws_board ORDER BY board_pid DESC", callback);
}


module.exports.addpost = function(data, callback) {
	connection.query("INSERT INTO ws_board SET ?", data, callback);
}

module.exports.findByUsername = function(name, callback) {
	connection.query("SELECT * FROM ws_board WHERE user_name = '" + subject + "'", callback);
}

module.exports.findBySubject = function(name, callback) {
	connection.query("SELECT * FROM ws_board WHERE subject = '" + subject + "'", callback);
}

module.exports.encrypt = function(data, callback) {
	bcrypt.genSalt(10, function(err, salt) {
		bcrypt.hash(data.passwd, salt, callback);
	})
}

module.exports.sendResponse = function(success, res) {
	if(success) {
		res.send({'success': 'true'});
	} else {
		res.send({'success': 'false'});
	}
}