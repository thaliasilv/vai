        <h2 style="color: orange; margin-top: 5%;"> Cadastre-se aqui: </h2>
        <hr align="center" width="100%" size="1" color="orange">
  
<div class="corpinho">
 <div class="caixinha">
    <form action="" method="POST">
        <label style="color: orange" for="fname">Nome</label> <br>
            <input type="text"  name="nomec" placeholder="Thalia Beatriz..."><br><br>
        <label style="color: orange" for="fname">CPF</label><br>
             <input type="text"  name="cpf" placeholder="12345678963"><br><br>
    Sexo:<label style="color: orange"> Feminino </label>
              <input type="radio" name="sexc" value="F">
        <label style="color: orange"> Masculino </label>
              <input type="radio" name="sexc" value="M">               
               
    <script>
       $(document).ready(function() {	
           	
            //CARREGA CALENDÁRIO 
            $('#calendario').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                defaultDate: '2016-01-12',
                editable: true,
                eventLimit: true, 
            });
                
    </script>
    
    <style>
        #calendario{
            position: relative;
            width: 70%;
            
        }        
    </style>
    
</head>
<body>    
    <div id='calendario'>          
                Data de Nascimento: <input type="date" name="dataNc" required/>       
    </div>  
        <label style="color: orange" for="fname">Email</label><br>
             <input type="text"  name="emailc" placeholder="thalia@gmail.com"><br><br>
        <label style="color: orange" for="fname">Senha</label><br>
              <input type="text"  name="senhac" placeholder="0000000"><br><br>
        <label style="color: orange" for="fname">Tipo</label><br>
                <input type="text"  name="tipoc" placeholder="x"><br><br>
                

     <br><br> <a style="color: orange" href="./endereco/cadastro/"><button style="color: orange">Cadastrar</button></a>
                <br><br><br><br>            
                <a style="color: orange" href="./cliente/listar/">Ver clientes cadastrados</a>
         
         </form>
        
        
              <?php if(ehPost()){
             foreach ($errors as $erro){
                echo"$erro <br>";
            
 }
   }  
   ?>
    </div>
</div>
        
      
