var express = require('express');
var app = express();


var js_board = require('../model/js_board');

// API Routes
app.get('/', function(req, res) {
	js_board.findAll(function(err, rows, fields) {
		if(err) throw err;
		res.json(rows);
	})
});
app.get('/:id', function(req, res){
	js_board.getpost(req.params.id, function(err, item){
		if(err) throw err;
		return res.send(item[0]);
	})
});
//수정
app.post('/new', function(req, res, next) {
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
    
    js_board.addpost(data, function(err, info){
        if(err) throw err;
        console.log(info);
        js_board.sendResponse(true, res);
    });
	
});

module.exports = app;