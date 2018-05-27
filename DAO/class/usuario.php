<?php
/**
*
*/
class Usuario
{
  private $idusuaro;
  private $deslogin;
  private $dessenha;
  private $dtcadastro;

  public function getIdUsuario()
  {
    return $this->idusuario;
  }

  public function setIdUsuario($value)
  {
    $this->idusuario=$value;
  }

  public function getDeslogin()
  {
    return $this->deslogin;
  }

  public function setDeslogin($value)
  {
    $this->deslogin=$value;
  }

  public function getDessenha()
  {
    return $this->dessenha;
  }

  public function setDessenha($value)
  {
    $this->dessenha=$value;
  }

  public function getDtcadastro()
  {
    return $this->dtcadastro;
  }

  public function setDtcadastro($value)
  {
    $this->dtcadastro=$value;
  }
  public function loadById($id)
  {
    $sql=new Sql();
    $results = $sql->select("SELECT * FROM tb_usuarios where idusuario = :ID", array(
      ":ID"=>$id
    ));

    if (isset($results[0])) {
      $this->setData($results[0]);
    }
  }

  public static function getList()
  {
    $sql = new Sql();
    return $sql->select("Select * from tb_usuarios ORDER BY deslogin");
  }

  public static function search($login)
  {
    $sql= new Sql();
    return $sql->select("Select * from tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
      ':SEARCH'=>"%".$login."%"
    ));
  }

  public function login($login,$password)
  {
    $sql=new Sql();
    $results = $sql->select("SELECT * FROM tb_usuarios where deslogin = :LOGIN AND dessenha = :PASSWORD", array(
      ":LOGIN"=>$login,
      ":PASSWORD"=>$password
    ));

    if (isset($results[0])) {
      $this->setData($results[0]);
    } else {
      throw new Exception("Login e/ou senha inválidos.");
    }
  }

  public function setData($data)
  {
    $this->setIdUsuario($data['idusuario']);
    $this->setDeslogin($data['deslogin']);
    $this->setDessenha($data['dessenha']);
    $this->setDtcadastro(new DateTime($data['dtcadastro']));
  }
  public function insert()
  {
    $sql=new Sql();
    $results = $sql->select("CALL sp_tb_usuarios_insert(:LOGIN, :PASSWORD)",array(
      ":LOGIN"=>$this->getDeslogin(),
      ":PASSWORD"=>$this->getDessenha()
    ));

    if (count($results)>0) {
      $this->setData($results[0]);
    }
  }

  public function update($login,$senha)
  {
    $this->setDeslogin($login);
    $this->setDessenha($senha);

    $sql=new Sql();
    $sql->query("UPDATE tb_usuarios SET deslogin=:LOGIN, dessenha=:PASSWORD WHERE idusuario=:ID", array(
      ":LOGIN"=>$this->getDeslogin(),
      ":PASSWORD"=>$this->getDessenha(),
      ":ID"=>$this->getIdUsuario()
    ));
  }

  public function __construct($login="",$senha="")
  {
    $this->setDeslogin($login);
    $this->setDessenha($senha);
  }
  public function __toString()
  {
    return json_encode(array(
      "idusuario"=>$this->getIdUsuario(),
      "deslogin"=>$this->getDeslogin(),
      "dessenha"=>$this->getDessenha(),
      "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
    ));
  }
}

?>
