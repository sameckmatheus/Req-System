<?php
class User {
    private $conn;
    private $table_name = "users";

    public $id;
    public $nome;
    public $email;
    public $senha;
    public $tipo;
    public $senha_raw; // Adicionando a propriedade senha_raw

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET nome=:nome, email=:email, senha=:senha, tipo=:tipo";

        $stmt = $this->conn->prepare($query);

        $this->nome = htmlspecialchars(strip_tags($this->nome));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->senha = password_hash($this->senha_raw, PASSWORD_BCRYPT); // Usar senha_raw para hashing
        $this->tipo = htmlspecialchars(strip_tags($this->tipo));

        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":senha", $this->senha);
        $stmt->bindParam(":tipo", $this->tipo);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function login() {
        $query = "SELECT id, nome, email, senha, tipo FROM " . $this->table_name . " WHERE email = ? LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->email);
        $stmt->execute();

        $num = $stmt->rowCount();

        if ($num > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->id = $row['id'];
            $this->nome = $row['nome'];
            $this->senha = $row['senha'];
            $this->tipo = $row['tipo'];

            if (password_verify($this->senha_raw, $this->senha)) {
                return true;
            }
        }
        return false;
    }
}
?>
