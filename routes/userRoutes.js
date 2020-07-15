const fs = require('fs')
const { join } = require('path')
const { get } = require('https')

//arquivo json para simular banco de dados
const filePath = join(__dirname, 'db.json')

//função para pegar os dados
const getUsers = function(){
    //verificar se o arquivo existe
    const data = fs.existsSync() 
        ? fs.readFileSync(filePath)
    //se não existe retorna um vazio
        : []

    //tratar
    try {
        return JSON.parse(data)
    } catch (error) {
        return []
    }
}

//salvando
const saveUser = function(user){
    return fs.writeFileSync(filePath, JSON.stringify(user, null, '\t'))
}

const userRoute = function(app){
    return app.route('/user/:id?')
        .get((req,res) => {
            const user = getUsers()

            res.send({ user })
        })
        .post((req, res) => {
            const user = getUsers()

            user.push(req.body)
            saveUser(user)

            res.status(201).send('ok')
        })
}

module.exports = userRoute