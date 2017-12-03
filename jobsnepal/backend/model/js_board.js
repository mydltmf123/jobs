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
	connection.query("SELECT * FROM jobs ORDER BY id DESC", callback);
}

//수정
module.exports.addpost = function(data, callback) {
	//connection.query("INSERT INTO ws_board SET ?", data, callback);
	connection.query("INSERT INTO jobs (employer_id, title, category, no_of_vacancies, experience_required, job_mode, salary, qualification, apply_before, address, description, remarks, skills) VALUES(employer_id="+data.emplyoer_id+", title= '"+data.title+"', category= '"+data.category+"', no_of_vacancies= "+data.no_of_vacancies+", experience_required= '"+data.experience_required+"', job_mode= '"+data.job_mode+"', salary= '"+data.salary+"', qualification= '"+data.qualification+"', apply_before= '"+data.apply_befor+"', address= '"+data.address+"', description= '"+data.description+"', remarks= '"+data.remark+"', skills= '"+data.skills+"')");
}

module.exports.getpost = function(id, callback) {
	connection.query("SELECT * FROM jobs WHERE id = " + id, callback);
}
//
module.exports.findeByID = function(data, callback) {
	connection.query("SELECT * FROM jobs WEHRE id= "+id, callback);
}

module.exports.findBySubject = function(name, callback) {
	connection.query("SELECT * FROM jobs WHERE subject = '" + subject + "'", callback);
}
//findone id로

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