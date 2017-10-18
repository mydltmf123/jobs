var express = require('express');
var app = express();

// Import User Module Containing Functions Related To User Data
var user = require('../model/user');

// API Routes
app.get('/', function(req, res) {
	user.findAll(function(err, rows, fields) {
		if(err) throw err;
		res.json(rows);
	})
});

app.get('/:id', function(req, res){
	user.findByUsername(req.params.id, function(err, item){
		if(err) throw err;
		return res.send(item[0]);
	})
});

app.post('/', function(req, res, next) {
	var data = {
		name: req.body.name,
		passwd: req.body.passwd
	};

	if(!data.name)
		return res.sendStatus(400);
	if(!data.passwd)
		return res.sendStatus(400);
	//if(!data.email)
	user.findByUsername(data.name, function(err, rows, fields) {
		if(rows.length == 1) {
			user.sendResponse(false, res);
		} else {
			user.encrypt(data, function(err, hash) {
				data = {
					name: data.name,
					passwd: hash
				};
				user.addUser(data, function(err, info) {
					if(err) throw err;
					console.log(info);
					user.sendResponse(true, res);
				});
			});
		};
	});
});

module.exports = app;