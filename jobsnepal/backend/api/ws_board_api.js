var express = require('express');
var app = express();


var ws_board = require('../model/ws_board');

// API Routes
app.get('/', function(req, res) {
	ws_board.findAll(function(err, rows, fields) {
		if(err) throw err;
		res.json(rows);
	})
});
app.get('/:id', function(req, res){
	ws_board.findByUsername(req.params.id, function(err, item){
		if(err) throw err;
		return res.send(item[0]);
	})
});

app.post('/ws_board', function(req, res, next) {
	var data = {
        title: title, 
        category: category, 
        no_of_vacancies: no_of_vacancies, 
        experience_required: experience_required, 
        job_mode: job_mode, 
        salary: salary, 
        qualification: qualification, 
        apply_before: apply_before, 
        address: address, 
        description: description, 
        remarks: remarks, 
        skills: skills
	};

    if(!data.title)
		return res.sendStatus(400);
	if(!data.category)
        return res.sendStatus(400);
    if(!data.no_of_vacancies)
        return res.sendStatus(400);
    if(!data.experience_required)
        return res.sendStatus(400);
    if(!data.job_mode)
        return res.sendStatus(400);
    if(!data.salary)
        return res.sendStatus(400);
    if(!data.qualification)
        return res.sendStatus(400);
    if(!data.apply_before)
        return res.sendStatus(400);
    if(!data.address)
        return res.sendStatus(400);
    if(!data.description)
        return res.sendStatus(400);
    if(!data.remarks)
        return res.sendStatus(400);
    if(!data.skills)
		return res.sendStatus(400);
    
    ws_board.addpost(data, function(err, info){
        if(err) throw err;
        console.log(info);
        ws_board.sendResponse(true, res);
    });
	
});

module.exports = app;