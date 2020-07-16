//adicionando express no projeto
const express = require('express')
const bodyParser = require('body-parser')
//requisitando o arquivos das rotas dos usuarios
const userRoute = require('./routes/userRoutes')

const app = express()
//definir a porta que sera rodado a aplicação

const port = 3000



//dizeendo para o node que vamos usar o midelware bodyParse
app.use(bodyParser.urlencoded({ extended: false}))

userRoute(app)

app.get("/", function(req, res){
    res.send('Ola Mundo!')
})


app.listen(port, function(){
    console.log('Servidor Rodando')
})

//instalar dependencias antes de escrever o código
// - npm init  ---> para iniciar o arquivo das dependencias
// - npm install express --save ---> --save para adicionar a dependencia ele no packjson
// - npm instal -D nodemon --> -D é a mesma coisa que --save-dev, instala localmente
// crie um atalho no script e rode o nodemon como 'npm run dev'