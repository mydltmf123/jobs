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

app.post('/', function(req, res, next) {
	var data = {
        user_id: req.body.user_id,
		user_name: req.body.user_name,
        subject: req.body.subject,
        content: req.body.content,
        reg_date: req.body.reg_date
	};

    if(!data.user_id)
        return res.sendStatus(400);
    if(!data.user_name)
		return res.sendStatus(400);
	if(!data.subject)
        return res.sendStatus(400);
    if(!data.content)
        return res.sendStatus(400);
    if(!data.reg_date)
		return res.sendStatus(400);
    
    ws_board.addpost(data, function(err, info){
        if(err) throw err;
        console.log(info);
        ws_board.sendResponse(true, res);
    });
	
});

module.exports = app;