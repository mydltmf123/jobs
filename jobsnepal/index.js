var express = require('express');
var app = express();



app.get('/', function (req, res){
	res.send('Hello World!');
});

app.listen(3000, function() {
	console.log('a');
});
/*
var fs = require('fs');
var http = require('http');
var mysql = require('mysql');
var express = require('express');
var bodyParser = require('body-parser');
var ejs = require('ejs');

var mySqlClient = mysql.createConnection({
    host     : 'localhost',
    
    user : 'root',
   password : 'akfldk1',
    database : 'jobsnepal'
    
});

var app = express();

http.createServer(app).listen(4200, function(){
   console.log('Server running');
});

app.get( '*', function(req, res){
    
    fs.readFile('./src/index.html', 'utf8', function(error, data){
       if(error){
          console.log('readFile Error');
       }else{
          mySqlClient.query('select * from user', function(error, results){
             if(error){
                console.log('error : ', error.message);
             }else{
                res.send( ejs.render(data, {
                         prodList : results
                         
                     }));
                     console.log(results);
                     
             }
          });
       }
    })
 }); 
 

app.use(bodyParser.urlencoded({ extended: true })); // support encoded bodies
app.post( '/resume', function(req, res){
   var body = req.body;

   mySqlClient.query( 'Insert into user(name, email, passwd) values(?, ?, ?)',
         [ body.name, body.email, body.passwd ], 
         function(error, result){
            if(error){
                    console.log('insert error : ', error.message );
                    console.log(result );
            }else{
               res.redirect('/resume');
            }
   });
});

app.post( '/edit/:id', function(req, res){
   var body = req.body;
   
   mySqlClient.query( 'update products set name=?, modelnumber=?, series=? where id=?',
         [ body.name, body.modelnumber, body.series, body.id ], 
         function(error, result){
            if(error){
               console.log('update error : ', error.message );
            }else{
               res.redirect('/');
            }
   });
});

/*
    var connection     =    mysql.createConnection
    ({
        host     : 'localhost',
        user     : 'root',
        password : '1234',
        database : 'example',
        port : 4200,
        connectionLimit:20,
        waitForConnections:false
    });
    connection.connect(function(err) 
    {
        if (err) 
        {
            console.error('mysql connection error');
            console.error(err);
            throw err;
        }
    });
    
    
    app.set('port', process.env.PORT || 3000);
    app.set('views', path.join(__dirname, 'views'));
    app.set('view engine', 'ejs');
    app.use(express.favicon());
    app.use(express.logger('dev'));
    app.use(express.json());
    app.use(express.urlencoded());
    app.use(express.methodOverride());
    app.use(express.cookieParser('your secret here'));
    app.use(express.session());
    app.use(app.router);
    app.use(express.static(path.join(__dirname, 'public')));
    
    app.post('/users',function(req,res){
        var user = {'userid':req.body.userid,
                    'name':req.body.name,
                    'address':req.body.address};
        var query = connection.query('insert into users set ?',user,function(err,result){
            if (err) {
                console.error(err);
                throw err;
            }
            console.log(query);
            res.send(200,'success');
        });
    });
    app.get('/users', function(req,res){
        pool.getConnection(function(err,connection){
            var query = connection.query('select * from users', function (err, rows) {
                if(err){
                    connection.release();
                    throw err;
                }
                console.log(rows);
                res.json(rows);
                connection.release();
            });
            console.log(query);
        });
    });
    
       */