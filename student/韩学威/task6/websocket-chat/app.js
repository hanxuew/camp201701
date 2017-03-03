const express = require('express');
const app = express();
const mongoose = require('mongoose');
const path = require('path');
const WebSocket = require('ws');

app.set('views','./views');
app.set('view engine','ejs');
app.use(express.static(path.join(__dirname,'static'))); 
const server = app.listen(3300);

// 主页
app.get('/',function(req,res){
	res.render('index',{
		title:'登录',
		})
})
app.get('/chat',function(req,res){
		res.render('chat',{
			title:'聊天',
	})
})

class CodeGenerator{
    constructor(){
        this.code = ('' + Math.random()).slice(-8);
        this.previousCode = this.code;
        let self = this;
        //每隔10秒刷新一次
        function generateCode(){
            return new Promise((resolve) => {
                setTimeout(() => {
                let code = ('' + Math.random()).slice(-8);
                resolve(code);

                self.previousCode = self.code;
                setTimeout(() => self.previousCode = self.code, 2000);

                self.code = code;
                self.promise = generateCode();
            }, 10000);
        });
    }
        this.promise = generateCode().catch(()=>{});
    }
    generate(){
        return this.promise;
    }
    check(code){
        return this.code === code || this.previousCode === code;
    }
}

let codeGenerator = new CodeGenerator;
// code = generate.generate();
let code;
app.get('/qrcode/:previous', async function (req, res) {
  res.setHeader('Access-Control-Allow-Origin', 'http://localhost:3300');
  let clientPrevious = req.params.previous;
  code = codeGenerator.code;
  if(clientPrevious === code){
  	code = await codeGenerator.generate();
  }
  res.send({code});
});
app.get('/check/:code', function(req, res) {
  let checkCode = req.params.code;
  let msg = '验证不通过';
  if(checkCode === code || checkCode === previousCode)
    msg = '验证通过';
    res.render('chat',{
        title:'聊天',
    })
  res.send(msg);
});
const ws = new WebSocket.Server({ port: 3000});


ws.on('connection', function(ws) {
    ws.on('message', async function(message) {
        console.log(message)
        ws.send(message);
        if(message === 'open'){
            ws.send(codeGenerator.code);
            while(1){
                let code = await codeGenerator.generate();
                if(ws.readyState === ws.OPEN) ws.send(codeGenerator.code);
            }
        }
    });
});