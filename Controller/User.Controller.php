<?php
class User
{
    public function Login()
    {
        $persona =new Usuario();
        $smarty=new Smarty();
        $user=$_POST['nombre'];
        $pass=$_POST['pass'];
        
        $dato=$persona->BuscarUsuario($user,$pass);
        //var_dump($dato);
        $vec=mysqli_fetch_assoc($dato);
        echo "<br />";
       // var_dump($vec);

       if($dato->num_rows==1)
       {
           echo "Bienvenido";
       }
       else 
       {
           echo "Usuario no registrado";
       }

    }
    public function Update()
    {
        echo "en update";
    }
    public function Delet()
    {
        echo "en delet";
    }
}
?>