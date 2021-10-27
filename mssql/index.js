const sql=require('mssql');

const config={
    user: 'sa',
    password: 'super_duper_password',
    server: 'localhost',
    database: 'my_posts',
    options:{enableArithAbort: true 
    }
    
}

const run= async() => {
    try{
        

        console.log("connection opening...");
        const pool = await sql.connect(config);
        const{recordest}= await sql.query`select * from users;`;

        console.log(recordest);
    }   catch (err){
        console.log(err)
    }   finally {
        await pool.close();
        console.log('connection closed')
    }
}
run();

