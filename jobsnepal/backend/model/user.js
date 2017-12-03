var bcrypt = require('bcrypt');
var mysql = require('mysql');
var connection = mysql.createConnection({
	host: 'localhost',
	user: 'root',
	password: 'akfldk1',
	database: 'jobsnepal'
});

var salt = 'test1234';

connection.connect(function() {
	console.log("Database connected");
});


module.exports.findAll = function(callback) {
	connection.query("SELECT * FROM users ORDER BY id DESC", callback);
}


// module.exports.addUser = function(data, callback) {
// 	connection.query("INSERT IGNORE INTO users SET ?", data, callback);
// }

module.exports.addUser = function(data, callback){
	connection.query("INSERT INTO users (name, email, password, image, user_type) VALUES('"+data.name+"', '"+data.email+"', password('"+data.password+"'), '"+data.image+"', '"+data.user_type+"')", callback);
}
module.exports.findByEmail = function(email, callback){
	connection.query("SELECT * FROM users WHERE email = '" + email + "'", callback);
}
module.exports.authentication=function(data, callback){
	// 생성된 해쉬를 원래 비밀번호로 검증한다. 맞을 경우 true를 반환한다. 주로 회원 로그인 로직에서 사용된다. 
	//boolean isValidPassword = BCrypt.checkpw(password, passwordHashed);
	connection.query("SELECT * FROM users WHERE email='"+data.email+"' and password=password('"+data.password+"')", callback);
}
module.exports.findByUsername = function(name, callback) {
	connection.query("SELECT * FROM users WHERE name = '" + name + "'", callback);
}

module.exports.encrypt = function(data, callback) {
	//bcrypt.genSalt(10, function(err, salt) {
	// 	bcrypt.hash(data.password, salt, callback);
	//})
	bcrypt.hash(data.password, salt, callback);
	//bcrypt.hash(data.password, bcrypt.genSalt(10), callback);
	 

}

module.exports.sendResponse = function(success, res) {
	if(success) {
		res.send({'success': 'true'});
	} else {
		res.send({'success': 'false'});
	}
}