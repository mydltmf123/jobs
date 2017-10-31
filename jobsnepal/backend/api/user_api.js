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

app.get('/email=:email/password=:password', function(req, res){
	console.log(req.params);
	console.log(req.params.email);
	console.log(req.params.password);
	var data={
		email:req.params.email,
		password:req.params.password
	}
	user.findByUsername(data.email, function(err, rows, item){
		if(err) throw err;
		if(rows.length == 1) {			
			user.encrypt(data, function(err, hash) {
				data = {
					email: data.email,
					password: hash,
				};
				if(data.password==rows.password){
					console.log(data.email);
					console.log(data.password);
					user.sendResponse(true, res);
				}
				else {
					console.log(data)
					user.sendResponse(false, res);
				};
				
			});

		} else {
			user.sendResponse(false, res);
			
		};
		//return res.send(item[0]);
		//res.json(item)
	})
});
/*app.get('/:id', function(req, res, next){
	var data ={
		email:req.body.email,
		password:req.body.password,
	};
	if(!data.email){
		console.log(data.email);
		return res.sendStatus(400);
	}
	if(!data.password){
		console.log(data.password);
		return res.sendStatus(400);
	}
	user.findByUsername(data.email, function(err, rows, fields) {
		if(rows.email == data.email) {
			
			user.encrypt(data, function(err, hash) {
				data = {
					email: data.email,
					password: hash,
				};
				if(data.password==rows.password){
					console.log(info)
					user.sendResponse(true, res);
				}
				else {
					user.sendResponse(false, res);
				};
				
			});

		} else {
			user.sendResponse(false, res);
			
		};
	});
});*/
app.post('/', function(req, res, next) {
	var data = {
		name: req.body.name,
		email: req.body.email,
		password: req.body.password,
		image: req.body.image,
		user_type: req.body.user_type

	};

	if(!data.name)
		{
			console.log(data.name);
			return res.sendStatus(400);
		}
	if(!data.password)
		{
			console.log(data.password);
			return res.sendStatus(400);
		}
	if(!data.email)
		{
			console.log(data.email);
			return res.sendStatus(400);
		}
	if(!data.image)
		{ 
			console.log(data.image);
			return res.sendStatus(400);
		}
		
	if(!data.user_type)
		{
			console.log(data.user_type);
			return res.sendStatus(400);
		}	


		
	user.findByUsername(data.email, function(err, rows, fields) {
		if(rows.length == 1) {
			user.sendResponse(false, res);
		} else {
			user.encrypt(data, function(err, hash) {
				data = {
					name: data.name,
					email: data.email,
					password: hash,
					image: data.image,
					user_type: data.user_type
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